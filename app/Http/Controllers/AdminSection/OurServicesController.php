<?php

namespace App\Http\Controllers\AdminSection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\ServicemastModel;
use File;
class OurServicesController extends Controller
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
        $data = ServicemastModel::get();
        // dd($data);
        return view('admin.our-services.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin.our-services.create');
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

            $data1 = ServicemastModel::create($data);
            if ($data1) {
            return redirect()->back()->with('message', 'Service added successfully');
            }else{
            return redirect()->back()->with('messageError', 'Service Not added');

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
        $data = ServicemastModel::find($id);
        return view('admin.our-services.edit',compact('data'));
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
       // dd($request);
            $data = $request->validate(['heading'=>'required','content'=>'required','logo'=>'required']);

            $filename = $request->file('logo')->getClientOriginalName();
                $extension = $request->file('logo')->getClientOriginalExtension();
                $fileNameToStore = $filename;              
                $path = $request->file('logo')->storeAs('public/images',$fileNameToStore);
                $data['logo'] = $fileNameToStore;

            $data1 = ServicemastModel::where('id',$id)->update($data);
            if ($data1) {
            return redirect()->back()->with('message', 'Service updated successfully');
            }else{
            return redirect()->back()->with('messageError', 'Service Not updated');

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
        //
        $delete = ServicemastModel::destroy($id);
        if($delete){
           return redirect()->back()->with('message', 'Record deleted successfully');
        }
    }
}
