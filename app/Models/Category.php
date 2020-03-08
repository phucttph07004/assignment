<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";
    protected $fillable = ['name','user_id','created_at','updated_at'];
    public function ShowNameUser()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
