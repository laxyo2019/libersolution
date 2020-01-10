<?php

namespace App\Http\Controllers\AdminSection\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\ProductAndServicesModel;
use File;


class ProductAndServices extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProductAndServicesModel::get();
        // dd($data);

        return view('admin.home.product-and-service.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.product-and-service.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->validate(['product_title'=>'required','product_url'=>'required','content'=>'required','file'=>'required']);

            $filename = $request->file('file')->getClientOriginalName();
                $extension = $request->file('file')->getClientOriginalExtension();
                $fileNameToStore = $filename;              
                $path = $request->file('file')->storeAs('public/images',$fileNameToStore);
                $data['file'] = $fileNameToStore;

            $data1 = ProductAndServicesModel::create($data);
            if ($data1) {
            return redirect()->back()->with('message', 'Product And Services add successfully');
            }else{
            return redirect()->back()->with('messageError', 'Product And Services Not added');

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
        $data = ProductAndServicesModel::find($id);
        return view('admin.home.product-and-service.edit',compact('data'));
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
        
            $data = $request->validate(['product_title'=>'required','product_url'=>'required','content'=>'required','file'=>'required']);
            if($request->hasFile('file')){
            $filename = $request->file('file')->getClientOriginalName();
                $extension = $request->file('file')->getClientOriginalExtension();
                $fileNameToStore = $filename;              
                $path = $request->file('file')->storeAs('public/images',$fileNameToStore);
                $data['file'] = $fileNameToStore;          
            }else{
                $file  = ProductAndServicesModel::find($id);
                $data['logo'] = $file->logo;            
            }
            $data1 = ProductAndServicesModel::where('id', $id)->update($data); 
            if ($data1) {
                return redirect()->back()->with('message', 'Product And Services updated successfully');
            }else{
                return redirect()->back()->with('messageError', 'Product And Services Not updated');

            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ProductAndServicesModel::destroy($id);
        if($delete){
           return redirect()->back()->with('message', 'Record deleted successfully');
            
        }
    }
}
