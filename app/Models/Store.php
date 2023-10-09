<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Store extends Model
{
    use HasFactory;

    public static $store, $image, $imageName, $imgUrl, $path, $slug;

    public static function saveStore($request){
       self::$store = new Store(); 
       self::$store->title          = $request->title;
       self::$store->slug           = self::makeSlug($request);
       self::$store->category_id    = $request->category_id;
       self::$store->description    = $request->description;
       self::$store->image          = self::getImage($request);
       self::$store->save();
    }

    private static function getImage($request){
        self::$image        = $request->file('image');
        self::$path         = 'store-images/';
        self::$imageName    = rand().'.'.self::$image->getClientOriginalExtension();
        self::$image->move(self::$path, self::$imageName);
        self::$store->image = self::$path.self::$imageName;
        return self::$store->image;
    }

    public static function makeSlug($request){
        if($request->slug){
            self::$slug = Str::slug($request->slug, '-');
        }else{
            self::$slug = Str::slug($request->title, '-');
        }

        return self::$slug;
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
