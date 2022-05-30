<?php

namespace Modules\Setting\Http\Controllers;

use Modules\Setting\Entities\Language;
use App\Scopes\Asc;
use App\Scopes\Desc;
use Modules\Setting\Http\Requests\LanguageRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LanguageController extends Controller
{
    public function index(){

        return view('setting::language.index',[
            'languages' => Language::withoutGlobalScopes([Asc::class])->get()
        ]);
    }

    public function store(LanguageRequest $request){


        $url = base_path().'/lang/english.json';
        $result = file_get_contents($url);
        $result = json_decode($result);
        $result = json_encode( $result , true);

        $lang = new Language();
        $lang->fill($request->all());
        $lang->slug = Str::slug($request->title, '-');
        $file = $lang->slug.'.json';
        $destination = base_path()."/lang/";
        if  (!is_dir( $destination )) {
             mkdir( $destination ,0777,true);
            }
        File::put($destination.$file,$result);
        $lang->save();
        return redirect()->route('lang.index')->with('success','Data Added Successfully');

    }


    public function edit($slug){
        $lang = Language::where('slug' , $slug)->first();

        
        $url = base_path().'/lang/'.$lang->slug.'.json';
        $result = file_get_contents($url);
        $results = json_decode($result);

        return view('setting::language.edit',[
            'results' => $results,
            'lang' => $lang
        ]);
    }

    public function update(Request $request , $slug){
        $lang = Language::where('slug' , $slug)->first();
        $key = [];
        for($i = 0; $i < count($request->key); $i++){
            $key[$request->key[$i]] =  $request->label[$i];
        }
        $result = json_encode($key , true);
        $file = base_path().'/lang/'.$lang->slug.'.json';
        $this->deleteFile( $file );
        $file = $lang->slug.'.json';
        $destination = base_path()."/lang/";
        if  (!is_dir( $destination )) {
             mkdir( $destination ,0777,true);
            }
        File::put($destination.$file,$result);
        return redirect()->route('lang.edit', $lang->slug)->with('success' , 'Data updated successfully');
    }

    private function deleteFile($path)
    {
        if(Storage::exists($path)) {
             Storage::delete($path);
        }
     }
}
