<?php

namespace App\Http\Controllers\Backend;

use Exception;
use App\Models\Role;
use App\Models\User;
use App\Models\Module;
use Illuminate\Support\Str;
use App\Helpers\FileUploadHelper;
use App\CustomeClasses\OwnClasses;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Validation\Rules\Password;
use App\Http\Requests\Backend\UserStoreRequest;
use App\Http\Requests\Backend\UserUpdateRequest;

class UserController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            // Get user data
            $users = User::query()
                ->select('id', 'name', 'user_name', 'phone', 'email', 'role_id','status')
                ->with('role');  // Include the role relationship

            return DataTables::of($users)
                ->addIndexColumn()  // Add index for row numbering
                ->addColumn('role_name', function($row) {
                    return $row->role ? $row->role->name : 'N/A';  // Handle null role
                })
                ->addColumn('status', function ($row) {
                    $badgeClass = $row->status == 1 ? 'success' : 'danger';
                    $label = $row->status == 1 ? 'Active' : 'Inactive';
                    return '<span class="badge bg-' . $badgeClass . '">' . $label . '</span>';
                })
                ->addColumn('action', function($row) {
                    return '<a href="' . route('users.edit', $row->id) . '" class="btn btn-sm btn-primary">Edit</a>';
                })
                ->rawColumns(['action', 'status'])// Allow raw HTML for action column
                ->make(true);  // Return response in DataTables format
        }

        return view('backend.pages.users.index'); // Load the view with DataTable
    }


    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }
    public function create()
    {
        $roles = Role::Status(1)->get();

        return view('backend.pages.users.create', compact('roles'));
    }

    public function store(UserStoreRequest $request)
    {
        try {
            DB::beginTransaction();

            $defaultPhoto = 'dummy/user/user.png';


            $userPhoto = $request->hasFile('image')
                ? FileUploadHelper::upload($request->file('image'), '', 'profile-photos')
                : $defaultPhoto;

            $user =  User::create([
                'created_by' => Auth::id(),
                'name' => $request->full_name,
                'user_name' => $request->user_name,
                'email' => $request->email,
                'photo' => $userPhoto,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'status' => $request->status,
                'role_id' => $request->role_id,
                'user_type	' => 2,
                'slug' => Str::slug($request->full_name),
            ]);

            DB::commit();
            OwnClasses::ActivityLoger(
                'success',
                'User',
                'User create',
                "User created successfully. Name: {$user->name}, Email: {$user->email}, ID: {$user->id}",
                Auth::user()->id
            );
            return redirect()->route('users.index')->with('message', 'User Create SuccessFully');
        } catch (Exception $e) {
            OwnClasses::ActivityLoger(
                'failed',
                'User',
                'User Create',
                "User creation failed. Attempted Name: {$request->full_name}, Email: {$request->email}",
                Auth::user()->id
            );
            DB::rollBack();
            return redirect()->route('users.index')->with('error', self::DEFAULT_ERROR_MESSAGE);
        }
    }

    public function edit(User $user)
    {
        $roles = Role::all();

        return view('backend.pages.users.edit', compact('roles', 'user'));
    }

    public function update(User $user, UserUpdateRequest $request)
    {

        DB::beginTransaction();
          $userPhoto = $request->hasFile('image')
                ? FileUploadHelper::upload($request->file('image'), $user->photo, 'profile-photos')
                : $user->photo;

        try {
            $user->update([
                'name' => $request->full_name,
                'slug' => Str::slug($request->full_name),
                'user_name' => $request->user_name,
                'phone' => $request->phone,
                'email' => $request->email,
                'status' => $request->status,
                'role_id' => $request->role_id ? $request->role_id : $user->role_id,
                'password' => $request->filled('password') ? Hash::make($request->password) : $user->password,
                'updated_by' => Auth::user()->id,
                'photo' => $userPhoto,
            ]);
            DB::commit();
            OwnClasses::ActivityLoger(
                'success',
                'User',
                'User update',
                "User updated successfully. Name: {$user->name}, Email: {$user->email}, ID: {$user->id}",
                Auth::user()->id
            );
            return redirect()->route('users.index')->with('message', 'User Updated SuccessFully');
        } catch (\Exception $e) {
            DB::rollBack();
           OwnClasses::ActivityLoger(
                'failed',
                'User',
                'User Update',
                "User updated successfully. Name: {$user->name}, Email: {$user->email}, ID: {$user->id}",
                Auth::id()
            );
             redirect()->route('users.index')->with('error', self::DEFAULT_ERROR_MESSAGE);
        }
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        OwnClasses::ActivityLoger(
            'success',
            'User',
            'User Delete',
            "User deleted successfully. Name: {$user->name}, Email: {$user->email}, ID: {$user->id}",
        Auth::id()
        );
        $data = $user->delete();
        return response()->json([
            'data' => $data,
            'success' => 'User deleted successfully!'
        ]);
    }

}
