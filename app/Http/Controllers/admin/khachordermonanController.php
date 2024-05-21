<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\khachordermon;  
use Illuminate\Http\Request;
use DB;
class khachordermonanController extends Controller
{
        /**
         * Display a listing of the reservations.
         *
         * @return \Illuminate\Http\Response
         */
        public function indexkhachordermon()
        {
            $viewData = [];
            $viewData["title"] = "khachordermonan";
            $banan = DB::table('banan')->get();
            $menu = DB::table('menu')->get();
            
            $viewData["khachorder"] = khachordermon::all();
            return view('admin.order.index',[
                "viewData" => $viewData,
                'banan' => $banan,
                'menu' => $menu,

            ]);
        }  



        public function tableOrder(Request $request){
            $tableId = $request->value;
            $order = DB::table('khachordermon')->where('soban',$tableId)->get();
            
            return response()->json($order);
            
        }

        public function update(Request $request){
            $tableId = $request->table;
            $data = json_decode($request->data,true);
            $name = $request->name;
            if($tableId && $data != null){
                DB::table('khachordermon')->where('soban',$tableId)->delete();
                foreach($data as $key => $val){
                    DB::table('khachordermon')->insert([
                        "TenmonOrder" => $val['name'],
                        "Giamon" => $val['price'],
                        "Soluong" => $val['quantity'],
                        "tonggiatien"  => (int)$val['quantity'] * (int)$val['price'],
                        "Ghichu"  => $val['note'],
                        "tenkhachorder" =>  $name,
                        "soban" =>  $tableId
                    ]);
                }
            }
          
            return response()->json();

        }
    

}