<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Backend\Categories;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            // Get user data
            $categories = Categories::query()
                ->select('id', 'name', 'delete_able', 'status');

            return DataTables::of($categories)
                ->addIndexColumn()  // Add index for row numbering
                ->addColumn('category_name', function ($row) {
                    return $row->name ? $row->name : 'N/A';  // Handle null category
                })
                ->addColumn('status', function ($row) {
                    $badgeClass = $row->status == 1 ? 'success' : 'danger';
                    $label = $row->status == 1 ? 'Active' : 'Inactive';
                    return '<span class="badge bg-' . $badgeClass . '">' . $label . '</span>';
                })
                ->addColumn('action', function ($row) {
                    $editBtn = '<a href="' . route('roles.edit', $row->id) . '" class="btn btn-sm btn-primary me-1" title="Edit"><i class="fas fa-edit"></i></a>';

                    $permissionBtn = '<a href="' . route('roles.permission', $row->id) . '" class="btn btn-sm btn-info me-1" title="Assigned Permission"><i class="fas fa-shield-alt"></i></a>';

                    $deleteBtn = '';
                    if ($row->delete_able == 1) {
                        $deleteBtn = '<button data-id="' . $row->id . '" class="btn btn-sm btn-danger delete-btn" title="Delete"><i class="fas fa-trash-alt"></i></button>';
                    }

                    return $editBtn . $permissionBtn . $deleteBtn;
                })
                ->rawColumns(['action', 'status'])// Allow raw HTML for action column
                ->make(true);  // Return response in DataTables format
        }
        return view('backend.pages.categories.index');
    }
    public function create()
    {
        return view('backend.pages.categories.create');
    }
    public function store(Request $request)
    {
        //
    }
    public function show(string $category)
    {
        //
    }
    public function edit(string $category)
    {
        return view('backend.pages.categories.edit', compact('category'));
    }
    public function update(Request $request, string $category)
    {
        //
    }
    public function destroy(string $id)
    {
        //
    }
}
