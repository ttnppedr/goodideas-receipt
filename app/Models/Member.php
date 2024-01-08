<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return route('receipt.show', $this->id);
    }
}
