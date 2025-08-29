<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\FileUploadHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ProductRequest;
use App\Models\Backend\Categories;
use App\Models\Backend\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $products = Products::with('category')->select('products.*');

            return DataTables::of($products)
                ->addIndexColumn()
                ->addColumn('product_name', function ($row) {
                    return $row->title ? $row->title : 'N/A';
                })
                ->addColumn('category', function ($row) {
                    return $row->category ? $row->category->name : 'N/A';
                })
                ->addColumn('price', function ($row) {
                    return $row->price ? '$' . number_format($row->price, 2) : 'N/A';
                })
                ->addColumn('stock', function ($row) {
                    return $row->stock ?? 'N/A';
                })
                ->addColumn('status', function ($row) {
                    return $row->status ? ucfirst($row->status) : 'N/A';
                })
                ->addColumn('action', function ($row) {
                    $editBtn = '<a href="' . route('products.edit', $row->id) . '" class="btn btn-sm btn-primary me-1" title="Edit"><i class="fas fa-edit"></i></a>';
                    $deleteBtn = '<button data-id="' . $row->id . '" class="btn btn-sm btn-danger delete-btn" title="Delete"><i class="fas fa-trash-alt"></i></button>';
                    return $editBtn . $deleteBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.pages.products.index');
    }

    public function create()
    {
        $categories = Categories::all();
        return view('backend.pages.products.create', compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $data['image'] = FileUploadHelper::upload($request->file('image'), null, 'products');
        }

        $product = Products::create($data);

        if ($product) {
            session()->flash('message', 'Product created successfully!');
            return redirect()->route('products.index');
        }
        session()->flash('error', 'Something went wrong!');
        return redirect()->back();
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Products $product)
    {
        $categories = Categories::all();
        return view('backend.pages.products.edit', compact('product', 'categories'));
    }

    public function update(ProductRequest $request, Products $product)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $data['image'] = FileUploadHelper::upload($request->file('image'), $product->image, 'products');
        }

        $product->update($data);

        if ($product) {
            session()->flash('message', 'Product updated successfully!');
            return redirect()->route('products.index');
        }
        session()->flash('error', 'Something went wrong!');
        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $product = Products::find($id);
        if ($product) {
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
            $product->delete();
            return response()->json(['success' => true, 'message' => 'Product deleted successfully!']);
        }
        return response()->json(['success' => false, 'message' => 'Product not found!']);
    }
}