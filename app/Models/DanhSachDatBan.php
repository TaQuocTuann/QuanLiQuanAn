<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema; 
use Illuminate\Database\Schema\Blueprint; 

class DanhSachDatBan extends Model
{
   // use HasFactory;
   protected $table = 'datbanan';
   protected $fillable = [
      'Madatban',
      'Tenkhachhang',
      'Sodienthoai',
      'Soluongban',
      'Soluongkhach',
      'Ngaydatban',
      'Giodatban',
      'Ghichu'
   ];
   public function getid()
    {
        return $this->attributes['id'];
    }
    public function setid($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getMadatban()
    {
        return $this->attributes['Madatban'];
    }
    public function setMadatban($Madatban)
    {
        $this->attributes['Madatban'] = $Madatban;
    }

    public function getSodienthoai()
    {
        return $this->attributes['Sodienthoai'];
    }
    public function setSodienthoai($Sodienthoai)
    {
        $this->attributes['Sodienthoai'] = $Sodienthoai;
    }
    public function getTenkhachhang()
    {
        return $this->attributes['Tenkhachhang'];
    }
    public function setTenkhachhang($Tenkhachhang)
    {
        $this->attributes['Tenkhachhang'] = $Tenkhachhang;
    }

    public function getSoluongban()
    {
        return $this->attributes['Soluongban'];
    }
    public function setSoluongban($Soluongban)
    {
        $this->attributes['Soluongban'] = $Soluongban;
    }

    public function getSoluongkhach()
    {
        return $this->attributes['Soluongkhach'];
    }
    public function setSoluongkhach($Soluongkhach)
    {
        $this->attributes['Soluongkhach'] = $Soluongkhach;
    }

    public function getNgaydatban()
    {
        return $this->attributes['Ngaydatban'];
    }
    public function setNgaydatban($Ngaydatban)
    {
        $this->attributes['Ngaydatban'] = $Ngaydatban;
    }

    public function getGiodatban()
    {
        return $this->attributes['Giodatban'];
    }
    public function setGiodatban($Giodatban)
    {
        $this->attributes['Giodatban'] = $Giodatban;
    }
    public function getGhichu()
    {
        return $this->attributes['Ghichu'];
    }
    public function setGhichu($Ghichu)
    {
        $this->attributes['Ghichu'] = $Ghichu;
    }

}
