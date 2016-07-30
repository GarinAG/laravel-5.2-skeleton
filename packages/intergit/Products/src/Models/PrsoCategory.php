<?php

namespace Intergit\Products\Models;

use Kalnoy\Nestedset\Node;

class PrsoCategory extends Node
{
    public static $productPerPage = 30;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', '_lft', '_rgt', 'parent_id', 'note', 'desc', 'showtop', 'showside', 'showbottom', 'showcontent',
    ];

    public function products()
    {
        return $this->belongsToMany('Intergit\Products\Models\PrsoProduct');
    }
}