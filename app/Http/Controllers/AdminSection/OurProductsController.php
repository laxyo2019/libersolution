<?php

namespace App\Http\Controllers\AdminSection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\ProductmastModel;
use File;


class OurProductsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProductmastModel::get();
            return view('admin.our-products.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.our-products.create');
        
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
        $data1 = ProductmastModel::create($data);
            if ($data1) {
                return redirect()->back()->with('message', 'Product add successfully');
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
        $data = ProductmastModel::find($id);
        return view('admin.our-products.edit',compact('data'));
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
        
        $data = $request->validate(['product_title'=>'required','product_url'=>'required','content'=>'required']);
            if($request->hasFile('file')){
                $filename = $request->file('file')->getClientOriginalName();
                $extension = $request->file('file')->getClientOriginalExtension();
                $fileNameToStore = $filename;              
                $path = $request->file('file')->storeAs('public/images',$fileNameToStore);
                $data['file'] = $fileNameToStore;          
            }else{
                $file  = ProductmastModel::find($id);
                $data['file'] = $file->file;            
            }
            $data1 = ProductmastModel::where('id', $id)->update($data); 
            if ($data1) {
                return redirect()->back()->with('message', 'Product updated successfully');
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
         $delete = ProductmastModel::destroy($id);
            if($delete){
                return redirect()->back()->with('message', 'Record deleted successfully');
            }
    }
}
