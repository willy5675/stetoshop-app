<?php

namespace App\Models;

use App\Models\UserRole;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $guarded = ['id'];

    public function userRole()
    {
        // return this
        return $this->hasMany(UserRole::class,'role_id','id');
    }
}
