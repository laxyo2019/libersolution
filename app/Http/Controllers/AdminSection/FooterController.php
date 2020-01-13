<?php

namespace App\Http\Controllers\AdminSection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\FooterContent;
use File;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = FooterContent::get();
        return view('admin.FooterContents.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.FooterContents.create');
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
        if($request->hasFile('logo')){      
            $filename = $request->file('logo')->getClientOriginalName();
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToStore = date('d-m-Y').'_'.$filename;

                $path = $request->file('logo')->storeAs('public/images',$fileNameToStore);
                $data['logo'] = $fileNameToStore;
                $data1 = FooterContent::create($data);
                if ($data1) {
                    return redirect()->back()->with('message', 'Footer content add successfully');
                }
            }
            else{
                $fileNameToStore = '';
            }

            $data = $request->validate(['heading'=>'required','content'=>'required','logo'=>'required']);
                $filename = $request->file('file')->getClientOriginalName();
                $extension = $request->file('file')->getClientOriginalExtension();
                $fileNameToStore = $filename;              
                $path = $request->file('file')->storeAs('public/images',$fileNameToStore);
                $data['file'] = $fileNameToStore;

            $data1 = FooterContent::create($data);
            if ($data1) {
                return redirect()->back()->with('message', 'Slidebar add successfully');
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
        $data = FooterContent::find($id);
        return view('admin.FooterContents.edit',compact('data'));
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
    
       $data = $request->validate(['heading'=>'required','content'=>'required']);
            if($request->hasFile('logo')){
                $filename = $request->file('logo')->getClientOriginalName();
                $extension = $request->file('logo')->getClientOriginalExtension();
                $fileNameToStore = $filename;              
                $path = $request->file('logo')->storeAs('public/images',$fileNameToStore);
                $data['logo'] = $fileNameToStore;          
            }else{
                $file  = FooterContent::find($id);
                $data['logo'] = $file->logo;            
            }
            $data1 = FooterContent::where('id', $id)->update($data); 
            if ($data1) {
                return redirect()->back()->with('message', 'Footer updated successfully');
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
        $delete = FooterContent::destroy($id);
        if($delete){
           return redirect()->back()->with('message', 'Record deleted successfully');
            
        }
    }
    public function terms(){
        // dd('dsf');
        return view('term-of-service');
    }
    public function services(){
        return view('privacy-policy');
        
    }
}
