<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function unit()
    {
        return $this->belongsTo(Unit_Bisnis::class, 'unit_bisnis_id');
    }

    public function penjual()
    {
        return $this->belongsTo(User::class);
    }
}
