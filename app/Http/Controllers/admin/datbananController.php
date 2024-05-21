<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Datbanan;  
use Illuminate\Http\Request;

class DatbananController extends Controller
{
    /**
     * Display a listing of the reservations.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Datbanan";
       
        $viewData["Datbanans"] = Datbanan::all();
        return view('admin.datban.index')->with("viewData", $viewData);
        }  

    /**
     * Show the form for creating a new reservation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
        'Madatban'=> "required",
        'Tenkhachhang'=> "required",
        'Soluongban'=> "required",
        'Soluongkhach'=> "required",
        'Ngaydatban'=> "required",
        'Giodatban'=> "required",
        'Sodienthoai'=> "required",
        'Ghichu'=> "required",
            ]);
            $creationData = $request->only(["Madatban","Tenkhachhang","Soluongban","Soluongkhach","Ngaydatban","Giodatban","Sodienthoai","Ghichu"]);
            Datbanan::create($creationData);
            return redirect()->route('admin.dsdatban.index')->with('success', 'Thêm thành công');
    }

    /**

     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $datban = new datbanan();
        $datban->Madatban = $request->Madatban;
        $datban->Tenkhachhang = $request->Tenkhachhang;
        $datban->Soluongban = $request->Soluongban;
        $datban->Soluongkhach = $request->Soluongkhach;
        $datban->Ngaydatban = $request->Ngaydatban;
        $datban->Giodatban = $request->Giodatban;
        $datban->Sodienthoai = $request->Sodienthoai;
        $datban->Ghichu = $request->Ghichu;
        $datban->save();

        return redirect()->route('admin.dsdatban.index');
    }

  
}