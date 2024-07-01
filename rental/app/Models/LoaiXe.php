<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiXe extends Model
{
    use HasFactory;
    protected $table = "loai_xe";
    public function xe()
    {
        return $this->hasMany(Xemodel::class,'id_loai','id');
    }
}
