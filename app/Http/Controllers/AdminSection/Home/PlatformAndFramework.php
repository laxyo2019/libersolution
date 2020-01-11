<?php

namespace App\Http\Controllers\AdminSection\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\PlatformAndFrameworkModel;
use File;
class PlatformAndFramework extends Controller
{
    
   
    public function index()
    {
        $data = PlatformAndFrameworkModel::get();
            return view('admin.home.platform-and-framework.index',compact('data'));
    }

    public function create()
    {
         return view('admin.home.platform-and-framework.create');
    }

    public function store(Request $request)
    {
            $data = $request->validate(['heading'=>'required','content'=>'required','logo'=>'required']);

            $filename = $request->file('logo')->getClientOriginalName();
                $extension = $request->file('logo')->getClientOriginalExtension();
                $fileNameToStore = $filename;              
                $path = $request->file('logo')->storeAs('public/images',$fileNameToStore);
                $data['logo'] = $fileNameToStore;

            $data1 = PlatformAndFrameworkModel::create($data);
            if ($data1) {
            return redirect()->back()->with('message', 'Platform and framework add successfully');
            }else{
            return redirect()->back()->with('messageError', 'Platform and framework Not added');

            }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = PlatformAndFrameworkModel::find($id);
        return view('admin.home.platform-and-framework.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
            $data = $request->validate(['heading'=>'required','content'=>'required']);

                if($request->hasFile('logo')){
                    $filename = $request->file('logo')->getClientOriginalName();
                    $extension = $request->file('logo')->getClientOriginalExtension();
                    $fileNameToStore = $filename;              
                    $path = $request->file('logo')->storeAs('public/images',$fileNameToStore);
                    $data['logo'] = $fileNameToStore;          
                }else{
                    $file  = PlatformAndFrameworkModel::find($id);
                    $data['logo'] = $file->logo;            
                }
                $data1 = PlatformAndFrameworkModel::where('id', $id)->update($data); 
                if ($data1) {
                    return redirect()->back()->with('message', 'Platform and framework updated successfully');
                }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $delete = PlatformAndFrameworkModel::destroy($id);
        if($delete){
           return redirect()->back()->with('message', 'Record deleted successfully');
        }
    }
}
