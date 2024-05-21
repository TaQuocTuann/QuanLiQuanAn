<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema; 
use Illuminate\Database\Schema\Blueprint; 
class menu extends Model

{
    protected $table = 'menu';
   
    protected $fillable = [
        'Mamonan',
        'Tenmonan',
        'Anhmonan',
        'Loaimonan',
        'Giamonan',
        'Mota'
    ];
    public function getid()
    {
        return $this->attributes['id'];
    }
    public function setid($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getMamonan()
    {
        return $this->attributes['Mamonan'];
    }
    public function setMamonan($Mamonan)
    {
        $this->attributes['Mamonan'] = $Mamonan;
    }
    public function getTenmonan()
    {
        return $this->attributes['Tenmonan'];
    }
    public function setTenmonan($Tenmonan)
    {
        $this->attributes['Tenmonan'] = $Tenmonan;
    }

    public function getAnhmonan()
    {
        return $this->attributes['Anhmonan'];
    }
    public function setAnhmonan($Anhmonan)
    {
        $this->attributes['Anhmonan'] = $Anhmonan;
    }

    public function getLoaimonan()
    {
        return $this->attributes['Loaimonan'];
    }
    public function setLoaimonan($Loaimonan)
    {
        $this->attributes['Loaimonan'] = $Loaimonan;
    }
    public function getGiamonan()
    {
        return $this->attributes['Giamonan'];
    }
    public function setGiamonan($Giamonan)
    {
        $this->attributes['Giamonan'] = $Giamonan;
    }
    public function getMota()
    {
        return $this->attributes['Mota'];
    }
    public function setMota($Mota)
    {
        $this->attributes['Mota'] = $Mota;
    }
}