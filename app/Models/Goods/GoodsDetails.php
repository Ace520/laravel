<?php

namespace App\Models\Goods;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;


class GoodsDetails extends Model
{
    protected $table = 'goods_details';

    protected $fillable = [
        'name',
        'content',
    ];

    public static function getGoodsDetails($id)
    {
        return Cache::rememberForever('users', function () use ($id) {
            return GoodsDetails::find($id);
        });
    }

}
