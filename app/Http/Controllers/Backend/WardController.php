<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Model\Division;
use App\Model\District;
use App\Model\Upazila;
use App\Model\Union;
use App\Model\WardNo;
use App\Http\Requests\ WardRequest;

class WardController extends Controller
{
    
     public function view(){
        $data['allData'] =  WardNo::all();
       
        return view('backend.ward.view-ward',$data);
    }
    public function add(){
        $data['divisions'] = Division::all();
        return view('backend.ward.add-ward',$data);
    }
    public function store(Request $request){
        $this->validate($request,[
          
            'ward_no'=>'required|unique:ward_nos,ward_no'
           
        ]);
        $data = new WardNo();
        $data ->division_id = $request->division_id;
         $data ->district_id = $request->district_id;
          $data ->upazila_id = $request->upazila_id;
          $data ->union_id = $request->union_id;
        $data ->ward_no = $request->ward_no;
       
         $data->created_by = Auth::user()->id;
       
        $data->save();
       
        return redirect()->route('wards.view')->with('success','Data Added successfull');
    }
    public function edit($id){
        $data['editData'] = WardNo::find($id);
        $data['divisions'] = Division::all();
       return view('backend.ward.add-ward',$data);
    }
    public function update(WardRequest $request,$id){
          $this->validate($request,[
          
           'ward_no'=>'required|unique:ward_nos,ward_no'
        ]);
        $data = WardNo::find($id);
        $data ->division_id = $request->division_id;
         $data ->district_id = $request->district_id;
          $data ->upazila_id = $request->upazila_id;
          $data ->union_id = $request->union_id;
        $data ->ward_no = $request->ward_no;
       
         $data->updated_by = Auth::user()->id;
       
        $data->save();
       
        return redirect()->route('wards.view')->with('success','Data Updated successfull');
    }
    public function delete($id){
        $ward = WardNo::find($id);
        
        $ward -> delete();
         return redirect()->route('wards.view')->with('success','Data Delete successfull');
    }
}
