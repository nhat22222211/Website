<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xemodel extends Model
{
    use HasFactory;
    protected $table = "xe";
    public function loaixe()
    {
        return $this->belongsTo(Xemodel::class,'id_loai','id');
    }
}
