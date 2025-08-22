<?php

namespace App\Http\Controllers\Manage;

use Exception;
use App\Models\Module;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\CustomeClasses\OwnClasses;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ModuleController extends Controller
{
    public function index(Request $request)
    {
        if (request()->ajax()) {
            // Get user data
            $modules = Module::query()
                ->select('id', 'name');  

            return DataTables::of($modules)
                ->addIndexColumn()  // Add index for row numbering
               
                ->addColumn('action', function($row) {
                    $editBtn = '<a href="' . route('modules.edit', $row->id) . '" class="btn btn-sm btn-primary me-1" title="Edit"><i class="fas fa-edit"></i></a>';

                    $deleteBtn = '<button data-id="' . $row->id . '" class="btn btn-sm btn-danger delete-btn" title="Delete"><i class="fas fa-trash-alt"></i></button>';
                
                    return $editBtn . $deleteBtn;
                })
                ->rawColumns(['action', 'status'])// Allow raw HTML for action column
                ->make(true);  // Return response in DataTables format
        }

        return view('backend.pages.modules.index');

    }

    public function create()
    {
       
        return view('backend.pages.modules.create_edit');
    }

    public function store(Request $request)
    {
        try{
            DB::beginTransaction();
            $request->validate([
                'name' => 'required|string|max:255|unique:modules,name',
            ]);
            $module = Module::updateOrCreate([
                'name' => $request->name,
                'slug' => Str::slug($request->name).time(),
            ]);
            DB::commit();
            OwnClasses::ActivityLoger(
                'success',
                'Module',
                'Module Create',
                "Module create successfully. ID: {$module->id} , Module Name: {$module->name}",
                Auth::user()->id
            );
            return redirect()->route('modules.index')->with('message','Module Create SuccessFully');
        }catch(Exception $e){
            DB::rollBack();
            OwnClasses::ActivityLoger(
                'failed',
                'Module',
                'Module Create',
                "Module creation failed. Attempted Module Name: {$request->name}",
                Auth::user()->id
            );
            return redirect()->route('modules.index')->with('error',self::DEFAULT_ERROR_MESSAGE); 
        }
    }

    public function edit(Module $module)
    {
        return view('backend.pages.modules.create_edit',compact('module'));
    }
    public function update(Module $module,Request $request)
    {
        try{
            DB::beginTransaction();
            $request->validate([
                'name' => 'required|string|max:255|unique:modules,name,' . $module->id,
            ]);
            $module->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name).time(),
            ]);
            DB::commit();
            OwnClasses::ActivityLoger(
                'success',
                'Module',
                'Module update',
                "Module updated successfully. ID: {$module->id} , Module Name: {$module->name}",
                Auth::user()->id
            );
            return redirect()->route('modules.index')->with('message','Module Update SuccessFully');
        }catch(Exception $e){
            DB::rollBack();
            OwnClasses::ActivityLoger(
                'failed',
                'Module',
                'Module Update',
                "Module updated successfully. ID: {$module->id} , Module Name: {$module->name},",
                Auth::id()
            );
            return redirect()->route('modules.index')->with('error',self::DEFAULT_ERROR_MESSAGE); 
        }
    }

    public function destroy($id)
    {
        try {
         
            $module = Module::findOrFail($id);
            OwnClasses::ActivityLoger(
                'success',
                'Module',
                'Module Delete',
                "Module deleted successfully. ID: {$module->id} , Module Name: {$module->name}",
                Auth::id()
            );
            $module->delete();
            return response()->json(['success' => true, 'message' => 'Module deleted successfully']);
        } catch (\Exception $e) {
            OwnClasses::ActivityLoger(
                'failed',
                'Module',
                'Module Delete',
                "Module deleted failed. ID: {$module->id} , Module Name: {$module->name}",
                Auth::id()
            );
            return response()->json(['success' => false, 'message' => 'Failed to delete module. Please try again.']);
        }
    }

    
}
