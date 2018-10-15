<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeriesTree extends Model
{
    protected $table = "series_trees";
    protected $attributes = ['series_name','parent_id'];

}
