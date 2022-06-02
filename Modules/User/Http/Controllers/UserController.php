<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\User\Http\Requests\EmployeeRequest;
use Illuminate\Routing\Controller;
use Modules\User\Entities\Employee;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        // $module = Module::find('blog');


        $users = Employee::get();
        return view('user::__user_list',[
            'ptitle'=>'User List',
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('user::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(EmployeeRequest $request)
    {


        $result = User::create([
            'name' => $request->first.' '.@$request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type'=>$request->user_type
        ]);

        if($result){

            $emp['user_id'] = $result->id;

            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('images'), $filename);
                $emp['image'] = $filename;
            }

            $emp['firstname']    = $request->firstname;
            $emp['lastname']    = $request->lastname;
            $emp['email'] = $request->email;
            $emp['phone'] = $request->phone;
            $emp['address'] = $request->address;
            $emp['team_id'] = $request->team_id;
            Employee::create($emp);
        }

        $response = array(
            'success'  =>true,
            'message'  => 'Added successfully'
        );
        return json_encode($response);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $modules = Employee::get();
        $role    = Employee::search($id);
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
        $result = Employee::find($id);
        $user = User::find($result->user_id);

        $response = array(
            'success'  =>true,
            'data' => $result,
            'user'=>$user
        );
        return json_encode($response);
        
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(EmployeeRequest $request, $id)
    {
        
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $emp['image'] = $filename;
        }

        $emp['firstname']   = $request->firstname;
        $emp['lastname']    = $request->lastname;
        $emp['email']       = $request->email;
        $emp['phone']       = $request->phone;
        $emp['address']     = $request->address;
        $emp['team_id']     = $request->team_id;

        Employee::where('id',$id)->update($emp);

        $info = Employee::find($id);

        User::where('id',$info->user_id)->update([
            'name' => $request->first.' '.@$request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type'=>@$request->user_type
        ]);
    
        $response = array(
            'success'  =>true,
            'message'  => 'update successfully'
        );
        return json_encode($response);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Employee::where('id' , $id)->delete();
        return response()->json(['success' => 'Data Deleted Successfully']);
    }



    public function profile()
    {
        $id = Auth::User()->id;
        $users = Employee::find($id);
        return view('user::__user_profile',[
            'ptitle'=>'User Profile',
        ]);
    }
}
