<?php
namespace Modules\Outlet\Http\Controllers;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Outlet\Entities\Outlet;
use Modules\Outlet\Entities\OutletChannel;
use Modules\Outlet\Entities\OutletType;

class OutletController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $outlet = Outlet::select("outlets.*","outlet_types.type_name","outlet_channels.channel_name")
                ->join("outlet_types","outlet_types.id","=","outlets.type_id")
                ->join("outlet_channels","outlet_channels.id","=","outlets.channel_id")
                ->get();

        $channels = OutletChannel::pluck('channel_name','id');
        $OutletType = OutletType::pluck('type_name','id');

        return view('outlet::index',[
            'outlets'=>$outlet,
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
    public function store(Request $request)
    {
        // echo '<pre>';
        // return $request->all();exit;

        $request->validate([
            'outlet_name' => 'required',
            'outlet_address' => 'required',
            'outlet_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('outlet_image')) {
            $file = $request->file('outlet_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['outlet_image'] = $filename;
        }

        $data['outlet_id'] = '41451';
        $data['type_id']    = $request->type;
        $data['channel_id']    = $request->channel;
        $data['outlet_name'] = $request->outlet_name;
        $data['outlet_address'] = $request->outlet_address;
        $data['outlet_phone'] = $request->outlet_phone;

        //return $data;
        Outlet::create($data);
        $response = array(
            'success'  =>true,
            'message'  => 'Added successfully'
        );

        //return json_encode($response);
        return redirect('/outlet/create')->with('success','Post created successfully.');
        
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
    public function update(Request $request)
    {
        $request->validate([
            'outlet_name' => 'required',
            'outlet_address' => 'required',
            'outlet_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('outlet_image')) {
            $file = $request->file('outlet_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['outlet_image'] = $filename;
        }else{
            $data['outlet_image'] = $request->old_image;
        }

        $data['outlet_id'] = '41451';
        $data['type_id']    = $request->type;
        $data['channel_id']    = $request->channel;
        $data['outlet_name'] = $request->outlet_name;
        $data['outlet_address'] = $request->outlet_address;
        $data['outlet_phone'] = $request->outlet_phone;

        //return $data;
        Outlet::where('id',$request->id)->update($data);

        $response = array(
            'success'  =>true,
            'message'  => 'Added successfully'
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


}
