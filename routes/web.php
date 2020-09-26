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
//https://shopify.dev/docs/admin-api/rest/reference/events/webhook
//https://shopify.dev/docs/admin-api/rest/reference/events/webhook
//https://shopify.dev/docs/admin-api/rest/reference/events/webhook

//DELETE /admin/api/2020-07/webhooks/4759306.json



//Route::post(
//    '/webhook/products-create',
//    'App\Http\Controllers\SettingController'
//)->middleware('auth.webhook');







Route::middleware(['auth.shopify'])->group(function () {

//create_trigger_product_update
//    //    test function runs the others via calling their url
//    Route::get('test', function()
//    {
//        $shop = Auth::user();
//
////        $trigger_url = "https://tasty-kangaroo-40.loca.lt/webhook/products-update";
////        $array = array('webhook' => array('topic' => 'products/create', 'address' => $trigger_url, 'format' => 'json'));
//        $shop->api()->rest('GET', 'create_trigger_product_update'); //, $array);
//        $s = "s";
//        return ['great'];//$img->response('png');
//    });


//  list triggers
//    Route::get('test', function()
//    {
//        $shop = Auth::user();
//        $webhooks = $shop->api()->rest('GET', '/admin/api/2020-07/webhooks.json');
//        $s = "s";
//
//        return ['wonderful'];
//    });
//
//
//
//    delete the trigger
    Route::get('test', function()
    {
        $shop = Auth::user();
        //        POST /admin/api/2020-07/products/632910392/images.json
//            {
//                "image": {
//                "src": "http://example.com/rails_logo.gif"
//              }
//            }

//        $replacement_image = array('image' => array('src' => 'https://dixieoutfitterscom-3qieegk5u.stackpathdns.com/wp-content/uploads/2017/02/dixieoutfitters-since1861.jpg'));
        $replacement_image = array('image' => array('src' => 'https://dixieoutfitterscom-3qieegk5u.stackpathdns.com/wp-content/uploads/2017/02/dixieoutfitters-since1861.jpg'));
        $s = "s";
//        $product_id = $this->data->id;
        $s = "s";
        $new_image = $shop->api()->rest('POST', '/admin/api/2020-07/products/' . 5829180948647 . '/images.json',$replacement_image ) ;
:x        $s = "s";
//        $webhooks_delete = $shop->api()->rest('DELETE', '/admin/api/2020-07/webhooks/933943214247.json');
//        $trigger_url_first_half = env('SHOPIFY_LOCALTUNNEL_URL', '');
//        $trigger_url_last_half = "/webhook/products-update";
//        $trigger_url = $trigger_url_first_half . $trigger_url_last_half;
//        $array = array('webhook' => array('topic' => 'products/update', 'address' => $trigger_url, 'format' => 'json'));
//        $shop->api()->rest('POST', '/admin/api/2020-07/webhooks.json', $array);
        $webhooks_list_after = $shop->api()->rest('GET', '/admin/api/2020-07/webhooks.json');
        $s = "s";
        return ['trigger deleted'];//$img->response('png');
    });
//
//
//
//
////    create the trigger
//    Route::get('create_trigger_product_create', function()
//    {
//        $shop = Auth::user();
//        $trigger_url = "https://stupid-snail-15.loca.lt/webhook/products-create";
//        $array = array('webhook' => array('topic' => 'products/create', 'address' => $trigger_url, 'format' => 'json'));
//        $shop->api()->rest('POST', '/admin/api/2020-07/webhooks.json', $array);
//        $s = "s";
//        return ['great'];//$img->response('png');
//    });
//
//
////    create the trigger
//    Route::get('create_trigger_product_update', function()
//    {
//        $shop = Auth::user();
//        $trigger_url = "https://stupid-snail-15.loca.lt/webhook/products-update";
//        $array = array('webhook' => array('topic' => 'products/update', 'address' => $trigger_url, 'format' => 'json'));
//        $shop->api()->rest('POST', '/admin/api/2020-07/webhooks.json', $array);
//        $s = "s";
//        return ['great'];//$img->response('png');
//    });



//    Create a new webhook subscription by specifying both an address and a topic
//    format
//    Use this parameter to select the data format for the payload. Valid values are json and xml.
//    (default: json)
//    Subscribe to order creation webhooks
//
//    POST /admin/api/2020-07/webhooks.json
//
//    {
//        "webhook": {
//        "topic": "orders/create",
//        "address": "https://whatever.hostname.com/",
//        "format": "json"
//      }
//    }
//    THIS ONE INSTALLS THE WEBHOOK TO /create_webhook_product_create
//    Route::post('create_webhook_product_create', function()
//    {
//
//        $shop = Auth::user();
//        $trigger_url = "https://8083d11b9023.ngrok.io/create_webhook_product_create";
//        $array = array('webhook' => array('topic' => 'orders/create', 'address' => $trigger_url, 'format' => 'json'));
//        $webhooks = $shop->api()->rest('POST', '/admin/api/2020-07/webhooks.json', $array);
//        $s = "s";
//        return ['great'];//$img->response('png');
//    });
//
//
//
//    //  change_title_two
//    Route::get('test2', function()
//    {
//        $shop = Auth::user();
//        $s = "s";
////        $id = $_GET['id']; //5782166798503
//        $id = 5782166798503;
//        $product_graph =
//            '
//
//            mutation {
//                              Product1: productUpdate(input: {
//                                            id: "gid://shopify/Product/5782166798503",
//                                            title: "PRODUCT 5"
//                                                              }) {
//                                                                    product {
//                                                                      id
//                                                                    }
//                              }
//
//                              Product2: productUpdate(input: {
//                                            id: "gid://shopify/Product/5829180948647",
//                                            title: "PRODUCT 6"
//                                                              }) {
//                                                                    product {
//                                                                      id
//                                                                    }
//                              }
//                    }';
//        $s = "s";
//        $products = $shop->api()->graph( $product_graph );
////        $img = Image::make('conservative.png')->resize(600, 600);
//        $s = "s";
//        return ['great'];//$img->response('png');
//    });
//
//



//    //  change_title_two
//    Route::get('test', function()
//    {
//        $shop = Auth::user();
//        $s = "s";
////        $id = $_GET['id']; //5782166798503
//        $id = 5782166798503;
//        $product_graph =
//            '
//
//            mutation {
//                              Product1: productUpdate(input: {
//                                            id: "gid://shopify/Product/5782166798503",
//                                            title: "PRODUCT 3"
//                                                              }) {
//                                                                    product {
//                                                                      id
//                                                                    }
//                              }
//
//                              Product2: productUpdate(input: {
//                                            id: "gid://shopify/Product/5829180948647",
//                                            title: "PRODUCT 4"
//                                                              }) {
//                                                                    product {
//                                                                      id
//                                                                    }
//                              }
//                    }';
//        $s = "s";
//        $products = $shop->api()->graph( $product_graph );
////        $img = Image::make('conservative.png')->resize(600, 600);
//        $s = "s";
//        return ['great'];//$img->response('png');
//    });



////  change_title  WORKS
//    Route::get('test', function()
//    {
//        $shop = Auth::user();
//        $s = "s";
////        $id = $_GET['id']; //5782166798503
//        $id = 5782166798503;
//        $product_graph =
//                    '    mutation {
//                            productUpdate(input: {id: "gid://shopify/Product/5782166798503", title: "Sweet new product - GraphQL Edition"} ) {
//                              product {
//                                id
//                              }
//                            }
//                          }';
//        $s = "s";
//        $products = $shop->api()->graph( $product_graph );
////        $img = Image::make('conservative.png')->resize(600, 600);
//        $s = "s";
//        return ['great'];//$img->response('png');
//    });


//
//
////  resize_one
//    Route::get('test', function()
//    {
//        $shop = Auth::user();
//
//        $s = "s";
//
////        $id = $_GET['id']; //5782166798503
//        $id = 5782166798503;
//
//        $product_graph =
//                    '  {
//                        product(id: "gid://shopify/Product/5782166798503") {
//                          title
//                          description
//                          onlineStoreUrl
//                        }
//                      }';
//
//        $s = "s";
//        $products = $shop->api()->graph( $product_graph );
//
//        $img = Image::make('conservative.png')->resize(600, 600);
//        $s = "s";
//
//        return ['great'];//$img->response('png');
//    });















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


