<?php

namespace Modules\Setting\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class language extends Model
{
    use HasFactory;
    protected $fillable = ['title' , 'slug' , 'status'];
}
