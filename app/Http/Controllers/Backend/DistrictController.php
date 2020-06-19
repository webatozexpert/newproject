<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Model\Division;
use App\Model\District;
use App\Http\Requests\ DistrictRequest;

class DistrictController extends Controller
{
   public function view(){
        $data['allData'] = District::all();
       
        return view('backend.district.view-district',$data);
    }
    public function add(){
        $data['divisions'] = Division::all();
        return view('backend.district.add-district',$data);
    }
    public function store(Request $request){
        $this->validate($request,[
          
            'name'=>'required|unique:districts,name'
           
        ]);
        $data = new District();
        $data ->division_id = $request->division_id;
        $data ->name = $request->name;
       
         $data->created_by = Auth::user()->id;
       
        $data->save();
       
        return redirect()->route('districts.view')->with('success','Data Added successfull');
    }
    public function edit($id){
        $data['editData'] = District::find($id);
        $data['divisions'] = Division::all();
       return view('backend.district.add-district',$data);
    }
    public function update(DistrictRequest $request,$id){
          $this->validate($request,[
          
           'name'=>'required|unique:districts,name'
        ]);
         $data =  District::find($id);
        $data ->division_id = $request->division_id;
        $data ->name = $request->name;
       
         $data->updated_by = Auth::user()->id;
       
        $data->save();
       
        return redirect()->route('districts.view')->with('success','Data Updated successfull');
    }
    public function delete($id){
        $district = District::find($id);
        
        $district -> delete();
         return redirect()->route('districts.view')->with('success','Data Delete successfull');
    }
}
