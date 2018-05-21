<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
// Sử dụng laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Session;

class RoleController extends Controller
{
    public function __construct() {
        // Sử dụng cùng lúc hai middleware để bảo vệ controller:
        //    auth (của Laravel): Chỉ cho phép user đã được chứng thực
        //    isAdmin (của Spatie laravel permission plugin): Chỉ cho phép user có permission chỉ định
        //isAdmin middleware lets only users with a specific permission permission to access these resources
        $this->middleware(['auth', 'isAdmin']); 
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // HIỂN THỊ DANH MỤC ROLE

        $roles = Role::all(); //Get all roles
        
        return view('backend.role.list')->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // HIỂN THỊ VIEW TẠO ROLE

        // Lấy các record permission từ DB
        $permissions = Permission::all(); //Get all permissions
        // Truyền cho view để gán cho role được tạo
        return view('roles.create', ['permissions' => $permissions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // LƯU ROLE ĐƯỢC TẠO MỚI VÀO DB

        // Kiểm tra dữ liệu nhập
        $this->validate($request, [
            'name' => 'required|unique:roles|max:10',
            'permissions' => 'required'
            ]
        );

        $roleName = $request['name'];
        $role = new Role();
        $role->name = $roleName;

        // Lấy mảng chứa id của các permission được chọn để gán cho role
        $permissions = $request['permissions'];

        $role->save();

        // Duyệt từng permission id, gán các permission được chọn cho role
        foreach ($permissions as $permissionID) {
            // Lấy record permission
            $permissionRecord = Permission::where('id', '=', $permissionID)->firstOrFail(); 
            
            // Lấy mẩu tin role vừa tạo từ DB
            $role = Role::where('name', '=', $roleName)->first(); 
            // Gán permission cho role
            $role->givePermissionTo($permissionRecord);
        }

        return redirect()->route('role.index')->with('message', 'Vai trò tên '. $role->name .' đã được lưu thành công!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return redirect('role');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // HIỂN THỊ VIEW CẬP NHẬT ROLE

        $role = Role::findOrFail($id);
        $permissions = Permission::all();

        return view('backend.role.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // CẬP NHẬT DỮ LIỆU ROLE TRONG DB

        $role = Role::findOrFail($id); // Get role with the given id
        // Kiểm tra dữ liệu
        $this->validate($request, [
            'name' => 'required|max:10|unique:roles,name,' . $id,
            'permissions' => 'required'
        ]);
        
        // Lấy tất cả dữ liệu được post về trừ field tên permissions
        $input = $request->except(['permissions']);
        // Lấy field tên permissions
        $permissionIDs = $request['permissions'];
        // Lưu vào DB
        $role->fill($input)->save();

        $permissions = Permission::all();    // Get all permissions

        // Thu hồi các permission hiện cấp cho role
        foreach ($permissions as $permission) {
            $role->revokePermissionTo($permission); //Remove all permissions associated with role
        }

        // Cập nhật lại các permisson được gán cho role
        foreach ($permissionIDs as $permissionID) {
            //Get corresponding form //permission in db
            $permissionRecord = Permission::where('id', '=', $permissionID)->firstOrFail(); 
            $role->givePermissionTo($permissionRecord);  //Assign permission to role
        }

        return redirect()->route('role.index')->with('message', 'Đã cập nhật vai trò tên '. $role->name . '!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // XÓA ROLE

        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('roles.index')->with('message', 'Đã xóa vai trò!');
    }
}
