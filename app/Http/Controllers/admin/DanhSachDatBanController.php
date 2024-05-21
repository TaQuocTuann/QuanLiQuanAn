<?php

namespace App\Http\Controllers\admin;
use App\Models\datbanan;
use App\Http\Controllers\Controller;
use App\Models\DanhSachDatBan;
use Illuminate\Http\Request;

class DanhSachDatBanController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "datbanans";
        $viewData["datbanans"] = datbanan::all();
        return view('admin.dsdatbanan.index')->with("viewData", $viewData);
        }


        public function create(Request $request)
        {
            $request->validate([
                'Madatban'=> 'required',
                'Tenkhachhang' => 'required',
                'Sodienthoai' => 'required',
                'Soluongban' => 'required',
                'Soluongkhach' => 'required',
                'Ngaydatban' => 'required',
                'Giodatban' => 'required',
                'Ghichu' => 'required',
            ]);
        
           

        }
    }      
    
        
           
        