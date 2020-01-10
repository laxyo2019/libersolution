<?php

namespace App\Http\Controllers\AdminSection\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\PlatformAndFrameworkModel;
use File;
class PlatformAndFramework extends Controller
{
    
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd('sad');
        $data = PlatformAndFrameworkModel::get();
        return view('admin.home.platform-and-framework.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin.home.platform-and-framework.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = PlatformAndFrameworkModel::find($id);
        return view('admin.home.platform-and-framework.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
            $data = $request->validate(['heading'=>'required','content'=>'required','logo'=>'required']);

            $filename = $request->file('logo')->getClientOriginalName();
                $extension = $request->file('logo')->getClientOriginalExtension();
                $fileNameToStore = $filename;              
                $path = $request->file('logo')->storeAs('public/images',$fileNameToStore);
                $data['logo'] = $fileNameToStore;

            $data1 = PlatformAndFrameworkModel::where('id',$id)->update($data);
            if ($data1) {
            return redirect()->back()->with('message', 'Platform and framework updated successfully');
            }else{
            return redirect()->back()->with('messageError', 'Platform and framework Not updated');

            }

            //  $data = $request->validate(['product_title'=>'required','content'=>'required','file'=>'required']);

            // $filename = $request->file('file')->getClientOriginalName();
            //     $extension = $request->file('file')->getClientOriginalExtension();
            //     $fileNameToStore = $filename;              
            //     $path = $request->file('file')->storeAs('public/images',$fileNameToStore);
            //     $data['file'] = $fileNameToStore;

            // $data1 = ProductAndServicesModel::create($data);
            // if ($data1) {
            // return redirect()->back()->with('message', 'Company add successfully');
            // }else{
            // return redirect()->back()->with('messageError', 'Company Not added');

            // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
