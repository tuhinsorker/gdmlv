<?php
namespace Modules\Outlet\Http\Controllers;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Outlet\Entities\Outlet;
use Modules\Outlet\Entities\OutletChannel;
use Modules\Outlet\Entities\OutletType;
use Modules\Outlet\Http\Requests\OutletRequest;

use \Yajra\DataTables\DataTables;


class OutletController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $channels = OutletChannel::pluck('channel_name','id');
        $channels->prepend('Please Select Channel');

        $OutletType = OutletType::pluck('type_name','id');
        $OutletType->prepend('Please Select Type');

        return view('outlet::__outletlist',[
            'channels'=>$channels,
            'types'=>$OutletType,
            'ptitle'=>'Outlet List'
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $channels = OutletChannel::pluck('channel_name','id');
        $OutletType = OutletType::pluck('type_name','id');

        $ptitle = 'Create Outlet';
        return view('outlet::__create_outlet',[
            'ptitle'=>$ptitle,
            'channels'=>$channels,
            'types'=>$OutletType
        ]);

    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(OutletRequest $request)
    {
       

        if ($request->file('outlet_image')) {
            $file = $request->file('outlet_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['outlet_image'] = $filename;
        }

        $data['outlet_id'] = uniqueId() ;
        $data['type_id']    = $request->type;
        $data['channel_id']    = $request->channel;
        $data['outlet_name'] = $request->outlet_name;
        $data['outlet_address'] = $request->outlet_address;
        $data['outlet_phone'] = $request->outlet_phone;


        Outlet::create($data);
    
        $response = array(
            'success'  =>true,
            'title'    =>'Outlet',
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
        $data = Outlet::find($id);
        return response()->json(['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(OutletRequest $request)
    {
        

        if ($request->file('outlet_image')) {
            $file = $request->file('outlet_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['outlet_image'] = $filename;
        }else{
            $data['outlet_image'] = $request->old_image;
        }

        $data['type_id']    = $request->type;
        $data['channel_id']    = $request->channel;
        $data['outlet_name'] = $request->outlet_name;
        $data['outlet_address'] = $request->outlet_address;
        $data['outlet_phone'] = $request->outlet_phone;

        //return $data;
        Outlet::where('id',$request->id)->update($data);

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
        $OutletChannel = Outlet::findOrFail($id);
        $OutletChannel->delete();
        $response = array(
            'success'  =>true,
            'message'  => 'Delete successfully'
        );
        return json_encode($response);
    }


    public function get_ajaxdata(Request $request)
    {
     
        $outlet_type = $request->outlet_type;
        $channel_id = $request->channel_id;

        if ($request->ajax()) {

            $sql = Outlet::select("outlets.*","outlet_types.type_name","outlet_channels.channel_name");
            $sql->join("outlet_types","outlet_types.id","=","outlets.type_id");
            $sql->join("outlet_channels","outlet_channels.id","=","outlets.channel_id");

            if(!empty($outlet_type)){
                $sql->where('type_id', $outlet_type);
            }
            if(!empty($channel_id)){
                $sql->where('channel_id', $channel_id);
            }
            $data = $sql->get();


            return DataTables::of($data)->addIndexColumn()

                    ->addColumn('image', function ($data) {
                        $imag = url('/images/'.$data->outlet_image);
                        $image = '<img src="'.$imag.'" width="50">';
                        return $image;
                    })
                    
                    ->addColumn('outlet_name', function ($data) {
                        return $data->outlet_name;
                    })

                    ->addColumn('type_name', function ($data) {
                        return $data->type_name;
                    })

                    ->addColumn('channel_name', function ($data) {
                        return $data->channel_name;
                    })

                    ->addColumn('outlet_address', function ($data) {
                        return $data->outlet_address;
                    })

                    ->addColumn('outlet_phone', function ($data) {
                        return $data->outlet_phone;
                    })

                    ->addColumn('action', function($data){
                        $actionBtn = '<a href="javascript:void(0)" id="editAction" data-id="" class="edit btn btn-success btn-sm">Edit</a> 
                        <a href="javascript:void(0)" id="actionDelete" data-id="" class="delete btn btn-danger btn-sm">Delete</a>';
                        return $actionBtn;
                    })

                ->rawColumns([ 'image', 'outlet_name','type_name','channel_name','outlet_address', 'outlet_phone','action'])
                ->make(true);
        }


    }


}
