<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    public function setDescriptionExtract($comic){
        $extract = substr ($comic->description, 0, 50);
        return $extract . '...';
    }

    public function setTitleExtract($comic){
        $extract = substr ($comic->title, 0, 20);
        return $extract . '...';
    }

    protected $fillable = [
        'title',
        'type',
        'thumb',
        'price',
        'series',
        'sale_date',
        'description'
    ];

}
