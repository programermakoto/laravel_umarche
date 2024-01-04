<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\shop;
use Illuminate\Support\Facades\Storage;
class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:owners");

        $this->middleware(function($request,$next){

            // dd($request->route()->parameter("shop"));

            //dd(Auth::id());

            $id=$request->route()->parameter("shop");//shopのidを取得

           if(!is_null($id)){//shopのidが存在するなら↓

            $shopsOwnerId =shop::findOrFail($id)->owner->id;

            $shopId = (int)$shopsOwnerId;//文字列=>数値に

            $ownerId =Auth::id();//認証用のid

           if($shopId !== $ownerId){//同じではなかったら

           abort(404);//404の画面表示

            }

            }

           return $next($request);

            });
    }
    public function index()
    {
        $shops = shop::where("owner_id",Auth::id())->get();
        return view("owner.shops.index",compact("shops"));
    }
    public function edit($id)
    {
        // dd(shop::findOrFail($id));
        $shop = shop::findOrFail($id);
        return view("owner.shops.edit",compact("shop"));
    }
    public function update(Request $request)
    {

        $imageFile = $request->image; //imgを受け取り変数へ
        if(!is_null($imageFile) && $imageFile->isValid() ){
            Storage::putFile("public/shops",$imageFile);
        }
         //nullではないかアップロードできてるか確認
            //保存先と保存したいファイル
        return redirect()->route("owner.shops.index");

    }
}
