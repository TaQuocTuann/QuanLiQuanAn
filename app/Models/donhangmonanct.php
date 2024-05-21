<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema; 
use Illuminate\Database\Schema\Blueprint; 
class donhangmonanct extends Model

{
    protected $table = 'donhangmonanct';
   
    protected $fillable = [
        'TenmonOrder',
        'Soluong',
        'Ghichu',
        'Giamon',
        'tonggiatien',
        'tenkhachorder',
        'soban'
    ];
    public function getid()
    {
        return $this->attributes['id'];
    }
    public function setid($id)
    { 
        $this->attributes['id'] = $id;
    }
    public function getTenmonOrder() {
        return $this
        ->attributes['TenmonOrder'];
        }
        public function setTenmonOrder($TenmonOrder) {
        $this
        ->attributes['TenmonOrder'] = $TenmonOrder;
        }   

        public function getSoluong()
        {
            return $this->attributes['Soluong'];
        }
        public function setSoluong($Soluong)
        {
            $this->attributes['Soluong'] = $Soluong;
        }

        public function getGhichu()
        {
            return $this->attributes['Ghichu'];
        }
        public function setGhichu($Ghichu)
        {
            $this->attributes['Ghichu'] = $Ghichu;
        }
        public function getGiamon()
        {
            return $this->attributes['Giamon'];
        }
        public function setGiamon($Giamon)
        {
            $this->attributes['Giamon'] = $Giamon;
        }

        public function gettonggiatien()
        {
            return $this->attributes['tonggiatien'];
        }
        public function settonggiatien($tonggiatien)
        {
            $this->attributes['tonggiatien'] = $tonggiatien;
        }
        public function gettenkhachorder()
        {
            return $this->attributes['tenkhachorder'];
        }
        public function settenkhachorder($tenkhachorder)
        {
            $this->attributes['tenkhachorder'] = $tenkhachorder;
        }
        public function getsoban()
        {
            return $this->attributes['soban'];
        }
        public function setsoban($soban)
        {
            $this->attributes['soban'] = $soban;
        }
}