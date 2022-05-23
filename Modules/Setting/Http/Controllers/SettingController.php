<?php

namespace Modules\Setting\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Setting\Entities\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('setting::__app_setting',[
            'ptitle'=>'Application Setting',
            'info'=>Setting::find(1)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('setting::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('setting::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('setting::edit');
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
            'title'       => 'required',
            'footer_text'    => 'required',
            'copy_right'    => 'required',
            'app_logo'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('app_logo')) {
            $file = $request->file('app_logo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['app_logo'] = $filename;
        }else{
            $data['app_logo'] = $request->app_logo_old;
        }

        if ($request->file('favicon')) {
            $file = $request->file('favicon');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['favicon'] = $filename;
        }else{
            $data['favicon'] = $request->favicon_old;
        }

        $data['title']          = $request->title;
        $data['footer_text']     = $request->footer_text;
        $data['copy_right']    = $request->copy_right;
        $data['time_zone'] = $request->time_zone;

        if(!empty($request->id)){
            Setting::where('id',$request->id)->update($data);
        }else{
            Setting::create($data);
        }


        $response = array(
            'success'  =>true,
            'message'  => 'Added successfully'
        );

        //return json_encode($response);
        return redirect('setting/app_setting')->with('success','update  successfully.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
