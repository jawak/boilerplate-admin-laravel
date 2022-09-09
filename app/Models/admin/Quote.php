<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;;
class Quote extends Model
{
     use SoftDeletes;    public $table = 'quotes';

    public $fillable = [
        'title',
        'content',
        'status'
    ];

    protected $casts = [
        'id' => 'integer',
        'title' => 'string'
    ];

    public static $rules = [
        'title' => 'required',
        'content' => 'required',
        'status' => 'required'
    ];

    
}
