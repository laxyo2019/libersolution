<?php

namespace App\Http\Controllers\AdminSection\Logos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Logos\HeaderLogosModel;

class HeaderLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = HeaderLogosModel::all();
            return view('admin.Logos.header.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.Logos.header.create');

    }

    public function store(Request $request)
    {
        // dd($request);
            $data = $request->validate(['title'=>'required','logo'=>'required']);
            $filename = $request->file('logo')->getClientOriginalName();
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToStore = $filename;              
            $path = $request->file('logo')->storeAs('public/images',$fileNameToStore);
            $data['logo'] = $fileNameToStore;

            $data1 = HeaderLogosModel::create($data);
            if ($data1) {
                return redirect()->back()->with('message', 'Logo added successfully');
            }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = HeaderLogosModel::find($id);
            return view('admin.Logos.header.edit',compact('data'));
    }

    
    public function update(Request $request, $id)
    {        
        $data = $request->validate(['title'=>'required']);

        if($request->hasFile('logo')){
                $filename = $request->file('logo')->getClientOriginalName();
                $extension = $request->file('logo')->getClientOriginalExtension();
                $fileNameToStore = $filename;              
                $path = $request->file('logo')->storeAs('public/images',$fileNameToStore);
                $data['logo'] = $fileNameToStore;          
            }else{
                $file  = HeaderLogosModel::find($id);
                $data['logo'] = $file->logo;            
            }
            $data1 = HeaderLogosModel::where('id', $id)->update($data); 
            if ($data1) {
                return redirect()->back()->with('message', 'Slidebar updateD successfully');
            }
    }

    public function destroy($id)
    {
        $delete = HeaderLogosModel::destroy($id);
        if($delete){
           return redirect()->back()->with('message', 'Record deleted successfully');
          
        }
    }
}
