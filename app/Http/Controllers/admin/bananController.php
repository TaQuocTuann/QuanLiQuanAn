<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\banan;  
use Illuminate\Http\Request;

class bananController extends Controller
{
    /**
     * Display a listing of the reservations.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "banan";       
        $viewData["banans"] = banan::all();
        return view('admin.banan.index')->with("viewData", $viewData);
        }  

    /**
     * Show the form for creating a new reservation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
        'Mabanan'=> "required",
        'Tenbanan'=> "required",
       
            ]);
            $creationData = $request->only(["Mabanan","Tenbanan"]);
            banan::create($creationData);
            return redirect()->route('admin.banan.index')->with('success', 'Thêm thành công');
    }

    /**

     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $banan = new banan();
        $banan->Mabanan = $request->Mabanan;
        $banan->Tenbanan = $request->Tenbanan;
        $banan->save();
        return redirect()->route('admin.banan.index');
    }

  
}