<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function parent()
    {
        return $this->belongsTo(Page::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Page::class, 'parent_id');
    }
}
