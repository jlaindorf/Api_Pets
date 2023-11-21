<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    protected $hidden =['created_at', 'updated_at'];

    public function pets(){
        return $this->belongsToMany(Role::class, 'role_user_table', 'user_id', 'role_id');
    }
}


