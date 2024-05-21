<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema; 
use Illuminate\Database\Schema\Blueprint; 
class banan extends Model

{
    protected $table = 'banan';
   
    protected $fillable = [
        'Mabanan',
        'Tenbanan'
       
    ];
    public function getid() {
        return $this
        ->attributes['id'];
        }
        public function setid($id) {
        $this
        ->attributes['id'] = $id;
        }
        public function getMabanan() {
            return $this
            ->attributes['Mabanan'];
            }
            public function setMabanan($Mabanan) {
            $this
            ->attributes['Mabanan'] = $Mabanan;
            }   
        public function getTenbanan() {
        return $this
        ->attributes['Tenbanan'];
        }
        public function setTenbanan($Tenbanan) {
        $this
        ->attributes['Tenbanan'] = $Tenbanan;
        }
        
}