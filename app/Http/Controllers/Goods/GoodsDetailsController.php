<?php

namespace App\Http\Controllers\Goods;

use App\Http\Controllers\Controller;
use App\Models\Goods\GoodsDetails;

class GoodsDetailsController extends Controller
{
    public function show($id)
    {
        $details = GoodsDetails::where('goods_id', $id)->value('content');
        return response($details, 200);
    }
}
