<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;
use Illuminate\Support\Str;

class Income extends Model
{
    use HasFactory;

    const CHINESE = ['零','壹','貳','參','肆','伍','陸','柒','捌','玖'];

    protected $guarded = [];

    protected $casts = [
        'date' => 'date',
    ];

    public static function sumAndFormat($incomes, $i)
    {
        $sum = 0;

        for ($j = $i; $j < $i+6; $j++) {
            $sum += isset($incomes[$j]) ? $incomes[$j]['amount'] : 0;
        }

        return Number::format($sum);
    }

    public static function sumInChinese($incomes, $i, $showIndex)
    {
        $sum = 0;

        for ($j = $i; $j < $i+6; $j++) {
            $sum += isset($incomes[$j]) ? $incomes[$j]['amount'] : 0;
        }
        $sum .= '';

        $str = [];
        for ($i = Str::length($sum)-1; $i >= 0; $i--) {
            $str[] = self::CHINESE[$sum[$i]];
        }

        return $str[$showIndex] ?? '';
    }
}
