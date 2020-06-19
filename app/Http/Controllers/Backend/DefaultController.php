<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\District;
use App\Model\Upazila;
use App\Model\Union;
use App\Model\WardNo;
use Auth;

class DefaultController extends Controller
{
	public function getDistrict(Request $request){
        
       // dd('ok');
        $division_id = $request->division_id;
        $allDistrict = District::where('division_id',$division_id)->get();
       // dd('ok');
        //dd($allDist);
         //dd( $allDist->toArray());
        return response()->json($allDistrict);

  }  
  public function getUpazila(Request $request){
      //dd('ok');
        $district_id = $request->district_id;
        $allUpazila = Upazila::where('district_id',$district_id)->get();
        //dd('ok');
        //dd($allUpazila);
        // dd($allUpazila->toArray());
        return response()->json($allUpazila);


  }
  public function getUnion(Request $request){
    //dd('ok');
        $upazila_id = $request->upazila_id;
        $allUnion = Union::where('upazila_id',$upazila_id)->get();
        //dd('ok');
        //dd($allUnion);
         //dd($allUnion->toArray());
        return response()->json($allUnion);
  }
  	public function getWardNo(Request $request){
      //dd('ok');
        $union_id = $request->union_id;
        $allWardNo = WardNo::where('union_id',$union_id)->get();
        //dd('ok');
        //dd($allWardNo);
        // dd($allWardNo->toArray());
        return response()->json($allWardNo);
    }


}
