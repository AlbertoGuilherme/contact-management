<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    /**
     * This trait Softdeletes
     * add the feature to not delete
     * our registers at all
     */
    use HasFactory, SoftDeletes;


    protected $fillable = ['name', 'email', 'contact'];
}
