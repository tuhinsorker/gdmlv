<?php

namespace Modules\Role\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Role\Http\Requests\UserAssignRequest;

use Modules\Role\Entities\UserRole;
use Modules\Role\Entities\Role;
use Modules\Role\Entities\Module;
use Modules\Role\Entities\RolePermission;


use App\Models\User;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $roles = Role::orderBy('id' , 'desc')->get();
        return view('role::__role_list',[
            'roles' => $roles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $modules = Module::get();
        return view('role::__create',[
            'modules' => $modules
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $this->roleStoreUpdate($request);
        return redirect()->route('roles.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $modules = Module::get();
        $role    = Role::search($id);
        return view('role::edit',[
            'modules' => $modules,
            'role' =>   $role
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $modules = Module::get();
        $role    = Role::search($id);
        return view('role::edit',[
            'modules' => $modules,
            'role' =>   $role
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'role_id' => 'required'
         ]);
        UserRole::where('role_id' , $id)->delete();
        RolePermission::where('role_id' , $id)->delete();
        Role::search($id)->delete();

        $this->roleStoreUpdate($request);
        return redirect()->route('roles.index')->with('success' , 'Role Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        UserRole::where('role_id' , $id)->delete();
        RolePermission::where('role_id' , $id)->delete();
        Role::search($id)->delete();
        return response()->json(['success' => 'Data Deleted Successfully']);
    }


    private function roleStoreUpdate($request){

        $role_id = $this->createRole($request->role_name);
        $sub_module_id = $request->sub_module_id;
        
        $create       = $request->create;
        $read         = $request->read;
        $update       = $request->update;
        $delete       = $request->delete;


        $new_array = array();
        for ($m = 0; $m < count($sub_module_id); $m++) {
            for ($i = 0; $i < count($sub_module_id[$m]); $i++) {
                for ($j = 0; $j < count($sub_module_id[$m][$i]); $j++) {
                    $dataStore = array(
                        'role_id'      =>  $role_id,
                        'sub_module_id' => $sub_module_id[$m][$i][$j],
                        'create'       => (!empty($create[$m][$i][$j]) ? $create[$m][$i][$j] : 0),
                        'read'         => (!empty($read[$m][$i][$j]) ? $read[$m][$i][$j] : 0),
                        'update'       => (!empty($update[$m][$i][$j]) ? $update[$m][$i][$j] : 0),
                        'delete'       => (!empty($delete[$m][$i][$j]) ? $delete[$m][$i][$j] : 0),
                    );
                    array_push($new_array, $dataStore);
                }
            }
        }

        if ($this->createPermission($new_array)) {
            $id = $this->createPermission($new_array);
            // success message
        }
        else {
            //  error message
        }
    }

    private function createRole($role_id){

        $role = new Role();
        $role->type = $role_id;
        $role->save();
        return  $role->id;

    }

    private function createPermission($data){
        RolePermission::where('role_id' , $data[0]['role_id'])->delete();
        $obj = RolePermission::insert($data);
        return  $obj;
    }

    public function getUserAssign(){

        $users = User::whereNotIn('user_type',[1])->get();
        $roles = Role::get();

        $userrole = UserRole::get();

        dd($userrole->role);


        return view('role::__user-assign-role',[
            'users' =>  $users,
            'roles' =>  $roles,
            'user_role' => $userrole
        ]);

    }



    public function getUserAssignRoleStore(UserAssignRequest $request){
        $user_role = new UserRole();
        $user_role->fill($request->all());
        $user_role->save();

        return redirect()->route('roles.index')->with('success','User Role assigned successfully');

    }
}
