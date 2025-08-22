<?php

namespace App\Http\Controllers\Manage;

use Exception;
use App\Models\Module;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\CustomeClasses\OwnClasses;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PermissionController extends Controller
{
   
    public function index(Request $request)
    {
        $filters = $request->only(['name']);
        $modules = Module::with('permissions')
                    ->Filter($filters)
                    ->OrderByAscId()
                    ->paginate(self::WEB_PAGINATOR_NUMBER)->withQueryString();
        return $request->ajax()
            ? view('backend.pages.permissions.filter', compact('modules'))
            : view('backend.pages.permissions.index', compact('modules'));
    }

    public function create()
    {
        $modules = Module::all();
        return view('backend.pages.permissions.create_edit',compact('modules'));
    }

    public function store(Request $request)
    {
        try{
            DB::beginTransaction();
            $request->validate([
                'module_id' => 'required',
                'name' => 'required|string|max:255|unique:permissions,name',
            ]);
            $permission = Permission::updateOrCreate([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'module_id' => $request->module_id
            ]);
            DB::commit();
             OwnClasses::ActivityLoger(
                'success',
                'Permission',
                'Permission Create',
                "Permission create successfully. ID: {$permission->id} , Permission Name: {$permission->name}",
                Auth::user()->id
            );
            return redirect()->route('permissions.index')->with('message','Permission Create SuccessFully');
        }catch(Exception $e){
            DB::rollBack();
            OwnClasses::ActivityLoger(
                'failed',
                'Permission',
                'Permission Create',
                "Permission creation failed. Attempted Permission Name: {$request->name}",
                Auth::user()->id
            );
            return redirect()->route('permissions.index')->with('message','Permission Create Failed');
        }
    }

    public function edit(Permission $permission)
    {
        $modules = Module::all();
        return view('backend.pages.permissions.create_edit',compact('modules','permission'));
      
    }

    public function update(Permission $permission,Request $request)
    {
         try{
            DB::beginTransaction();
            $request->validate([
                'module_id' => 'required',
                'name' => 'required|string|max:255|unique:permissions,name,' . $permission->id,
            ]);
            $permission->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'module_id' => $request->module_id
            ]);
            DB::commit();
            OwnClasses::ActivityLoger(
                'success',
                'Permission',
                'Permission update',
                "Permission updated successfully. ID: {$permission->id} , Permission Name: {$permission->name}",
                Auth::user()->id
            );
            return redirect()->route('permissions.index')->with('message','Permission Update SuccessFully');
        }catch(Exception $e){
            DB::rollBack();
            OwnClasses::ActivityLoger(
                'failed',
                'Permission',
                'Permission Update',
                "Permission updated successfully. ID: {$permission->id} , Permission Name: {$permission->name},",
                Auth::id()
            );
           return redirect()->route('permissions.index')->with('message','Permission Update Faield');
        }
    }

    public function destroy($id)
    {
        try {
            $permission = Permission::findOrFail($id);
            OwnClasses::ActivityLoger(
                'success',
                'Permission',
                'Permission Delete',
                "Permission deleted successfully. ID: {$permission->id} , Permission Name: {$permission->name}",
                Auth::id()
            );
            $data = $permission->delete();
            return response()->json([
                'data'=>$data,
                'success' => 'Permission deleted successfully!'
            ]);
        } catch (\Exception $e) {
            OwnClasses::ActivityLoger(
                'failed',
                'Permission',
                'Permission Delete',
                "Permission deleted failed. ID: {$permission->id} , Permission Name: {$permission->name}",
                Auth::id()
            );
            return response()->json(['success' => false, 'message' => 'Failed to delete module. Please try again.']);
        }
    }
}
