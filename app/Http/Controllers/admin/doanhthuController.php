<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\doanhthu;  
use Illuminate\Http\Request;

class doanhthuController extends Controller
{
    /**
     * Display a listing of the reservations.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "doanhthu";
       
        $viewData["doanhthu"] = doanhthu::all();
        return view('admin.thongke.index')->with("viewData", $viewData);
        }  


  
}