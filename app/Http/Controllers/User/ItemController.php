<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function __construct()

{//ユーザーかどうかの確認

$this->middleware("auth:users");}
    public function index()
    {
        //table('t_stocks')でテーブル名を取得する

        // DB::rawでSQLをそのままファイルに記述できる

        // ->groupBy('product_id')->having('quantity','>',1);でproduct_id毎の合計在庫が１個以上あるかを指定

        $stocks = DB::table('t_stocks')
            ->select(
                'product_id',
                DB::raw('sum(quantity) as quantity')
            )
            ->groupBy('product_id')
            ->having('quantity', '>', 1);

        $products = DB::table('products')
            ->joinSub($stocks, 'stock', function ($join) {
                $join->on('products.id', '=', 'stock.product_id');
            })

            ->join('shops', 'products.shop_id', '=', 'shops.id')
            ->join('secondary_categories', 'products.secondary_category_id', '=', 'secondary_categories.id')
            ->join('images as image1', 'products.image1', '=', 'image1.id')
            ->where('shops.is_selling', true)
            ->where('products.is_selling', true)
            ->select(
                'products.id as id',
                'products.name as name',
                'products.price',
                'products.sort_order as sort_order',
                'products.information',
                'secondary_categories.name as category',
                'image1.filename as filename'
            )
            ->get();
        // dd($stocks,$products);

        // $products = Product::all();
        return view('user.index', compact('products'));
    }
    public function show($id){

        $product = Product::findOrFail($id);

        return view('user.show',compact('product'));

        }
}


