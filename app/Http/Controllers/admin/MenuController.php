<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Menu;
use App\Models\datbanan;
use App\Models\khachordermonan;
use App\Models\donhangmonanct;
use Illuminate\Http\Request;

class MenuController extends Controller
{
// Trang hiển thị danh sách món ăn
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "menus";
       
        $viewData["menus"] = menu::all();
        return view('admin.menu.index')->with("viewData", $viewData);
        }   
//Trang Danh Sách Đặt bàn
public function indexdsdatban()
    {
        $viewData = [];
        $viewData["title"] = "datbanans";
        $viewData["datbanans"] = datbanan::all();
        return view('admin.dsdatban.index')->with("viewData", $viewData);
        }

        
// Trang thêm món ăn
        public function index1()
        {
            $viewData = [];
            $viewData["title"] = "menus";
            $viewData["menus"] = menu::all();
            return view('admin.addmonan.index')->with("viewData", $viewData);
            } 
            public function create(Request $request)
            {
                $request->validate([
                    'Mamonan'=> 'required',
                    'Tenmonan' => 'required',
                    'Anhmonan' => 'required',
                    'Loaimonan' => 'required',
                    'Giamonan' => 'required',
                    'Mota' => 'required',
                ]);
            
                $creationData = $request->only(['Mamonan','Tenmonan', 'Anhmonan','Loaimonan', 'Giamonan', 'Mota']);
                $newMenu = Menu::create($creationData);

                $creationData['Anhmonan'] = 'game.png';
                    
                if ($request->hasFile('Anhmonan')) {
                    $AnhmonanName =  $newMenu->id . '.' .$request->file('Anhmonan')->extension();
                    storage::disk('public')->put($AnhmonanName, file_get_contents($request->file('Anhmonan')->getRealPath()));
                    $newMenu->Anhmonan = $AnhmonanName;
                    $newMenu->save();
                }
            
                return redirect()->route('admin.menu.index');
            }

 // Xóa món ăn           
    public function delete($id)
    {
        Menu::destroy($id);
      

    return back();


    }
    
//Trang chỉnh sửa món ăn
    public function edit($id)
    {
        $viewData= [];
        $viewData["title"]= " Edit menu ";
        $viewData["menu"]= menu::findOrFail($id);
        return view('admin.editmenu.index')->with("viewData", $viewData);
    }

//Chỉnh sửa món ăn
    public function update(Request $request, $id)
{
    $request->validate([
        'Mamonan'=> "required",
        'Tenmonan'=> "required",
        'Anhmonan'=> "required",
        'Loaimonan'=> "required",
        'Giamonan'=> "required",
        'Mota'=> "required",

        ]);
        
        $Menu = Menu::findOrFail($id);
        $Menu -> setMamonan($request->input('Mamonan'));
        $Menu -> setTenmonan($request->input('Tenmonan'));
        $Menu -> setMota($request->input('Mota'));
        $Menu ->setGiamonan($request->input('Giamonan'));
        $Menu ->setLoaimonan($request->input('Loaimonan'));
        $Menu -> setAnhmonan("game.png");
        $Menu ->save();
        if($request ->hasFile("Anhmonan"))
        {
          
            $AnhmonanName= $Menu->getid().".".$request->file("Anhmonan")->extension();
            storage::disk("public")->put($AnhmonanName,file_get_contents($request->file("Anhmonan")->getRealPath()));
            $Menu->setAnhmonan("$AnhmonanName");
        }
        $Menu->save();
       
 return redirect()->route('admin.menu.index');

        }
}
