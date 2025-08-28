<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CategoryRequest;
use App\Models\Backend\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            // Get user data
            $categories = Categories::query()
                ->select('id', 'name', 'slug');

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
                    $editBtn = '<a href="' . route('categories.edit', $row->id) . '" class="btn btn-sm btn-primary me-1" title="Edit"><i class="fas fa-edit"></i></a>';

                    $deleteBtn = '';
                    if ($row->delete_able == 1) {
                        $deleteBtn = '<button data-id="' . $row->id . '" class="btn btn-sm btn-danger delete-btn" title="Delete"><i class="fas fa-trash-alt"></i></button>';
                    }

                    return $editBtn . $deleteBtn;
                })
                ->rawColumns(['action'])// Allow raw HTML for action column
                ->make(true);  // Return response in DataTables format
        }
        return view('backend.pages.categories.index');
    }
    public function create()
    {
        return view('backend.pages.categories.create');
    }
    public function store(CategoryRequest $request)
    {
        $category = Categories::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        if ($category) {
            session()->flash('message', 'Category created successfully!');
            return redirect()->route('categories.index');
        }
        session()->flash('error', 'Something went wrong!');
        return redirect()->back();
    }
    public function show(string $category)
    {
        //
    }
    public function edit(Categories $category)
    {
        return view('backend.pages.categories.edit', compact('category'));
    }
    public function update(CategoryRequest $request, Categories $category)
    {
        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        if ($category) {
            session()->flash('message', 'Category updated successfully!');
            return redirect()->route('categories.index');
        }
        session()->flash('error', 'Something went wrong!');
        return redirect()->back();
    }
    public function destroy(string $id)
    {
        //
    }
}
