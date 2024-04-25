<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'mbps',
        'price',
        'status'
    ];
    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }
}
