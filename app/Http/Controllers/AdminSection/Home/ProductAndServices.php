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
     */
    public function index()
    {
        $data = ProductAndServicesModel::get();

        return view('admin.home.product-and-service.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.home.product-and-service.create');
        
    }

    /**
     * Store a newly created resource in storage.
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
            }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        dd('');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = ProductAndServicesModel::find($id);
        return view('admin.home.product-and-service.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
            $data = $request->validate(['product_title'=>'required','product_url'=>'required','content'=>'required']);

            if($request->hasFile('file')){
                    $filename = $request->file('file')->getClientOriginalName();
                    $extension = $request->file('file')->getClientOriginalExtension();
                    $fileNameToStore = $filename;              
                    $path = $request->file('file')->storeAs('public/images',$fileNameToStore);
                    $data['file'] = $fileNameToStore;          
                }else{
                    $file  = ProductAndServicesModel::find($id);
                    $data['file'] = $file->file;            
                }
                $data1 = ProductAndServicesModel::where('id', $id)->update($data); 
                if ($data1) {
                    return redirect()->back()->with('message', 'Platform and framework updated successfully');
                }

            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = ProductAndServicesModel::destroy($id);
        if($delete){
           return redirect()->back()->with('message', 'Record deleted successfully');
            
        }
    }
}
