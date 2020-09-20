<?php

use App\Setting;
use App\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//https://devvengeance.myshopify.com/admin/themes/111618818215?key=snippets/vengeanceday-wishlist-app.liquid
//this version makes a snippet
Route::get('test', function () {
    $shop = Auth::user();

    $product_graph =
    '{
        shop {
        products(first: 10, query: "title: liberty") {
            edges {
                node {
                    title
          featuredImage {
                        originalSrc
          }
        }
      }
    }
  }
}';


    $products = $shop->api()->graph( $product_graph );
    $s = "s";

    // get active theme id
    $activeThemeId = "";
    foreach($products['body']->container['themes'] as $theme){
        if($theme['role'] == "main"){
            $activeThemeId = $theme['id'];
        }
    }


//    GET /admin/api/2020-07/products.json


    return ['message' => 'Theme setup successfully -2' .  $variable_responses    ];
});
//
////https://devvengeance.myshopify.com/admin/themes/111618818215?key=snippets/vengeanceday-wishlist-app.liquid
////this version makes a snippet
//Route::get('test', function () {
//    $shop = Auth::user();
//    $themes = $shop->api()->rest('GET', '/admin/themes.json');
//    $products = $shop->api()->rest('GET', '/admin/api/2020-07/products.json');
//    $s = "s";
//
//    // get active theme id
//    $activeThemeId = "";
//    foreach($themes['body']->container['themes'] as $theme){
//        if($theme['role'] == "main"){
//            $activeThemeId = $theme['id'];
//        }
//    }
////    dd($themes);
//    $snippet = "Your snippet code updated. but we need to keep adding 88.";
//    // Data to pass to our rest api request
//    $array = array('asset' => array('key' => 'snippets/vengeanceday-wishlist-app.liquid', 'value' => $snippet));
//    $shop->api()->rest('PUT', '/admin/themes/'.$activeThemeId.'/assets.json', $array);
//
//    $variable_responses = ''; //print_r($themes);
//
////    GET /admin/api/2020-07/products.json
//
//
//    return ['message' => 'Theme setup successfully -2' .  $variable_responses    ];
//});







//
//Route::get('test', function () {
//    $shop = Auth::user();
//
//    $themes = $shop->api()->rest('GET', '/admin/themes.json');
// $s = "s";
//    // get active theme id
//    $activeThemeId = "";
//    foreach($themes['body']->container['themes'] as $theme){
//        if($theme['role'] == "main"){
//            $activeThemeId = $theme['id'];
//        }
//    }
//
//    $snippet = "Your snippet code updated";
//
//    // Data to pass to our rest api request
//    $array = array('asset' => array('key' => 'snippets/codeinspire-wishlist-app.liquid', 'value' => $snippet));
//
//    $shop->api()->rest('PUT', '/admin/themes/'.$activeThemeId.'/assets.json', $array);
//
//    // save data into database
//
//    Setting::updateOrCreate(
//        ['shop_id' => $shop->name ],
//        ['activated' => true]
//    );
//
//    return ['message' => 'Theme setup succesfully'];
//
//
//});



//Route::get('test', function () {
//
//        $shop = Auth::user();
//
//    $themes = $shop->api()->rest('GET', '/admin/themes.json');
// $s = "s";
//    // get active theme id
//    $activeThemeId = "";
//    foreach($themes['body']->container['themes'] as $theme){
//        if($theme['role'] == "main"){
//            $activeThemeId = $theme['id'];
//        }
//    }
//
//    $snippet = "Your snippet code updated";
//
//    // Data to pass to our rest api request
//    $array = array('asset' => array('key' => 'snippets/codeinspire-wishlist-app.liquid', 'value' => $snippet));
//
//    $shop->api()->rest('PUT', '/admin/themes/'.$activeThemeId.'/assets.json', $array);
//
//    // save data into database
//
//    Setting::updateOrCreate(
//        ['shop_id' => $shop->name ],
//        ['activated' => true]
//    );
//
//    return ['message' => 'Theme setup succesfully'];
//
//
//
//
//});


////this version makes a snippet
//Route::get('test', function () {
//    $shop = Auth::user();
//    $themes = $shop->api()->rest('GET', '/admin/themes.json');
//    $s = "s";
//    // get active theme id
//    $activeThemeId = "";
//    foreach($themes['body']->container['themes'] as $theme){
//        if($theme['role'] == "main"){
//            $activeThemeId = $theme['id'];
//        }
//    }
//    $snippet = "Your snippet code updated";
//    // Data to pass to our rest api request
//    $array = array('asset' => array('key' => 'snippets/vengeanceday-wishlist-app.liquid', 'value' => $snippet));
//    $shop->api()->rest('PUT', '/admin/themes/'.$activeThemeId.'/assets.json', $array);
//    return ['message' => 'Theme setup succesfully'];
//});



//this version updates a themes name
//Update a theme's name
//PUT /admin/api/2020-07/themes/752253240.json
//{
//  "theme": {
//    "id": 752253240,
//    "name": "Experimental"
//  }
//}
//Route::get('test', function () {
//    $shop = Auth::user();
//    $themes = $shop->api()->rest('GET', '/admin/themes.json');
//    $s = "s";
//    // get active theme id
//    $activeThemeId = "";
//    foreach($themes['body']->container['themes'] as $theme){
//        if($theme['role'] == "main"){
//            $activeThemeId = $theme['id'];
//        }
//    }
//    $snippet = "rhetts_program";
//    // Data to pass to our rest api request
//    $array = array('theme' => array('key' => 'name', 'value' => $snippet) );
//    $shop->api()->rest('PUT', '/admin/api/2020-07/themes/'.$activeThemeId.'.json', $array);
//    return ['message' => 'Theme setup succesfully'];
//});



Route::middleware(['auth.shopify'])->group(function () {


    Route::get('/', function () {
        $shop = Auth::user();

        $settings = Setting::where("shop_id", $shop->name)->first();

        return view('dashboard', compact('settings'));


    })->name('home');


    Route::get('wishlists', "WishlistController@index")->name('wishlists');

    Route::view('/products', 'products');
    Route::view('/customers', 'customers');
    Route::view('/settings', 'settings');

    Route::post('configureTheme', "SettingController@configureTheme");

});

