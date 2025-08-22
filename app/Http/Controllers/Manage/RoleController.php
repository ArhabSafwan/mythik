<?php

namespace App\Http\Controllers\Manage;

use Exception;
use App\Models\Role;
use App\Models\Module;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\CustomeClasses\OwnClasses;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        if (request()->ajax()) {
            // Get user data
            $roles = Role::query()
                ->select('id', 'name', 'delete_able','status');  

            return DataTables::of($roles)
                ->addIndexColumn()  // Add index for row numbering
                ->addColumn('role_name', function($row) {
                    return $row->name ? $row->name : 'N/A';  // Handle null role
                })
                ->addColumn('status', function ($row) {
                    $badgeClass = $row->status == 1 ? 'success' : 'danger';
                    $label = $row->status == 1 ? 'Active' : 'Inactive';
                    return '<span class="badge bg-' . $badgeClass . '">' . $label . '</span>';
                })
                ->addColumn('action', function($row) {
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

        return view('backend.pages.roles.index'); // Load the view with DataTable

       
    }

    public function create()
    {
        return view('backend.pages.roles.create');
    }

    public function store(Request $request)
    {
        try{
            DB::beginTransaction();
            $request->validate([
                'name' => 'required|string|max:255|unique:roles,name',
            ]);
            $role = Role::updateOrCreate([
                'name' => $request->name,
                'slug' => Str::slug($request->name).time(),
                'status' => $request->status ?? 0,
                'delete_able' => 1
            ]);
            DB::commit();
             OwnClasses::ActivityLoger(
                'success',
                'Role',
                'Role Create',
                "Role create successfully. ID: {$role->id} , Role Name: {$role->name}",
                Auth::user()->id
            );
            return redirect()->route('roles.index')->with('message','Role Create SuccessFully');
        }catch(Exception $e){
            DB::rollBack();
             OwnClasses::ActivityLoger(
                'failed',
                'Role',
                'Role Create',
                "Role creation failed. Attempted Role Name: {$request->name}",
                Auth::user()->id
            );
            return redirect()->route('roles.index')->with('error',self::DEFAULT_ERROR_MESSAGE); 
        }
    }

    public function edit(Role $role)
    {
        return view('backend.pages.roles.edit',compact('role'));
    }
    public function update(Role $role,Request $request)
    {
        try{
            DB::beginTransaction();
            $request->validate([
                'name' => 'required|string|max:255|unique:roles,name,' . $role->id,
            ]);
            $role->update([
                'name' => $request->name,
                'delete_status' => $role->delete_status
            ]);
            DB::commit();
             OwnClasses::ActivityLoger(
                'success',
                'Role',
                'Role update',
                "Role updated successfully. ID: {$role->id} , Role Name: {$role->name}",
                Auth::user()->id
            );
            return redirect()->route('roles.index')->with('message','Role Update SuccessFully');
        }catch(Exception $e){
            DB::rollBack();
             OwnClasses::ActivityLoger(
                'failed',
                'Role',
                'Role Update',
                "Role updated successfully. ID: {$role->id} , Role Name: {$role->name},",
                Auth::id()
            );
            return redirect()->route('roles.index')->with('error',self::DEFAULT_ERROR_MESSAGE); 
        }
    }

    public function destroy($id)
    {
        try {
            // Find the role by ID
            $role = Role::findOrFail($id);
            OwnClasses::ActivityLoger(
                'success',
                'Role',
                'Role Delete',
                "Role deleted successfully. ID: {$role->id} , Role Name: {$role->name}",
                Auth::id()
            );
            // Delete the role
            $role->delete();

            // Return a success response
            return response()->json(['success' => true, 'message' => 'Role deleted successfully']);
        } catch (\Exception $e) {
           OwnClasses::ActivityLoger(
                'failed',
                'Role',
                'Role Delete',
                "Role deleted failed. ID: {$role->id} , Role Name: {$role->name}",
                Auth::id()
            );
            return response()->json(['success' => false, 'message' => 'Failed to delete role. Please try again.']);
        }
    }

    public function rolePermissionEdit(Role $role)
    {
        
        $modules=Module::all();
        return view('backend.pages.roles.permission',compact('modules','role'));
        
    }
    public function rolePermissionUpdate(Role $role,Request $request)
    {
        if (!$role) {
            return redirect()->route('roles.index')->with('message','Role not found');
        }
    
        $permissions = $request->input('permissions', []);
    
        try {
            $role->permissions()->sync($permissions);
             OwnClasses::ActivityLoger(
                'success',
                'Role',
                'Role Permission',
                "Role Permission Update Successfully. ID: {$role->id} , Role Name: {$role->name}",
                Auth::id()
            );
            return redirect()->route('roles.index')->with('message','Permissions updated successfully');
        } catch (\Exception $e) {
             OwnClasses::ActivityLoger(
                'failed',
                'Role',
                'Role Permission',
                "Role Permission Update failed. ID: {$role->id} , Role Name: {$role->name}",
                Auth::id()
            );
            return redirect()->route('roles.index')->with('message','Error updating permissions');
        }
    }
}
