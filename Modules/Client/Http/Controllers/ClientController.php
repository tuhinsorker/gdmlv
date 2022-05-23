<?php

namespace Modules\Client\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use  Modules\Client\Entities\Client;
use App\Models\User;

class ClientController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $Clients = Client::withoutGlobalScopes([Asc::class])->get();
        return view('client::__client_list',['ptitle'=>'Client List','clients'=>$Clients]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('client::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'client_address' => 'required'
        ]);

        if ($request->file('client_logo')) {
            $file = $request->file('client_logo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['client_logo'] = $filename;
        }

        $data['client_name'] = $request->client_name;
        $data['client_address'] = $request->client_address;
        $data['client_phone'] = $request->client_phone;
        $data['client_email'] = $request->client_email;


        $password = 123456;
        $result = User::create([
            'name' => $data['client_name'],
            'email' => $data['client_email'],
            'password' => Hash::make($password),
        ]);

        $data['log_id'] = $result->id;

        
        //return $data;
        Client::create($data);
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
        return view('client::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $data = Client::find($id);
        return response()->json(['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'client_address' => 'required'
        ]);

        if ($request->file('client_logo')) {
            $file = $request->file('client_logo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['client_logo'] = $filename;
        }else{
            $data['client_logo'] = $request->client_logo_old;
        }

        $data['client_name'] = $request->client_name;
        $data['client_address'] = $request->client_address;
        $data['client_phone'] = $request->client_phone;
        $data['client_email'] = $request->client_email;


        //return $data;
        Client::where('id',$request->id)->update($data);
        $response = array(
            'success'  =>true,
            'message'  => 'Update successfully'
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
        $OutletChannel = Client::findOrFail($id);
        $OutletChannel->delete();

        $response = array(
            'success'  =>true,
            'message'  => 'Delete successfully'
        );
        return json_encode($response);
    }
}
