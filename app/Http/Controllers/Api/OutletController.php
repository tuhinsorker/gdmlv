<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OutletRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Models\Api\OutletModel;




class OutletController extends Controller
{

    public function index()
    {
        try {

            $outlet = OutletModel::select("outlets.*","outlet_types.type_name","outlet_channels.channel_name")
                ->join("outlet_types","outlet_types.id","=","outlets.type_id")
                ->join("outlet_channels","outlet_channels.id","=","outlets.channel_id")
                ->get();

            return sendSuccessResponse($outlet,'Data Retrive Successfull !', 200);

        } catch( QueryException $e){

            return sendErrorResponse($e->getMessage,'Something Went Wrong!',500);

        }
        
    }

    public function create()
    {
        //
    }


    public function store(OutletRequest $request)
    {    
        //dd($request->all());

        $validator = Validator::make($request->all(), [
            'outlet_name' => 'required',
            'outlet_address' => 'required',
            'outlet_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return sendErrorResponse('Client Site Error!', $validator->errors(), 400);
        }

        if ($request->file('outlet_image')) {
            $file = $request->file('outlet_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['outlet_image'] = $filename;
        }

        $data['outlet_id']      = uniqueId();
        $data['type_id']        = $request->type_id;
        $data['channel_id']     = $request->channel_id;
        $data['outlet_name']    = $request->outlet_name;
        $data['outlet_address'] = $request->outlet_address;
        $data['outlet_phone']   = $request->outlet_phone;


        try {

            $outlets = OutletModel::create($data);
            return sendSuccessResponse($outlets,'Added successfully');

        } catch( QueryException $e){

            return sendErrorResponse($e->getMessage,'Something Went Wrong!',500);

        }

    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

   
    public function update(OutletRequest $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'outlet_name' => 'required',
            'outlet_address' => 'required|max:100'
        ]);

        if ($validator->fails()) {
            return sendErrorResponse('Client Site Error!', $validator->errors(), 400);
        }

        try {

            if ($request->file('outlet_image')) {
                $file = $request->file('outlet_image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('images'), $filename);
                $data['outlet_image'] = $filename;
            }
    
            $data['type_id']        = $request->type_id;
            $data['channel_id']     = $request->channel_id;
            $data['outlet_name']    = $request->outlet_name;
            $data['outlet_address'] = $request->outlet_address;
            $data['outlet_phone']   = $request->outlet_phone;

            $outlet = OutletModel::where('id',$id)->update($data);

            return sendSuccessResponse($outlet,'Update successfully', 200);

        } catch( QueryException $e){

            return sendErrorResponse($e->getMessage,'Something Went Wrong!',500);

        }

    }


    public function destroy($id)
    {

        try{
            OutletModel::FindOrFail($id)->delete();
            return sendSuccessResponse([],'Delete successfully', 200);
        }catch(QueryException $e){
            return sendErrorResponse($e->getMessage,'Something Went Wrong!',500);
        }
       
    }

}
