<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema; 
use Illuminate\Database\Schema\Blueprint; 
class doanhthu extends Model

{
    protected $table = 'doanhthu';
   
    protected $fillable = [
        
       
        'Madoanhthu',
        'TenMon',
        'Ngay',
        
       'tonggiatien'
       
    ];
    public function getid() {
        return $this
        ->attributes['id'];
        }
        public function setid($id) {
        $this
        ->attributes['id'] = $id;
        }
        public function getMadoanhthu() {
            return $this
            ->attributes['Madoanhthu'];
            }
            public function setMadoanhthu($Madoanhthu) {
            $this
            ->attributes['Madoanhthu'] = $Madoanhthu;
            }   
        public function getTenMon() {
        return $this
        ->attributes['TenMon'];
        }
        public function setTenMon($TenMon) {
        $this
        ->attributes['TenMon'] = $TenMon;
        }
        public function getNgay() {
            return $this
            ->attributes['Ngay'];
            }
            public function setNgay($Ngay) {
            $this
            ->attributes['Ngay'] = $Ngay;
            }  
            public function gettonggiatien() {
                return $this
                ->attributes['tonggiatien'];
                }
                public function settonggiatien($tonggiatien) {
                $this
                ->attributes['tonggiatien'] = $tonggiatien;
                }  
}