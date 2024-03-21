<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Cart;

class CartService

{

    public static function getItemsInCart($items)

    {

        $products = []; //空の配列を準備

        // dd($items);

        foreach ($items as $item) { // カート内の商品を一つずつ処理

            $pro = Product::findOrFail($item->product_id); //商品を取得

            $owner = $pro->shop->owner->select('name', 'email')->first()->toArray(); //オーナー情報を取得

            $values = array_values($owner); //値のみ取得

            $keys = ['ownerName', 'email']; //キーのみ名前を変える

            $ownerInfo = array_combine($keys, $values); //$keysと$valuesをくっつける！

            // dd($ownerInfo);
            $product = Product::where('id', $item->product_id)

                ->select('id', 'name', 'price')->get()->toArray(); // 商品情報の配列

            $quantity = Cart::where('product_id', $item->product_id)

                ->select('quantity')->get()->toArray(); // 在庫数の配列

            // dd($ownerInfo, $product, $quantity);
            $result = array_merge($product[0], $ownerInfo, $quantity[0]); // 配列の結合

            // dd($result);

            array_push($products, $result); //配列に追加
        }


        return $products; // 新しい配列を返す

    }
}
