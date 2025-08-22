<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class ActivityLogController extends Controller
{
    public function index(Request $request){
        if ($request->ajax()) {
            $activity = ActivityLog::with(['creator:id,name'])->latest();

            return DataTables::of($activity)
                ->addIndexColumn()
                ->addColumn('user_name', function($row) {
                    return $row->creator->name ?? 'N/A';
                })
                ->addColumn('formated_date', function($row) {
                    return $row->created_at->format('d M y h:i A');
                })
                ->rawColumns(['user_name', 'formated_date'])
                ->make(true);
        }

        return view('backend.pages.activity_log.index');
    }

}
