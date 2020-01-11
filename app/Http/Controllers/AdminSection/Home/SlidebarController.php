<?php

namespace App\Http\Controllers\AdminSection\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use App\Models\Admin\Home;

class SlidebarController extends Controller
{
    
    public function index()
    {
        $data = Home::all();
            return view('admin.home.slidebar-contents.index',compact('data'));
    }

    public function create()
    {
        
        return view('admin.home.slidebar-contents.create');

    }

    public function store(Request $request)
    {
            $data = $request->validate(['contents'=>'required','file'=>'required']);
            $filename = $request->file('file')->getClientOriginalName();
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = $filename;              
            $path = $request->file('file')->storeAs('public/images',$fileNameToStore);
            $data['file'] = $fileNameToStore;

            $data1 = Home::create($data);
            if ($data1) {
                return redirect()->back()->with('message', 'Slidebar add successfully');
            }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Home::find($id);
            return view('admin.home.slidebar-contents.edit',compact('data'));
    }

    
    public function update(Request $request, $id)
    {        
        $data = $request->validate(['contents'=>'required']);

        if($request->hasFile('file')){
                $filename = $request->file('file')->getClientOriginalName();
                $extension = $request->file('file')->getClientOriginalExtension();
                $fileNameToStore = $filename;              
                $path = $request->file('file')->storeAs('public/images',$fileNameToStore);
                $data['file'] = $fileNameToStore;          
            }else{
                $file  = Home::find($id);
                $data['file'] = $file->file;            
            }
            $data1 = Home::where('id', $id)->update($data); 
            if ($data1) {
                return redirect()->back()->with('message', 'Slidebar updateD successfully');
            }
    }

    public function destroy($id)
    {
        $delete = Home::destroy($id);
        if($delete){
           return redirect()->back()->with('message', 'Record deleted successfully');
          
        }
    }
}
