<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function userinfo(){
        return $this->hasOne(User::class);
    }
}
