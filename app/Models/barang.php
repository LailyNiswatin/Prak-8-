<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    public function Satuan(){
        return $this->belongsTo(Satuan::class,'Satuan_id') ;
    }
}
