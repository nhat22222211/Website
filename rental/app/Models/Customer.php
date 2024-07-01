<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "khach_hang";
    public function car()
    {
        return $this->belongsTo(Xemodel::class,'idsp','id');
    }
}
