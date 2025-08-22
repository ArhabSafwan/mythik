<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscription;
use Yajra\DataTables\Facades\DataTables;

class NewsLetterController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $newsLetter = NewsletterSubscription::query()
                ->orderBy('created_at', 'desc')
                ->select(
                    'id',
                    'email',
                    'created_at',
                );

            return DataTables::of($newsLetter)
                ->addIndexColumn()

                ->addColumn('created_at', function ($row) {
                    return Carbon::parse($row->created_at)->format('jS F Y, g:ia');
                })
                ->filterColumn('created_at', function ($query, $keyword) {
                    try {
                        $date = \Carbon\Carbon::parse($keyword);
                        $query->whereBetween('created_at', [$date->startOfDay(), $date->endOfDay()]);
                    } catch (\Exception $e) {
                        $query->where('created_at', 'like', "%{$keyword}%");
                    }
                })
                ->make(true);
        }
        return view('backend.pages.newsletter.index');
    }

    public function export(Request $request)
    {
        $query = NewsletterSubscription::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('email', 'like', "%$search%");
            });
        }

        $newsletters = $query->get();

        $filename = 'newsletter_' . now()->format('Y_m_d_His') . '.csv';

        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
        ];

        $columns = [
            'Submission Time',
            'Email',
        ];
        $decodeAndImplode = function ($jsonString) {
            $arr = json_decode($jsonString, true);
            if (is_array($arr)) {
                return implode(', ', $arr);
            }
            if (is_array($jsonString)) {
                return implode(', ', $jsonString);
            }
            return $jsonString ?? '';
        };
        $callback = function () use ($newsletters, $columns, $decodeAndImplode) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($newsletters as $p) {
                $submissionTime = $p->created_at->format('jS F Y, g:ia');
                fputcsv($file, [
                    $submissionTime,
                    $p->email,
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

}
