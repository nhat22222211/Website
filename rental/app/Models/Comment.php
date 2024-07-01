<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\User;
class Comment extends Model
{
    use HasFactory;
    protected $table = "binh_luan";
    public function users()
    {
        return $this->belongsTo(User::class,'id_kh','id');
    }
    public function car()
    {
        return $this->belongsTo(Xemodel::class,'id_xe','id');
    }
}
