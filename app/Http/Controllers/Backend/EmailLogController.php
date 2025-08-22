<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Models\RegistrationApprovedEmailLog;

class EmailLogController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $fieldVisits = RegistrationApprovedEmailLog::query()
                ->orderBy('created_at', 'desc')
                ->select(
                    'id',
                    'to',
                    'subject',
                    'status',
                    'error_message',
                    'mailable_type',
                    'mail_type',
                    'created_at',
                    'updated_at',
                );

            return DataTables::of($fieldVisits)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status == 'pending') {
                        return '<span class="badge bg-label-warning text-capitalized">Pending</span>';
                    } elseif ($row->status == 'success') {
                        return '<span class="badge bg-label-success text-capitalized">Success</span>';
                    } else {
                        return '<span class="badge bg-label-danger text-capitalized">Failed</span>';
                    }
                })
                ->addColumn('error_message', function ($row) {
                    return $row->error_message ? $row->error_message : 'N/A';
                })
                ->addColumn('created_at', function ($row) {
                    return Carbon::parse($row->created_at)->format('jS F Y, g:ia');
                })
                ->addColumn('updated_at', function ($row) {
                    return Carbon::parse($row->updated_at)->format('jS F Y, g:ia');
                })
                ->filterColumn('created_at', function ($query, $keyword) {
                    try {
                        $date = \Carbon\Carbon::parse($keyword);
                        $query->whereBetween('created_at', [$date->startOfDay(), $date->endOfDay()]);
                    } catch (\Exception $e) {
                        $query->where('created_at', 'like', "%{$keyword}%");
                    }
                })
                ->rawColumns(['status'])
                ->make(true);
        }

        return view('backend.pages.email_log.index');
    }

    public function export(Request $request)
    {
        $query = RegistrationApprovedEmailLog::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('to', 'like', "%$search%");
            });
        }

        $emailLogs = $query->get();

        $filename = 'emailLog_' . now()->format('Y_m_d_His') . '.csv';

        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
        ];

        $columns = [
            'Start Time',
            'End Time',
            'To',
            'Subject',
            'Status',
            'Mail Type',
            'Mailable Type',
            'Error Message',
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
        $callback = function () use ($emailLogs, $columns, $decodeAndImplode) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($emailLogs as $p) {
                $startTime = $p->created_at->format('jS F Y, g:ia');
                $endTime = $p->updated_at->format('jS F Y, g:ia');
                fputcsv($file, [
                    $startTime,
                    $endTime,
                    $p->to,
                    $p->subject,
                    $p->status,
                    $p->mail_type,
                    $p->mailable_type,
                    $p->error_message ? $p->error_message : 'N/A',
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
