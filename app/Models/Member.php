<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Member extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function incomes()
    {
        return $this->hasMany(Income::class, 'member_name', 'name');
    }

    public function getLinkAttribute()
    {
        return route('receipt.list', $this->id);
    }

    public function getFirstImageAttribute()
    {
        return asset('images/'. $this->identifier . '_1.jpeg');
    }

    public function getSecondImageAttribute()
    {
        return asset('images/'. $this->identifier . '_2.jpeg');
    }

    public function getHasImagesAttribute()
    {
        return Storage::exists('public/images/'. $this->identifier . '_1.jpeg') && Storage::exists('public/images/'. $this->identifier . '_2.jpeg');
    }
}
