<?php

namespace App\Models;

use App\Models\ItemType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ["id"];

    public function itemType() {
        return $this->belongsTo(ItemType::class)->withTrashed();
    }
}
