<?php

namespace Modules\Outlet\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Outlet\Entities\OutletType;
use Modules\Outlet\Entities\Outlet;

class OutletTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $OutletType = OutletType::withoutGlobalScopes([Asc::class])->get();

        return view('outlet::__outlet_type',[
            'ptitle'=>'Outlet Type List',
            'types' =>$OutletType
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('outlet::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {

        $request->validate([
            'type_name' => 'required|unique:outlet_types'
        ]);
        
        $data['type_name']    = $request->type_name;
        $data['type_description'] = $request->type_description;
        //return $data;
        OutletType::create($data);
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
        return view('outlet::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $data = OutletType::find($id);
        return response()->json(['data'=>$data]);

        //return view('outlet::edit');
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
            'type_name' => 'required'
        ]);
        
        $data['type_name']    = $request->type_name;
        $data['type_description'] = $request->type_description;
        //return $data;
        OutletType::where('id',$request->id)->update($data);
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
        if(outlet::findOrFail($id)){

            $response = array(
                'success'  =>false,
                'message'  => 'Outlet Type Alredy Exist',
                'titlet'    =>'Outlet Type List'
            );
            echo json_encode($response);
            exit;
           
        }else{
            $OutletType = OutletType::findOrFail($id);
            $OutletType->delete();
    
            $response = array(
                'success'  =>true,
                'message'  => 'Delete successfully',
                'titlet'    =>'Outlet Type List'
            );
        }
        return json_encode($response);

    }
}
