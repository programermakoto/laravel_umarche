<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use App\Models\shop;

class ImageController extends Controller
{
    public function __construct()

    {

        $this->middleware("auth:owners");

        $this->middleware(function ($request, $next) {

            $id = $request->route()->parameter("image"); //shopのidを取得

            if (!is_null($id)) { //shopのidが存在するなら↓

                $imagesOwnerId = shop::findOrFail($id)->owner->id;

                $imageId = (int)$imagesOwnerId; //文字列=>数値に

                //認証用のid↓

                if ($imageId !== Auth::id()) { //同じではなかったら

                    abort(404); //404の画面表示

                }
            }

            return $next($request);
        });
    }
    public function index()
    {
        $images = Image::where("owner_id", Auth::id())->orderBy("updated_at", "desc")->paginate(20);

        return view("owner.images.index", compact("images"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
