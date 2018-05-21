<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

// Sử dụng laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Session;

class PermissionController extends Controller
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
        // ACTION HIỂN THỊ DANH MỤC PERMISSION
        $permissions = Permission::all(); //Get all permissions
        
        return view('backend.permission.list')->with('permissions', $permissions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // HIỂN THỊ VIEW TẠO PERMISSION
        
        $roles = Role::get(); //Get all roles
        // Truyền cho role để chọn gán permission
        return view('backend.permission.create')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // LƯU TRỮ PERMISSION VÀO DB

        // Kiểm tra tên permision được post về
        $this->validate($request, [
            'name'=>'required|max:40',
        ]);
        
        // Lưu thông tin permision
        $name = $request['name'];
        $permission = new Permission();
        $permission->name = $name;
        // Lấy array chứa id của các role được chọn để gán permission
        $roles = $request['roles'];
        // Lưu vào DB
        $permission->save();

        if (!empty($request['roles'])) { // Có role được chọn
            // Gán permission cho từng role
            foreach ($roles as $role) {
                //Lấy record role tương tứng trong DB
                $roleRecord = Role::where('id', '=', $role)->firstOrFail(); 
                //Lấy record permission tương tứng trong DB
                $permission = Permission::where('name', '=', $name)->first();
                // Gán permission cho role
                $roleRecord->givePermissionTo($permission);
            }
        }
        // Điều hướng về view hiển thị danh mục permission và ghi thông báo
        return redirect()->route('permission.index')
            ->with('message', 'Đã lưu quyền thao tác tên ' . $permission->name . ' thành công!');

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
        return redirect('permission');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // HIỂN THỊ VIEW CẬP NHẬT PERMISSION

        $permission = Permission::findOrFail($id);
        // compact làm hàm của PHP, tạo ra một mảng với phần tử là tên các biến được truyền vào đối số.
        // Đối tượng permission được truyền cho view
        return view('backend.permission.edit', compact('permission'));
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
        // CẬP NHẬT PERMISSION

        // Lấy record permission
        $permission = Permission::findOrFail($id);
        // Kiểm tra tên của permission
        $this->validate($request, [
            'name'=>'required|max:40',
        ]);
        $input = $request->all();
        $permission->fill($input)->save();

        return redirect()->route('permission.index')->with('message', 'Quyền hệ thống tên ' . $permission->name . ' đã được cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // XÓA PERMISSION

        $permission = Permission::findOrFail($id);
        
        // Kiểm tra permission bị xóa.
        // superAdministratorRoleName là tên của một hằng cấp hệ thống tự định nghĩa trong tập tin
        // /config/custom.php
        if ($permission->name == Config::get('custom.superAdministratorRoleName')) {     // Không cho xóa
                return redirect()->route('permissions.index')->with('message', 'Không thể xóa quyền hệ thống này!');
        }
        // Xóa permission
        $permission->delete();
        
        return redirect()->route('permission.index')->with('flash_message', 'Đã xóa thành công quyền hệ thống!');
        
    }
}
