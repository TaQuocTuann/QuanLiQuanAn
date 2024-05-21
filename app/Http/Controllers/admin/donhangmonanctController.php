<?php

namespace App\Http\Controllers\admin;
use App\Models\khachordermonan;
use App\Http\Controllers\Controller;
use App\Models\donhangmonanct;
use Illuminate\Http\Request;
use DB;
class donhangmonanctController extends Controller
{
    public function indexdonhangmonanct(Request $request)
    {
        $data = DB::table('khachordermon')->where('soban',$request->hoadon)->get();
        if(count($data) == 0){
            dd("Bàn này chưa order gì cả");
        }
        foreach($data as $row){
            // dd($row);
            $row->image = DB::table('menu')->where('Tenmonan',$row->TenmonOrder)->first()->Anhmonan;
        }
        $viewData = [];
        $viewData["title"] = "donhangmonan";
        $viewData["donhangmonan"] = donhangmonanct::all();
        $viewData["data"] = $data;

        return view('admin.hoadonCT.index')->with("viewData", $viewData);
        }


      
          
        
           
}
         
    
        
           
        