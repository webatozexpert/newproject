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
use App\Model\Village;
use App\Http\Requests\ VillageRequest;


class VillageController extends Controller
{
     public function view(){
        $data['allData'] =  Village::all();
       
        return view('backend.village.view-village',$data);
    }
    public function add(){
        $data['divisions'] = Division::all();
        return view('backend.village.add-village',$data);
    }
    public function store(Request $request){
        $this->validate($request,[
          
            'name'=>'required|unique:villages,name'
           
        ]);
        $data = new Village();
        $data ->division_id = $request->division_id;
         $data ->district_id = $request->district_id;
          $data ->upazila_id = $request->upazila_id;
          $data ->union_id = $request->union_id;
        $data ->ward_no_id = $request->ward_no_id;
         $data ->name = $request->name;
       
         $data->created_by = Auth::user()->id;
       
        $data->save();
       
        return redirect()->route('villages.view')->with('success','Data Added successfull');
    }
    public function edit($id){
        $data['editData'] = Village::find($id);
        $data['divisions'] = Division::all();
       return view('backend.village.add-village',$data);
    }
    public function update(VillageRequest $request,$id){
          $this->validate($request,[
          
           'name'=>'required|unique:villages,name'
        ]);
        $data = Village::find($id);
        $data ->division_id = $request->division_id;
         $data ->district_id = $request->district_id;
          $data ->upazila_id = $request->upazila_id;
          $data ->union_id = $request->union_id;
        $data ->ward_no_id = $request->ward_no_id;
         $data ->name = $request->name;
         $data->updated_by = Auth::user()->id;
       
        $data->save();
       
        return redirect()->route('villages.view')->with('success','Data Updated successfull');
    }
    public function delete($id){
        $village = Village::find($id);
        
        $village -> delete();
         return redirect()->route('villages.view')->with('success','Data Delete successfull');
    }
}
