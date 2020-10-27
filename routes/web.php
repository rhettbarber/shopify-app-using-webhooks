<?php

use App\Setting;
use App\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
GET /admin/api/2020-07/products/{product_id}/images.json
Receive a list of all Product Images
GET /admin/api/2020-07/products/{product_id}/images/count.json
Receive a count of all Product Images
GET /admin/api/2020-07/products/{product_id}/images/{image_id}.json
Receive a single Product Image
POST /admin/api/2020-07/products/{product_id}/images.json
Create a new Product Image
PUT /admin/api/2020-07/products/{product_id}/images/{image_id}.json
Modify an existing Product Image
DELETE /admin/api/2020-07/products/{product_id}/images/{image_id}.json
Remove an existing Product Image
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

//{
//    "product": {
//    "title": "Burton Custom Freestyle 151",
//    "body_html": "<strong>Good snowboard!</strong>",
//    "vendor": "Burton",
//    "product_type": "Snowboard",
//    "variants": [
//      {
//          "option1": "First",
//        "price": "10.00",
//        "sku": "123",
//	"inventory_management": "shopify",
//	"inventory_quantity": 15
//      },
//      {
//          "option1": "Second",
//        "price": "20.00",
//        "sku": "123",
//	"inventory_management": "shopify",
//	"inventory_quantity": 5
//      }
//    ]
//  }
//}


Route::middleware(['auth.shopify'])->group(function () {


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
//        $replacement_image = array('image' => array('src' => 'https://dixieoutfitterscom-3qieegk5u.stackpathdns.com/wp-content/uploads/2017/02/dixieoutfitters-since1861.jpg'));
        $s = "s";
//        $product_id = $this->data->id;
        $s = "s";
//        $new_image = $shop->api()->rest('POST', '/admin/api/2020-07/products/' . 5829180948647 . '/images.json',$replacement_image ) ;
        $s = "s";
        $webhooks_delete = $shop->api()->rest('DELETE', '/admin/api/2020-07/webhooks/933944131751.json');
//        $trigger_url_first_half = env('SHOPIFY_LOCALTUNNEL_URL', '');
//        $trigger_url_last_half = "/webhook/products-update";
//        $trigger_url = $trigger_url_first_half . $trigger_url_last_half;
//        $array = array('webhook' => array('topic' => 'products/update', 'address' => $trigger_url, 'format' => 'json'));
//        $shop->api()->rest('POST', '/admin/api/2020-07/webhooks.json', $array);
        $webhooks_list_after = $shop->api()->rest('GET', '/admin/api/2020-07/webhooks.json');
        $s = "s";
        return ['trigger deleted'];//$img->response('png');
    });



//    this has working image replacement
    Route::get('test_image_replacement_parts', function()
    {
        $shop = Auth::user();
        //        POST /admin/api/2020-07/products/632910392/images.json
//            {
//                "image": {
//                "src": "http://example.com/rails_logo.gif"
//              }
//            }

        $replacement_image = array('image' => array('src' => 'https://dixieoutfitterscom-3qieegk5u.stackpathdns.com/wp-content/uploads/2017/02/dixieoutfitters-since1861.jpg'));
        $s = "s";
//        $product_id = $this->data->id;
        $s = "s";
        $new_image = $shop->api()->rest('POST', '/admin/api/2020-07/products/' . 5829180948647 . '/images.json',$replacement_image ) ;


//        GET /admin/api/2020-07/products/{product_id}/images.json
        $new_image = $shop->api()->rest('POST', '/admin/api/2020-07/products/' . 5829180948647 . '/images.json',$replacement_image ) ;
        $new_image = $shop->api()->rest('POST', '/admin/api/2020-07/products/{product_id}/images.json' . 5829180948647 . '/images.json',$replacement_image ) ;
        $s = "s";
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

//    {
//        "productId": "Z2lkOi8vU2hvcGlmeS9FeGFtcGxlLzE=",
//      "image": {}
//    }
//    mutation productImageUpdate($productId: ID!, $image: ImageInput!) {
//        productImageUpdate(productId: $productId, image: $image) {
//            image {
//                id
//    }
//    userErrors {
//                field
//      message
//    }
//  }
//}
    Route::get('product_update', function()
    {
        $shop = Auth::user();
        $id = $_GET['id'];

//        $product_id = $this->data->id;
//        $replacement_image = array('image' => array('src' => 'https://dixieoutfitterscom-3qieegk5u.stackpathdns.com/wp-content/uploads/2017/02/dixieoutfitters-since1861.jpg'));
////        $product_id = $this->data->id;
//        $s = "s";
//        $product_images_get = $shop->api()->rest('GET', '/admin/api/2020-07/products/' . 5829180948647 . '/images.json' ) ;

        $product_images_get = $shop->api()->rest('GET', '/admin/api/2020-07/products/' . $id . '/images.json' ) ;
        $product_images = $product_images_get["body"]->container["images"];
        foreach($product_images as $product_image){
                //            updateImage
                //        Create a new product image with a metafield
                //        POST /admin/api/2020-07/products/632910392/images.json
                //        {
                //            "image": {
                //            "position": 1,
                //            "metafields": [
                //              {
                //                  "key": "new",
                //                "value": "newvalue",
                //                "value_type": "string",
                //                "namespace": "global"
                //              }
                //            ],
                //            "attachment": "R0lGODlhbgCMAPf/APbr48VySrxTO7IgKt2qmKQdJeK8lsFjROG5p/nz7Zg3\nMNmnd7Q1MLNVS9GId71hSJMZIuzTu4UtKbeEeakhKMl8U8WYjfr18YQaIbAf\nKKwhKdKzqpQtLebFortOOejKrOjZ1Mt7aMNpVbAqLLV7bsNqR+3WwMqEWenN\nsZYxL/Ddy/Pm2e7ZxLlUQrIjNPXp3bU5MbhENbEtLtqhj5ZQTfHh0bMxL7Ip\nNsNyUYkZIrZJPcqGdYIUHb5aPKkeJnoUHd2yiJkiLKYiKLRFOsyJXKVDO8up\nosFaS+TBnK4kKti5sNaYg/z49aqYl5kqLrljUtORfMOlo/36+H4ZH8yDYq0f\nKKFYTaU9MrY8MrZBNXwXHpgaIdGVYu/byLZNP9SaZLIyOuXCtHkpJst+Wpcm\nLMyCa8BfP9GMb9KQdPDd1PPk1sd5VP79/L5dQZ0bI9+ymqssK9WcfIoXHdzG\nxdWWfteib79lSr1YP86MYurQxKdcUKdMQr5ZSfPs6YEZH8uhl4oWIenMuurQ\nttmejaqoqsqBVaAcJLlJN5kvMLlZRMNsSL5fRak0LbdQQMVvSPjw6cJnRpkf\nKtmjhvfu5cJtT7IuOMVvWLY/M/37+o0YH9ibhtSYdObErc6HarM9NnYSGNGR\navLi09unje3WyeO8rsVrT7tdRtK3uffu6NWeaL9pTJIjJrM4NPbx8cdyX7M7\nPYYVHu7j4KgoNJAYIKtkV5o9MsOcldicis+RYNutfrhFOZ0hJbqinZ8bI8h5\nUObFuOfItJsfJrJfUOfIqc+PXqQtK8RnSbA4Mcd3Tm0SGbpXQ8aqp7RLNs+s\novHfzpVhV9iggMd1TLtbRKUdKXEQFsd4XrZRPLIgMZUeJ+jKvrAlK6AhJ65A\nMpMpKuC3j5obIsRwS7hAN8l/YtvDvnYXHbAoLI47SIUsOMenorF4gO/m4+fH\npo4vLZ8oKMukqp0cJbhVSMV2UuPR0bAfMLIrLrg/OcJwT8h+Vt+wn8eurLlh\nQrIfKHQOHHQOHf///////yH5BAEAAP8ALAAAAABuAIwAAAj/AP8JHDhQXjpz\n/PopXNiPn0OHDRMmbKhQIsOJFS1SxAhxI8SHFzVeDBnx48iNBAeeOkcxokeX\nFRdOnAlSokaaLXNujJkxo8iYHRkKtWkzZSsaOXkAWsoUECynsHgoqEW1qtVa\n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\nGg4lOnRGDKRZsoS7pMPSA6YXNWLsKJLkSZOVwKhMGSTTrJf9ZNKcomXKTrQY\nevr02cSIvKJxi6aJkaVuXaZMs1ziO5UqPawnuXK9AWEW2Jhja9pMuzMd27YW\nLNga10fuZYUPkdZdqpTv575YbJQbkCHw1sEpb9wQMstwWLFkbfppjJPc/wTI\nhHhJ5r0BBGbMRzfb7ez5MwwbpTMsx5pa9eob2CBM5yETpmzGtTE8hrybN29b\nc1oBn6trc9K7nhmUy6BcOUrn0KHLcr0FQvWYMxdnb3w7t/fvwFMiFvKG0uw8\n4kRLYjkGG0RtMPlWc+GGdyCwbwtYrOsHu7K0a+K/AEO04K0CF8InBvPOg2GE\nKpZTrsHSUotwwgnnmW4LHGGBKbb9bMqhsSly082CW0QMkDLLSvQHFQFiOESX\nLGzQpkUY22swA8Lko9EFLqfBEcdvMhRrwx610OLHtJ5Rc01ahHnCzTeFkXNO\nOfWQkwQ6NNFzTz2X0GQJQAMVdJEYsBhBAyrbK/9tgBcbrCTCG7bkkstvvvwm\nzPzI7JEcNLXDCYICQhXVkAIMMdWQd0x1Y9VdiuHGA1hjhfWQQzyg9dZDYmBg\nyioSVfRKFwfYZ8ZIJ3XhGhe83OLSSwEZU78ea+pUO2wK8MFaUUMl9dReDOll\n1VXbuYIZWWOl1dZDLpGhV3YZXLTR9vZhUMJijUX2mmveYRZcQDLlsCZOp21s\nCx+uLTjbbE/11ttv3diFkSHKRReGcthtN1hgrdxH2Awk5fJefK+ZZ9lvVvXW\n2cT+ZSwHgdHCpmCYDb4WYVNL7baXbsN9FdYYbKDA4otddBdYeffZx9iPjw35\nmmlKNtnUfmXSNNqAW9b/6eWYY8YWYW0V7tYQhxWAwwege61y6OXkbdDoSUFe\nWuR3wP3akKhjUtlHlqklG+YqsjaY620VNgQDMcQQouwrX3zR6KKFZfttyKtw\n+utQnRUL2mjLYjnvtLDpu9e9/ZYZ8FK3maLwwn8OmlF3lWNc7df3gfzteaZZ\n+NTKx5y6RxJ69/333mvBwHOLQ/fhiR2SV34HS47hmnAafJ9gh3AaDMcB7LE/\nIoPY441dhOzDz94VN3DPNmoeM5drAyfK7lWH34baYetVCidBIT6C5UMhB4r2\nn3FheSANRVGCwhBmObtlbgqXyYYNyuYFAMQFCtPwQf3spxAraGBRR+Af91wX\n/zsPoCIuCCAV13yAMsWo7zIOaJHFSHEZHZABdWK4X0JoIAENLIeDCXFA2rgX\nuwG8MC6kKGGoZuaDTEhtd/vBTBoyYLYqeAEzFpihGCagEBqIQQJVGMAOEdLD\n2L0uHJdBAMIOhsTELHExwLnS/i6zAQlIQItWxKIccejGL/4wjPvw4kHSQApA\nBhKQUDCiEWE2C93dTSEW2EMjaWABhbgnA3g8SAj4cElK+kMJWoyjBK6YECtw\nUgKZ7N8ejdZHfzjgGgNY5SpnZsisJXFHikwICTLBskzUECFtxJ/FFKKETmrx\nkwixQiclYAX+mfKUCpnBEZzpzHpkS2Yxm0ViMNcjhf+QABs5uKUuD9KoTOaP\nQb80picxaExk8lCZfIxLNuBhrWnurZpjoiVCbAkBbnrTH2pbTjgZVAVyGnOY\nBylmJ9P5xXWOUS6WEB3ZqgmTazLxMk40WntQub3lbIOc7OjkQP1RUI4e9CCl\nfJ3jjCbEogDAE6KrAiKlVs+4gJF7GUDlDLLnUWCyg6Ps8GgxdyrSVK5zH/WI\noARjZjFEQhSmRCEFg9SGSqIoQadT7alOJcAOoJJUmeFA6VBIETqk+ssPKizK\nDorxwx9CdShSvapOqzpVoO7ApMocgAdcIb74HeSroEOqEn8w1mgVRR0KyEEw\nKqoctTZEquzggFsVooepskP/DwqZAAfmakpGvc4HXSXF54CWVLthALASRYhB\nFpmDd4QxsQxRQmNd61HITnWyCVHC9MTnCsY9U7dH4AM8spGQvVrsiRB4Fg/8\ncFxsJmQDHvUHLQyhWsy01rXs2MFj2ZGC6862KKRgHGY6K9zlEPdyP8AJcteo\n3ClsQCHq0AF0QdkN+HbjlxygL31hO13tMrW7lwkB0BiUoR3x4EfmrYlCNjAF\nCRAoIWmwQexQqQcyxHe+9eXAfVOQAg7k16v7jQsAHGi2Bv0gUzyQQ05Ga+Cy\n0MBEDsZgN8gQ4QnXt7oJ0QOGOZACDTeEu0aTCwC80EKhDcAHMDGHWATMsuMC\nFsVl/9GnP0Jg0kw24MUv/qUTOGDlCj8WETfGsVx2vI+UzsATIFZUaTIRk3QY\n+ZYlFq0Ce5QJHBXgdU+MRCSwEYlVBCHPQZhyn7vhhD9fWdAc2DKhKXxhRCc6\n0Yi4LOPcl6hGVUFqc4gJLGaxufKO1s2VkrOj63znOkciCKMedZ+n7ARUp1rQ\niLAyIlyNYURcONaInrWs9ci4JyJOaFYawDzP8Q+ZwAICLckbgd08i290eh9V\nCIadQw3qO5Oa1H1GNRlSjeorO2HLruZ2rLudAm+Dm9Gxcx/GXmSIMbnjH5W2\nzy2RbOzM+cENBRAWs0N9b3zXWdp8pra1r61tbXdb4N/2Nv8i5gzeIJd5Gjui\nwT+AzQ9YVGrYnNO0Agm27GBkvNnNzje+921qf/+b1QEfuMDFPe5lk/lspUG3\nWKbQCofLBBBuwNEs3C3aikcrB2TTeM81HgmOd3zf/PZ3yFPNaqSXfODF0EDK\nE9e6liZmCvJwOLD7AQhU2efSbG6zm7VgiG1ofBc+//nGgZ7vbYw67aVux4v/\nfXSSK53by/HVrzIwDZTBBANUrzpMeAAIWASeB4P/AQ9+cHjEJx7xWgDE5nLQ\neMdHXvKbg/zkMZ23H/1oFRjYPOc9v3nQ58Aw0xn9LACvO7HQAOZVf/jl0ii1\nHcXe9bPX3euftaPL5R71tIf97nsy7/o0WlP2r4/JOU7B+r5nqva7jz1EdZ97\n4qNe+bonfvCfVXvly1762beOOdLBd+Q7PCAAOw==\n",
                //            "filename": "rails_logo.gif"
                //          }
                //        }

                //        POST /admin/api/2020-07/products/632910392/images.json
                //            {
                //                "image": {
                //                "src": "http://example.com/rails_logo.gif"
                //              }
                //            }

//                $replacement_image = array('image' => array('src' => 'https://dixieoutfitterscom-3qieegk5u.stackpathdns.com/wp-content/uploads/2017/02/dixieoutfitters-since1861.jpg'));
//                $new_image = $shop->api()->rest('POST', '/admin/api/2020-07/products/' . 5829180948647 . '/images.json',$replacement_image ) ;
//
//                $replacement_image_id = $product_image['product_id'];
//                $replacement_image = array('image' => array('src' => 'https://dixieoutfitterscom-3qieegk5u.stackpathdns.com/wp-content/uploads/2017/02/dixieoutfitters-since1861.jpg'));
//                $replacement_image = array('image' => array('src' => 'https://dixieoutfitterscom-3qieegk5u.stackpathdns.com/wp-content/uploads/2017/02/dixieoutfitters-since1861.jpg'));

                $search_string = $product_image['src'];
                $extension_to_find = '.jpg';
                if (strpos($search_string, $extension_to_find) !== false) {
                    $replacement_image = array('image' => array('src' => str_replace('.jpg', '_425x_crop_center.jpg', $product_image['src'])));
                } else {
                    $replacement_image = array('image' => array('src' => str_replace('.png', '_425x_crop_center.png', $product_image['src'])));
                }

                $rest_string  = '/admin/api/2020-07/products/' . $id . '/images.json';
                $s = "s";
                $new_image = $shop->api()->rest('POST', $rest_string, $replacement_image ) ;
            $s = "s";
//              DELETE /admin/api/2020-07/products/{product_id}/images/{image_id}.json
                $deleted_image = $shop->api()->rest('DELETE', '/admin/api/2020-07/products/' . $product_image['product_id'] . '/images/' .  $product_image['id'] . '.json' ) ;




//                $transformed_src_url =  'transformedSrc(maxWidth: 500, crop: CENTER)';



//                $replacement_image = 'https://dixieoutfitterscom-3qieegk5u.stackpathdns.com/wp-content/uploads/2017/02/dixieoutfitters-since1861.jpg';
//
//                $transformed_src_url =  $replacement_image;
//
//                $product_update_mutation_string = '
//                    mutation productImageUpdate($productId: ' . $id . ', $image: ' . $transformed_src_url . ') {
//                        productImageUpdate(productId: ' . $id . ', image: transformedSrc(maxWidth: 200, crop: CENTER)) {
//                            image {
//                                id
//                    }
//                    userErrors {
//                                field
//                      message
//                    }
//                  }';
//
//                $product_update_mutation_execution = $shop->api()->graph( $product_update_mutation_string );


            $s = "s";



        }





        // get products by collection handle (title) and get images for the product transforming them to 600px wide
//        $collection_products_with_600px_wide_images = '{
//                                collectionByHandle(handle: "abortion") {
//                                products(first: 50) {
//                                    edges {
//                                        node {
//                                            id
//                              tags
//                              images(first: 5) {
//                                                edges {
//                                                    node {
//                                                        altText
//                                    originalSrc
//                                    bigImage: transformedSrc(maxWidth: 500, crop: CENTER)
//                                  }
//                                }
//                              }
//                            }
//                          }
//                        }
//                      }
//                    }';
//        $products = $shop->api()->graph( $collection_products_with_600px_wide_images );
        $s = "s";

//
//
////        get product images with url
////        modify image with size funciton max.
//
//
//        $product_update_one_graph =
//                    '    mutation {
//                            productUpdate(input: {id: "gid://shopify/Product/' . $id .  '", title: "Too Sweet! new product - GraphQL Edition"} ) {
//                              product {
//                                id
//                              }
//                            }
//                          }';
//        $s = "s";
//        $products = $shop->api()->graph( $product_update_one_graph );

//        $valid = $api->verifyRequest($_GET);
//        $valid = $api->verifyRequest($_GET);
//        $valid = $api->verifyRequest($_GET);
//        $valid = $api->verifyRequest($_GET);



//        $product_update_multiple_graph =
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
//        $products = $shop->api()->graph( $product_update_multiple_graph );



        $s = "s";
//        return ['trigger deleted'];//$img->response('png');
        return back();
    });



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
//    this has working image replacement
//    this has working image replacement
//    this has working image replacement
//    this has working image replacement
//    this has working image replacement
//    this has working image replacement
//    this has working image replacement
    Route::get('test_image_replacement', function()
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
        $s = "s";
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




//What you can do with Product Image
//The Shopify API lets you do the following with the Product Image resource. More detailed versions of these general actions may be available:
//
//GET /admin/api/2020-07/products/{product_id}/images.json
//Receive a list of all Product Images
//GET /admin/api/2020-07/products/{product_id}/images/count.json
//Receive a count of all Product Images
//GET /admin/api/2020-07/products/{product_id}/images/{image_id}.json
//Receive a single Product Image
//POST /admin/api/2020-07/products/{product_id}/images.json
//Create a new Product Image
//PUT /admin/api/2020-07/products/{product_id}/images/{image_id}.json
//Modify an existing Product Image
//DELETE /admin/api/2020-07/products/{product_id}/images/{image_id}.json
//Remove an existing Product Image
//Product Image properties
//created_at
//"created_at": "2012-03-13T16:09:58-04:00"
//The date and time when the product image was created. The API returns this value in ISO 8601 format.
//
//id
//"id": 850703190
//A unique numeric identifier for the product image.
//
//position
//"position": 1
//The order of the product image in the list. The first product image is at position 1 and is the "main" image for the product.
//
//product_id
//                                                                                                                 "product_id": 632910392
//The id of the product associated with the image.
//
//    variant_ids
//"variant_ids": [
//        808950810
//    ]
//An array of variant ids associated with the image.
//
//    src
//"src": "http://static.shopify.com/products/ipod-nano.png"
//Specifies the location of the product image. This parameter supports URL filters that you can use to retrieve modified copies of the image. For example, add _small, to the filename to retrieve a scaled copy of the image at 100 x 100 px (for example, ipod-nano_small.png), or add _2048x2048 to retrieve a copy of the image constrained at 2048 x 2048 px resolution (for example, ipod-nano_2048x2048.png).
//
//width
//"width": 640
//Width dimension of the image which is determined on upload.
//
//    height
//"height": 480
//Height dimension of the image which is determined on upload.
//
//    updated_at
//"updated_at": "2012-03-13T16:09:58-04:00"
//The date and time when the product image was last modified. The API returns this value in ISO 8601 format.
//
//    Endpoints
//GET
///admin/api/2020-07/products/{product_id}/images.json
//Get all product images
//since_id
//Restrict results to after the specified ID
//
//fields
//comma-separated list of fields to include in the response
//
//Get all product images for a product
//                           GET /admin/api/2020-07/products/632910392/images.json
//    View Response
//Get all product images for a product after a specified ID
//GET /admin/api/2020-07/products/632910392/images.json?since_id=850703190
//    View Response
//GET
///admin/api/2020-07/products/{product_id}/images/count.json
//Get a count of all product images
//since_id
//Restrict results to after the specified ID
//
//Get a count all product images
//GET /admin/api/2020-07/products/632910392/images/count.json
//View Response
//Get a count of all product images after a specified ID
//GET /admin/api/2020-07/products/632910392/images/count.json?since_id=850703190
//    View Response
//GET
///admin/api/2020-07/products/{product_id}/images/{image_id}.json
//Get a single product image by id
//fields
//comma-separated list of fields to include in the response
//
//Show product image
//GET /admin/api/2020-07/products/632910392/images/850703190.json
//View Response
//POST
///admin/api/2020-07/products/{product_id}/images.json
//Create a new product image
//Create a new product image with included image data as attachment
//POST /admin/api/2020-07/products/632910392/images.json
//{
//    "image": {
//    "attachment": "R0lGODlhbgCMAPf/APbr48VySrxTO7IgKt2qmKQdJeK8lsFjROG5p/nz7Zg3\nMNmnd7Q1MLNVS9GId71hSJMZIuzTu4UtKbeEeakhKMl8U8WYjfr18YQaIbAf\nKKwhKdKzqpQtLebFortOOejKrOjZ1Mt7aMNpVbAqLLV7bsNqR+3WwMqEWenN\nsZYxL/Ddy/Pm2e7ZxLlUQrIjNPXp3bU5MbhENbEtLtqhj5ZQTfHh0bMxL7Ip\nNsNyUYkZIrZJPcqGdYIUHb5aPKkeJnoUHd2yiJkiLKYiKLRFOsyJXKVDO8up\nosFaS+TBnK4kKti5sNaYg/z49aqYl5kqLrljUtORfMOlo/36+H4ZH8yDYq0f\nKKFYTaU9MrY8MrZBNXwXHpgaIdGVYu/byLZNP9SaZLIyOuXCtHkpJst+Wpcm\nLMyCa8BfP9GMb9KQdPDd1PPk1sd5VP79/L5dQZ0bI9+ymqssK9WcfIoXHdzG\nxdWWfteib79lSr1YP86MYurQxKdcUKdMQr5ZSfPs6YEZH8uhl4oWIenMuurQ\nttmejaqoqsqBVaAcJLlJN5kvMLlZRMNsSL5fRak0LbdQQMVvSPjw6cJnRpkf\nKtmjhvfu5cJtT7IuOMVvWLY/M/37+o0YH9ibhtSYdObErc6HarM9NnYSGNGR\navLi09unje3WyeO8rsVrT7tdRtK3uffu6NWeaL9pTJIjJrM4NPbx8cdyX7M7\nPYYVHu7j4KgoNJAYIKtkV5o9MsOcldicis+RYNutfrhFOZ0hJbqinZ8bI8h5\nUObFuOfItJsfJrJfUOfIqc+PXqQtK8RnSbA4Mcd3Tm0SGbpXQ8aqp7RLNs+s\novHfzpVhV9iggMd1TLtbRKUdKXEQFsd4XrZRPLIgMZUeJ+jKvrAlK6AhJ65A\nMpMpKuC3j5obIsRwS7hAN8l/YtvDvnYXHbAoLI47SIUsOMenorF4gO/m4+fH\npo4vLZ8oKMukqp0cJbhVSMV2UuPR0bAfMLIrLrg/OcJwT8h+Vt+wn8eurLlh\nQrIfKHQOHHQOHf///////yH5BAEAAP8ALAAAAABuAIwAAAj/AP8JHDhQXjpz\n/PopXNiPn0OHDRMmbKhQIsOJFS1SxAhxI8SHFzVeDBnx48iNBAeeOkcxokeX\nFRdOnAlSokaaLXNujJkxo8iYHRkKtWkzZSsaOXkAWsoUECynsHgoqEW1qtVa\n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\nGg4lOnRGDKRZsoS7pMPSA6YXNWLsKJLkSZOVwKhMGSTTrJf9ZNKcomXKTrQY\nevr02cSIvKJxi6aJkaVuXaZMs1ziO5UqPawnuXK9AWEW2Jhja9pMuzMd27YW\nLNga10fuZYUPkdZdqpTv575YbJQbkCHw1sEpb9wQMstwWLFkbfppjJPc/wTI\nhHhJ5r0BBGbMRzfb7ez5MwwbpTMsx5pa9eob2CBM5yETpmzGtTE8hrybN29b\nc1oBn6trc9K7nhmUy6BcOUrn0KHLcr0FQvWYMxdnb3w7t/fvwFMiFvKG0uw8\n4kRLYjkGG0RtMPlWc+GGdyCwbwtYrOsHu7K0a+K/AEO04K0CF8InBvPOg2GE\nKpZTrsHSUotwwgnnmW4LHGGBKbb9bMqhsSly082CW0QMkDLLSvQHFQFiOESX\nLGzQpkUY22swA8Lko9EFLqfBEcdvMhRrwx610OLHtJ5Rc01ahHnCzTeFkXNO\nOfWQkwQ6NNFzTz2X0GQJQAMVdJEYsBhBAyrbK/9tgBcbrCTCG7bkkstvvvwm\nzPzI7JEcNLXDCYICQhXVkAIMMdWQd0x1Y9VdiuHGA1hjhfWQQzyg9dZDYmBg\nyioSVfRKFwfYZ8ZIJ3XhGhe83OLSSwEZU78ea+pUO2wK8MFaUUMl9dReDOll\n1VXbuYIZWWOl1dZDLpGhV3YZXLTR9vZhUMJijUX2mmveYRZcQDLlsCZOp21s\nCx+uLTjbbE/11ttv3diFkSHKRReGcthtN1hgrdxH2Awk5fJefK+ZZ9lvVvXW\n2cT+ZSwHgdHCpmCYDb4WYVNL7baXbsN9FdYYbKDA4otddBdYeffZx9iPjw35\nmmlKNtnUfmXSNNqAW9b/6eWYY8YWYW0V7tYQhxWAwwege61y6OXkbdDoSUFe\nWuR3wP3akKhjUtlHlqklG+YqsjaY620VNgQDMcQQouwrX3zR6KKFZfttyKtw\n+utQnRUL2mjLYjnvtLDpu9e9/ZYZ8FK3maLwwn8OmlF3lWNc7df3gfzteaZZ\n+NTKx5y6RxJ69/333mvBwHOLQ/fhiR2SV34HS47hmnAafJ9gh3AaDMcB7LE/\nIoPY441dhOzDz94VN3DPNmoeM5drAyfK7lWH34baYetVCidBIT6C5UMhB4r2\nn3FheSANRVGCwhBmObtlbgqXyYYNyuYFAMQFCtPwQf3spxAraGBRR+Af91wX\n/zsPoCIuCCAV13yAMsWo7zIOaJHFSHEZHZABdWK4X0JoIAENLIeDCXFA2rgX\nuwG8MC6kKGGoZuaDTEhtd/vBTBoyYLYqeAEzFpihGCagEBqIQQJVGMAOEdLD\n2L0uHJdBAMIOhsTELHExwLnS/i6zAQlIQItWxKIccejGL/4wjPvw4kHSQApA\nBhKQUDCiEWE2C93dTSEW2EMjaWABhbgnA3g8SAj4cElK+kMJWoyjBK6YECtw\nUgKZ7N8ejdZHfzjgGgNY5SpnZsisJXFHikwICTLBskzUECFtxJ/FFKKETmrx\nkwixQiclYAX+mfKUCpnBEZzpzHpkS2Yxm0ViMNcjhf+QABs5uKUuD9KoTOaP\nQb80picxaExk8lCZfIxLNuBhrWnurZpjoiVCbAkBbnrTH2pbTjgZVAVyGnOY\nBylmJ9P5xXWOUS6WEB3ZqgmTazLxMk40WntQub3lbIOc7OjkQP1RUI4e9CCl\nfJ3jjCbEogDAE6KrAiKlVs+4gJF7GUDlDLLnUWCyg6Ps8GgxdyrSVK5zH/WI\noARjZjFEQhSmRCEFg9SGSqIoQadT7alOJcAOoJJUmeFA6VBIETqk+ssPKizK\nDorxwx9CdShSvapOqzpVoO7ApMocgAdcIb74HeSroEOqEn8w1mgVRR0KyEEw\nKqoctTZEquzggFsVooepskP/DwqZAAfmakpGvc4HXSXF54CWVLthALASRYhB\nFpmDd4QxsQxRQmNd61HITnWyCVHC9MTnCsY9U7dH4AM8spGQvVrsiRB4Fg/8\ncFxsJmQDHvUHLQyhWsy01rXs2MFj2ZGC6862KKRgHGY6K9zlEPdyP8AJcteo\n3ClsQCHq0AF0QdkN+HbjlxygL31hO13tMrW7lwkB0BiUoR3x4EfmrYlCNjAF\nCRAoIWmwQexQqQcyxHe+9eXAfVOQAg7k16v7jQsAHGi2Bv0gUzyQQ05Ga+Cy\n0MBEDsZgN8gQ4QnXt7oJ0QOGOZACDTeEu0aTCwC80EKhDcAHMDGHWATMsuMC\nFsVl/9GnP0Jg0kw24MUv/qUTOGDlCj8WETfGsVx2vI+UzsATIFZUaTIRk3QY\n+ZYlFq0Ce5QJHBXgdU+MRCSwEYlVBCHPQZhyn7vhhD9fWdAc2DKhKXxhRCc6\n0Yi4LOPcl6hGVUFqc4gJLGaxufKO1s2VkrOj63znOkciCKMedZ+n7ARUp1rQ\niLAyIlyNYURcONaInrWs9ci4JyJOaFYawDzP8Q+ZwAICLckbgd08i290eh9V\nCIadQw3qO5Oa1H1GNRlSjeorO2HLruZ2rLudAm+Dm9Gxcx/GXmSIMbnjH5W2\nzy2RbOzM+cENBRAWs0N9b3zXWdp8pra1r61tbXdb4N/2Nv8i5gzeIJd5Gjui\nwT+AzQ9YVGrYnNO0Agm27GBkvNnNzje+921qf/+b1QEfuMDFPe5lk/lspUG3\nWKbQCofLBBBuwNEs3C3aikcrB2TTeM81HgmOd3zf/PZ3yFPNaqSXfODF0EDK\nE9e6liZmCvJwOLD7AQhU2efSbG6zm7VgiG1ofBc+//nGgZ7vbYw67aVux4v/\nfXSSK53by/HVrzIwDZTBBANUrzpMeAAIWASeB4P/AQ9+cHjEJx7xWgDE5nLQ\neMdHXvKbg/zkMZ23H/1oFRjYPOc9v3nQ58Aw0xn9LACvO7HQAOZVf/jl0ii1\nHcXe9bPX3euftaPL5R71tIf97nsy7/o0WlP2r4/JOU7B+r5nqva7jz1EdZ97\n4qNe+bonfvCfVXvly1762beOOdLBd+Q7PCAAOw==\n",
//    "filename": "rails_logo.gif"
//  }
//}
//View Response
//Create a new product image using a source URL that will be downloaded by Shopify
//POST /admin/api/2020-07/products/632910392/images.json
//{
//    "image": {
//    "src": "http://example.com/rails_logo.gif"
//  }
//}
//View Response
//Create a new product image and make it the main image
//POST /admin/api/2020-07/products/632910392/images.json
//{
//    "image": {
//    "position": 1,
//    "attachment": "R0lGODlhbgCMAPf/APbr48VySrxTO7IgKt2qmKQdJeK8lsFjROG5p/nz7Zg3\nMNmnd7Q1MLNVS9GId71hSJMZIuzTu4UtKbeEeakhKMl8U8WYjfr18YQaIbAf\nKKwhKdKzqpQtLebFortOOejKrOjZ1Mt7aMNpVbAqLLV7bsNqR+3WwMqEWenN\nsZYxL/Ddy/Pm2e7ZxLlUQrIjNPXp3bU5MbhENbEtLtqhj5ZQTfHh0bMxL7Ip\nNsNyUYkZIrZJPcqGdYIUHb5aPKkeJnoUHd2yiJkiLKYiKLRFOsyJXKVDO8up\nosFaS+TBnK4kKti5sNaYg/z49aqYl5kqLrljUtORfMOlo/36+H4ZH8yDYq0f\nKKFYTaU9MrY8MrZBNXwXHpgaIdGVYu/byLZNP9SaZLIyOuXCtHkpJst+Wpcm\nLMyCa8BfP9GMb9KQdPDd1PPk1sd5VP79/L5dQZ0bI9+ymqssK9WcfIoXHdzG\nxdWWfteib79lSr1YP86MYurQxKdcUKdMQr5ZSfPs6YEZH8uhl4oWIenMuurQ\nttmejaqoqsqBVaAcJLlJN5kvMLlZRMNsSL5fRak0LbdQQMVvSPjw6cJnRpkf\nKtmjhvfu5cJtT7IuOMVvWLY/M/37+o0YH9ibhtSYdObErc6HarM9NnYSGNGR\navLi09unje3WyeO8rsVrT7tdRtK3uffu6NWeaL9pTJIjJrM4NPbx8cdyX7M7\nPYYVHu7j4KgoNJAYIKtkV5o9MsOcldicis+RYNutfrhFOZ0hJbqinZ8bI8h5\nUObFuOfItJsfJrJfUOfIqc+PXqQtK8RnSbA4Mcd3Tm0SGbpXQ8aqp7RLNs+s\novHfzpVhV9iggMd1TLtbRKUdKXEQFsd4XrZRPLIgMZUeJ+jKvrAlK6AhJ65A\nMpMpKuC3j5obIsRwS7hAN8l/YtvDvnYXHbAoLI47SIUsOMenorF4gO/m4+fH\npo4vLZ8oKMukqp0cJbhVSMV2UuPR0bAfMLIrLrg/OcJwT8h+Vt+wn8eurLlh\nQrIfKHQOHHQOHf///////yH5BAEAAP8ALAAAAABuAIwAAAj/AP8JHDhQXjpz\n/PopXNiPn0OHDRMmbKhQIsOJFS1SxAhxI8SHFzVeDBnx48iNBAeeOkcxokeX\nFRdOnAlSokaaLXNujJkxo8iYHRkKtWkzZSsaOXkAWsoUECynsHgoqEW1qtVa\n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\nGg4lOnRGDKRZsoS7pMPSA6YXNWLsKJLkSZOVwKhMGSTTrJf9ZNKcomXKTrQY\nevr02cSIvKJxi6aJkaVuXaZMs1ziO5UqPawnuXK9AWEW2Jhja9pMuzMd27YW\nLNga10fuZYUPkdZdqpTv575YbJQbkCHw1sEpb9wQMstwWLFkbfppjJPc/wTI\nhHhJ5r0BBGbMRzfb7ez5MwwbpTMsx5pa9eob2CBM5yETpmzGtTE8hrybN29b\nc1oBn6trc9K7nhmUy6BcOUrn0KHLcr0FQvWYMxdnb3w7t/fvwFMiFvKG0uw8\n4kRLYjkGG0RtMPlWc+GGdyCwbwtYrOsHu7K0a+K/AEO04K0CF8InBvPOg2GE\nKpZTrsHSUotwwgnnmW4LHGGBKbb9bMqhsSly082CW0QMkDLLSvQHFQFiOESX\nLGzQpkUY22swA8Lko9EFLqfBEcdvMhRrwx610OLHtJ5Rc01ahHnCzTeFkXNO\nOfWQkwQ6NNFzTz2X0GQJQAMVdJEYsBhBAyrbK/9tgBcbrCTCG7bkkstvvvwm\nzPzI7JEcNLXDCYICQhXVkAIMMdWQd0x1Y9VdiuHGA1hjhfWQQzyg9dZDYmBg\nyioSVfRKFwfYZ8ZIJ3XhGhe83OLSSwEZU78ea+pUO2wK8MFaUUMl9dReDOll\n1VXbuYIZWWOl1dZDLpGhV3YZXLTR9vZhUMJijUX2mmveYRZcQDLlsCZOp21s\nCx+uLTjbbE/11ttv3diFkSHKRReGcthtN1hgrdxH2Awk5fJefK+ZZ9lvVvXW\n2cT+ZSwHgdHCpmCYDb4WYVNL7baXbsN9FdYYbKDA4otddBdYeffZx9iPjw35\nmmlKNtnUfmXSNNqAW9b/6eWYY8YWYW0V7tYQhxWAwwege61y6OXkbdDoSUFe\nWuR3wP3akKhjUtlHlqklG+YqsjaY620VNgQDMcQQouwrX3zR6KKFZfttyKtw\n+utQnRUL2mjLYjnvtLDpu9e9/ZYZ8FK3maLwwn8OmlF3lWNc7df3gfzteaZZ\n+NTKx5y6RxJ69/333mvBwHOLQ/fhiR2SV34HS47hmnAafJ9gh3AaDMcB7LE/\nIoPY441dhOzDz94VN3DPNmoeM5drAyfK7lWH34baYetVCidBIT6C5UMhB4r2\nn3FheSANRVGCwhBmObtlbgqXyYYNyuYFAMQFCtPwQf3spxAraGBRR+Af91wX\n/zsPoCIuCCAV13yAMsWo7zIOaJHFSHEZHZABdWK4X0JoIAENLIeDCXFA2rgX\nuwG8MC6kKGGoZuaDTEhtd/vBTBoyYLYqeAEzFpihGCagEBqIQQJVGMAOEdLD\n2L0uHJdBAMIOhsTELHExwLnS/i6zAQlIQItWxKIccejGL/4wjPvw4kHSQApA\nBhKQUDCiEWE2C93dTSEW2EMjaWABhbgnA3g8SAj4cElK+kMJWoyjBK6YECtw\nUgKZ7N8ejdZHfzjgGgNY5SpnZsisJXFHikwICTLBskzUECFtxJ/FFKKETmrx\nkwixQiclYAX+mfKUCpnBEZzpzHpkS2Yxm0ViMNcjhf+QABs5uKUuD9KoTOaP\nQb80picxaExk8lCZfIxLNuBhrWnurZpjoiVCbAkBbnrTH2pbTjgZVAVyGnOY\nBylmJ9P5xXWOUS6WEB3ZqgmTazLxMk40WntQub3lbIOc7OjkQP1RUI4e9CCl\nfJ3jjCbEogDAE6KrAiKlVs+4gJF7GUDlDLLnUWCyg6Ps8GgxdyrSVK5zH/WI\noARjZjFEQhSmRCEFg9SGSqIoQadT7alOJcAOoJJUmeFA6VBIETqk+ssPKizK\nDorxwx9CdShSvapOqzpVoO7ApMocgAdcIb74HeSroEOqEn8w1mgVRR0KyEEw\nKqoctTZEquzggFsVooepskP/DwqZAAfmakpGvc4HXSXF54CWVLthALASRYhB\nFpmDd4QxsQxRQmNd61HITnWyCVHC9MTnCsY9U7dH4AM8spGQvVrsiRB4Fg/8\ncFxsJmQDHvUHLQyhWsy01rXs2MFj2ZGC6862KKRgHGY6K9zlEPdyP8AJcteo\n3ClsQCHq0AF0QdkN+HbjlxygL31hO13tMrW7lwkB0BiUoR3x4EfmrYlCNjAF\nCRAoIWmwQexQqQcyxHe+9eXAfVOQAg7k16v7jQsAHGi2Bv0gUzyQQ05Ga+Cy\n0MBEDsZgN8gQ4QnXt7oJ0QOGOZACDTeEu0aTCwC80EKhDcAHMDGHWATMsuMC\nFsVl/9GnP0Jg0kw24MUv/qUTOGDlCj8WETfGsVx2vI+UzsATIFZUaTIRk3QY\n+ZYlFq0Ce5QJHBXgdU+MRCSwEYlVBCHPQZhyn7vhhD9fWdAc2DKhKXxhRCc6\n0Yi4LOPcl6hGVUFqc4gJLGaxufKO1s2VkrOj63znOkciCKMedZ+n7ARUp1rQ\niLAyIlyNYURcONaInrWs9ci4JyJOaFYawDzP8Q+ZwAICLckbgd08i290eh9V\nCIadQw3qO5Oa1H1GNRlSjeorO2HLruZ2rLudAm+Dm9Gxcx/GXmSIMbnjH5W2\nzy2RbOzM+cENBRAWs0N9b3zXWdp8pra1r61tbXdb4N/2Nv8i5gzeIJd5Gjui\nwT+AzQ9YVGrYnNO0Agm27GBkvNnNzje+921qf/+b1QEfuMDFPe5lk/lspUG3\nWKbQCofLBBBuwNEs3C3aikcrB2TTeM81HgmOd3zf/PZ3yFPNaqSXfODF0EDK\nE9e6liZmCvJwOLD7AQhU2efSbG6zm7VgiG1ofBc+//nGgZ7vbYw67aVux4v/\nfXSSK53by/HVrzIwDZTBBANUrzpMeAAIWASeB4P/AQ9+cHjEJx7xWgDE5nLQ\neMdHXvKbg/zkMZ23H/1oFRjYPOc9v3nQ58Aw0xn9LACvO7HQAOZVf/jl0ii1\nHcXe9bPX3euftaPL5R71tIf97nsy7/o0WlP2r4/JOU7B+r5nqva7jz1EdZ97\n4qNe+bonfvCfVXvly1762beOOdLBd+Q7PCAAOw==\n",
//    "filename": "rails_logo.gif"
//  }
//}
//View Response
//Create a new product image and attach it to product variants
//POST /admin/api/2020-07/products/632910392/images.json
//{
//    "image": {
//    "variant_ids": [
//        808950810,
//        457924702
//    ],
//    "attachment": "R0lGODlhbgCMAPf/APbr48VySrxTO7IgKt2qmKQdJeK8lsFjROG5p/nz7Zg3\nMNmnd7Q1MLNVS9GId71hSJMZIuzTu4UtKbeEeakhKMl8U8WYjfr18YQaIbAf\nKKwhKdKzqpQtLebFortOOejKrOjZ1Mt7aMNpVbAqLLV7bsNqR+3WwMqEWenN\nsZYxL/Ddy/Pm2e7ZxLlUQrIjNPXp3bU5MbhENbEtLtqhj5ZQTfHh0bMxL7Ip\nNsNyUYkZIrZJPcqGdYIUHb5aPKkeJnoUHd2yiJkiLKYiKLRFOsyJXKVDO8up\nosFaS+TBnK4kKti5sNaYg/z49aqYl5kqLrljUtORfMOlo/36+H4ZH8yDYq0f\nKKFYTaU9MrY8MrZBNXwXHpgaIdGVYu/byLZNP9SaZLIyOuXCtHkpJst+Wpcm\nLMyCa8BfP9GMb9KQdPDd1PPk1sd5VP79/L5dQZ0bI9+ymqssK9WcfIoXHdzG\nxdWWfteib79lSr1YP86MYurQxKdcUKdMQr5ZSfPs6YEZH8uhl4oWIenMuurQ\nttmejaqoqsqBVaAcJLlJN5kvMLlZRMNsSL5fRak0LbdQQMVvSPjw6cJnRpkf\nKtmjhvfu5cJtT7IuOMVvWLY/M/37+o0YH9ibhtSYdObErc6HarM9NnYSGNGR\navLi09unje3WyeO8rsVrT7tdRtK3uffu6NWeaL9pTJIjJrM4NPbx8cdyX7M7\nPYYVHu7j4KgoNJAYIKtkV5o9MsOcldicis+RYNutfrhFOZ0hJbqinZ8bI8h5\nUObFuOfItJsfJrJfUOfIqc+PXqQtK8RnSbA4Mcd3Tm0SGbpXQ8aqp7RLNs+s\novHfzpVhV9iggMd1TLtbRKUdKXEQFsd4XrZRPLIgMZUeJ+jKvrAlK6AhJ65A\nMpMpKuC3j5obIsRwS7hAN8l/YtvDvnYXHbAoLI47SIUsOMenorF4gO/m4+fH\npo4vLZ8oKMukqp0cJbhVSMV2UuPR0bAfMLIrLrg/OcJwT8h+Vt+wn8eurLlh\nQrIfKHQOHHQOHf///////yH5BAEAAP8ALAAAAABuAIwAAAj/AP8JHDhQXjpz\n/PopXNiPn0OHDRMmbKhQIsOJFS1SxAhxI8SHFzVeDBnx48iNBAeeOkcxokeX\nFRdOnAlSokaaLXNujJkxo8iYHRkKtWkzZSsaOXkAWsoUECynsHgoqEW1qtVa\n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\nGg4lOnRGDKRZsoS7pMPSA6YXNWLsKJLkSZOVwKhMGSTTrJf9ZNKcomXKTrQY\nevr02cSIvKJxi6aJkaVuXaZMs1ziO5UqPawnuXK9AWEW2Jhja9pMuzMd27YW\nLNga10fuZYUPkdZdqpTv575YbJQbkCHw1sEpb9wQMstwWLFkbfppjJPc/wTI\nhHhJ5r0BBGbMRzfb7ez5MwwbpTMsx5pa9eob2CBM5yETpmzGtTE8hrybN29b\nc1oBn6trc9K7nhmUy6BcOUrn0KHLcr0FQvWYMxdnb3w7t/fvwFMiFvKG0uw8\n4kRLYjkGG0RtMPlWc+GGdyCwbwtYrOsHu7K0a+K/AEO04K0CF8InBvPOg2GE\nKpZTrsHSUotwwgnnmW4LHGGBKbb9bMqhsSly082CW0QMkDLLSvQHFQFiOESX\nLGzQpkUY22swA8Lko9EFLqfBEcdvMhRrwx610OLHtJ5Rc01ahHnCzTeFkXNO\nOfWQkwQ6NNFzTz2X0GQJQAMVdJEYsBhBAyrbK/9tgBcbrCTCG7bkkstvvvwm\nzPzI7JEcNLXDCYICQhXVkAIMMdWQd0x1Y9VdiuHGA1hjhfWQQzyg9dZDYmBg\nyioSVfRKFwfYZ8ZIJ3XhGhe83OLSSwEZU78ea+pUO2wK8MFaUUMl9dReDOll\n1VXbuYIZWWOl1dZDLpGhV3YZXLTR9vZhUMJijUX2mmveYRZcQDLlsCZOp21s\nCx+uLTjbbE/11ttv3diFkSHKRReGcthtN1hgrdxH2Awk5fJefK+ZZ9lvVvXW\n2cT+ZSwHgdHCpmCYDb4WYVNL7baXbsN9FdYYbKDA4otddBdYeffZx9iPjw35\nmmlKNtnUfmXSNNqAW9b/6eWYY8YWYW0V7tYQhxWAwwege61y6OXkbdDoSUFe\nWuR3wP3akKhjUtlHlqklG+YqsjaY620VNgQDMcQQouwrX3zR6KKFZfttyKtw\n+utQnRUL2mjLYjnvtLDpu9e9/ZYZ8FK3maLwwn8OmlF3lWNc7df3gfzteaZZ\n+NTKx5y6RxJ69/333mvBwHOLQ/fhiR2SV34HS47hmnAafJ9gh3AaDMcB7LE/\nIoPY441dhOzDz94VN3DPNmoeM5drAyfK7lWH34baYetVCidBIT6C5UMhB4r2\nn3FheSANRVGCwhBmObtlbgqXyYYNyuYFAMQFCtPwQf3spxAraGBRR+Af91wX\n/zsPoCIuCCAV13yAMsWo7zIOaJHFSHEZHZABdWK4X0JoIAENLIeDCXFA2rgX\nuwG8MC6kKGGoZuaDTEhtd/vBTBoyYLYqeAEzFpihGCagEBqIQQJVGMAOEdLD\n2L0uHJdBAMIOhsTELHExwLnS/i6zAQlIQItWxKIccejGL/4wjPvw4kHSQApA\nBhKQUDCiEWE2C93dTSEW2EMjaWABhbgnA3g8SAj4cElK+kMJWoyjBK6YECtw\nUgKZ7N8ejdZHfzjgGgNY5SpnZsisJXFHikwICTLBskzUECFtxJ/FFKKETmrx\nkwixQiclYAX+mfKUCpnBEZzpzHpkS2Yxm0ViMNcjhf+QABs5uKUuD9KoTOaP\nQb80picxaExk8lCZfIxLNuBhrWnurZpjoiVCbAkBbnrTH2pbTjgZVAVyGnOY\nBylmJ9P5xXWOUS6WEB3ZqgmTazLxMk40WntQub3lbIOc7OjkQP1RUI4e9CCl\nfJ3jjCbEogDAE6KrAiKlVs+4gJF7GUDlDLLnUWCyg6Ps8GgxdyrSVK5zH/WI\noARjZjFEQhSmRCEFg9SGSqIoQadT7alOJcAOoJJUmeFA6VBIETqk+ssPKizK\nDorxwx9CdShSvapOqzpVoO7ApMocgAdcIb74HeSroEOqEn8w1mgVRR0KyEEw\nKqoctTZEquzggFsVooepskP/DwqZAAfmakpGvc4HXSXF54CWVLthALASRYhB\nFpmDd4QxsQxRQmNd61HITnWyCVHC9MTnCsY9U7dH4AM8spGQvVrsiRB4Fg/8\ncFxsJmQDHvUHLQyhWsy01rXs2MFj2ZGC6862KKRgHGY6K9zlEPdyP8AJcteo\n3ClsQCHq0AF0QdkN+HbjlxygL31hO13tMrW7lwkB0BiUoR3x4EfmrYlCNjAF\nCRAoIWmwQexQqQcyxHe+9eXAfVOQAg7k16v7jQsAHGi2Bv0gUzyQQ05Ga+Cy\n0MBEDsZgN8gQ4QnXt7oJ0QOGOZACDTeEu0aTCwC80EKhDcAHMDGHWATMsuMC\nFsVl/9GnP0Jg0kw24MUv/qUTOGDlCj8WETfGsVx2vI+UzsATIFZUaTIRk3QY\n+ZYlFq0Ce5QJHBXgdU+MRCSwEYlVBCHPQZhyn7vhhD9fWdAc2DKhKXxhRCc6\n0Yi4LOPcl6hGVUFqc4gJLGaxufKO1s2VkrOj63znOkciCKMedZ+n7ARUp1rQ\niLAyIlyNYURcONaInrWs9ci4JyJOaFYawDzP8Q+ZwAICLckbgd08i290eh9V\nCIadQw3qO5Oa1H1GNRlSjeorO2HLruZ2rLudAm+Dm9Gxcx/GXmSIMbnjH5W2\nzy2RbOzM+cENBRAWs0N9b3zXWdp8pra1r61tbXdb4N/2Nv8i5gzeIJd5Gjui\nwT+AzQ9YVGrYnNO0Agm27GBkvNnNzje+921qf/+b1QEfuMDFPe5lk/lspUG3\nWKbQCofLBBBuwNEs3C3aikcrB2TTeM81HgmOd3zf/PZ3yFPNaqSXfODF0EDK\nE9e6liZmCvJwOLD7AQhU2efSbG6zm7VgiG1ofBc+//nGgZ7vbYw67aVux4v/\nfXSSK53by/HVrzIwDZTBBANUrzpMeAAIWASeB4P/AQ9+cHjEJx7xWgDE5nLQ\neMdHXvKbg/zkMZ23H/1oFRjYPOc9v3nQ58Aw0xn9LACvO7HQAOZVf/jl0ii1\nHcXe9bPX3euftaPL5R71tIf97nsy7/o0WlP2r4/JOU7B+r5nqva7jz1EdZ97\n4qNe+bonfvCfVXvly1762beOOdLBd+Q7PCAAOw==\n",
//    "filename": "rails_logo.gif"
//  }
//}
//View Response
//Create a new product image with a metafield
//POST /admin/api/2020-07/products/632910392/images.json
//{
//    "image": {
//    "position": 1,
//    "metafields": [
//      {
//          "key": "new",
//        "value": "newvalue",
//        "value_type": "string",
//        "namespace": "global"
//      }
//    ],
//    "attachment": "R0lGODlhbgCMAPf/APbr48VySrxTO7IgKt2qmKQdJeK8lsFjROG5p/nz7Zg3\nMNmnd7Q1MLNVS9GId71hSJMZIuzTu4UtKbeEeakhKMl8U8WYjfr18YQaIbAf\nKKwhKdKzqpQtLebFortOOejKrOjZ1Mt7aMNpVbAqLLV7bsNqR+3WwMqEWenN\nsZYxL/Ddy/Pm2e7ZxLlUQrIjNPXp3bU5MbhENbEtLtqhj5ZQTfHh0bMxL7Ip\nNsNyUYkZIrZJPcqGdYIUHb5aPKkeJnoUHd2yiJkiLKYiKLRFOsyJXKVDO8up\nosFaS+TBnK4kKti5sNaYg/z49aqYl5kqLrljUtORfMOlo/36+H4ZH8yDYq0f\nKKFYTaU9MrY8MrZBNXwXHpgaIdGVYu/byLZNP9SaZLIyOuXCtHkpJst+Wpcm\nLMyCa8BfP9GMb9KQdPDd1PPk1sd5VP79/L5dQZ0bI9+ymqssK9WcfIoXHdzG\nxdWWfteib79lSr1YP86MYurQxKdcUKdMQr5ZSfPs6YEZH8uhl4oWIenMuurQ\nttmejaqoqsqBVaAcJLlJN5kvMLlZRMNsSL5fRak0LbdQQMVvSPjw6cJnRpkf\nKtmjhvfu5cJtT7IuOMVvWLY/M/37+o0YH9ibhtSYdObErc6HarM9NnYSGNGR\navLi09unje3WyeO8rsVrT7tdRtK3uffu6NWeaL9pTJIjJrM4NPbx8cdyX7M7\nPYYVHu7j4KgoNJAYIKtkV5o9MsOcldicis+RYNutfrhFOZ0hJbqinZ8bI8h5\nUObFuOfItJsfJrJfUOfIqc+PXqQtK8RnSbA4Mcd3Tm0SGbpXQ8aqp7RLNs+s\novHfzpVhV9iggMd1TLtbRKUdKXEQFsd4XrZRPLIgMZUeJ+jKvrAlK6AhJ65A\nMpMpKuC3j5obIsRwS7hAN8l/YtvDvnYXHbAoLI47SIUsOMenorF4gO/m4+fH\npo4vLZ8oKMukqp0cJbhVSMV2UuPR0bAfMLIrLrg/OcJwT8h+Vt+wn8eurLlh\nQrIfKHQOHHQOHf///////yH5BAEAAP8ALAAAAABuAIwAAAj/AP8JHDhQXjpz\n/PopXNiPn0OHDRMmbKhQIsOJFS1SxAhxI8SHFzVeDBnx48iNBAeeOkcxokeX\nFRdOnAlSokaaLXNujJkxo8iYHRkKtWkzZSsaOXkAWsoUECynsHgoqEW1qtVa\n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\nGg4lOnRGDKRZsoS7pMPSA6YXNWLsKJLkSZOVwKhMGSTTrJf9ZNKcomXKTrQY\nevr02cSIvKJxi6aJkaVuXaZMs1ziO5UqPawnuXK9AWEW2Jhja9pMuzMd27YW\nLNga10fuZYUPkdZdqpTv575YbJQbkCHw1sEpb9wQMstwWLFkbfppjJPc/wTI\nhHhJ5r0BBGbMRzfb7ez5MwwbpTMsx5pa9eob2CBM5yETpmzGtTE8hrybN29b\nc1oBn6trc9K7nhmUy6BcOUrn0KHLcr0FQvWYMxdnb3w7t/fvwFMiFvKG0uw8\n4kRLYjkGG0RtMPlWc+GGdyCwbwtYrOsHu7K0a+K/AEO04K0CF8InBvPOg2GE\nKpZTrsHSUotwwgnnmW4LHGGBKbb9bMqhsSly082CW0QMkDLLSvQHFQFiOESX\nLGzQpkUY22swA8Lko9EFLqfBEcdvMhRrwx610OLHtJ5Rc01ahHnCzTeFkXNO\nOfWQkwQ6NNFzTz2X0GQJQAMVdJEYsBhBAyrbK/9tgBcbrCTCG7bkkstvvvwm\nzPzI7JEcNLXDCYICQhXVkAIMMdWQd0x1Y9VdiuHGA1hjhfWQQzyg9dZDYmBg\nyioSVfRKFwfYZ8ZIJ3XhGhe83OLSSwEZU78ea+pUO2wK8MFaUUMl9dReDOll\n1VXbuYIZWWOl1dZDLpGhV3YZXLTR9vZhUMJijUX2mmveYRZcQDLlsCZOp21s\nCx+uLTjbbE/11ttv3diFkSHKRReGcthtN1hgrdxH2Awk5fJefK+ZZ9lvVvXW\n2cT+ZSwHgdHCpmCYDb4WYVNL7baXbsN9FdYYbKDA4otddBdYeffZx9iPjw35\nmmlKNtnUfmXSNNqAW9b/6eWYY8YWYW0V7tYQhxWAwwege61y6OXkbdDoSUFe\nWuR3wP3akKhjUtlHlqklG+YqsjaY620VNgQDMcQQouwrX3zR6KKFZfttyKtw\n+utQnRUL2mjLYjnvtLDpu9e9/ZYZ8FK3maLwwn8OmlF3lWNc7df3gfzteaZZ\n+NTKx5y6RxJ69/333mvBwHOLQ/fhiR2SV34HS47hmnAafJ9gh3AaDMcB7LE/\nIoPY441dhOzDz94VN3DPNmoeM5drAyfK7lWH34baYetVCidBIT6C5UMhB4r2\nn3FheSANRVGCwhBmObtlbgqXyYYNyuYFAMQFCtPwQf3spxAraGBRR+Af91wX\n/zsPoCIuCCAV13yAMsWo7zIOaJHFSHEZHZABdWK4X0JoIAENLIeDCXFA2rgX\nuwG8MC6kKGGoZuaDTEhtd/vBTBoyYLYqeAEzFpihGCagEBqIQQJVGMAOEdLD\n2L0uHJdBAMIOhsTELHExwLnS/i6zAQlIQItWxKIccejGL/4wjPvw4kHSQApA\nBhKQUDCiEWE2C93dTSEW2EMjaWABhbgnA3g8SAj4cElK+kMJWoyjBK6YECtw\nUgKZ7N8ejdZHfzjgGgNY5SpnZsisJXFHikwICTLBskzUECFtxJ/FFKKETmrx\nkwixQiclYAX+mfKUCpnBEZzpzHpkS2Yxm0ViMNcjhf+QABs5uKUuD9KoTOaP\nQb80picxaExk8lCZfIxLNuBhrWnurZpjoiVCbAkBbnrTH2pbTjgZVAVyGnOY\nBylmJ9P5xXWOUS6WEB3ZqgmTazLxMk40WntQub3lbIOc7OjkQP1RUI4e9CCl\nfJ3jjCbEogDAE6KrAiKlVs+4gJF7GUDlDLLnUWCyg6Ps8GgxdyrSVK5zH/WI\noARjZjFEQhSmRCEFg9SGSqIoQadT7alOJcAOoJJUmeFA6VBIETqk+ssPKizK\nDorxwx9CdShSvapOqzpVoO7ApMocgAdcIb74HeSroEOqEn8w1mgVRR0KyEEw\nKqoctTZEquzggFsVooepskP/DwqZAAfmakpGvc4HXSXF54CWVLthALASRYhB\nFpmDd4QxsQxRQmNd61HITnWyCVHC9MTnCsY9U7dH4AM8spGQvVrsiRB4Fg/8\ncFxsJmQDHvUHLQyhWsy01rXs2MFj2ZGC6862KKRgHGY6K9zlEPdyP8AJcteo\n3ClsQCHq0AF0QdkN+HbjlxygL31hO13tMrW7lwkB0BiUoR3x4EfmrYlCNjAF\nCRAoIWmwQexQqQcyxHe+9eXAfVOQAg7k16v7jQsAHGi2Bv0gUzyQQ05Ga+Cy\n0MBEDsZgN8gQ4QnXt7oJ0QOGOZACDTeEu0aTCwC80EKhDcAHMDGHWATMsuMC\nFsVl/9GnP0Jg0kw24MUv/qUTOGDlCj8WETfGsVx2vI+UzsATIFZUaTIRk3QY\n+ZYlFq0Ce5QJHBXgdU+MRCSwEYlVBCHPQZhyn7vhhD9fWdAc2DKhKXxhRCc6\n0Yi4LOPcl6hGVUFqc4gJLGaxufKO1s2VkrOj63znOkciCKMedZ+n7ARUp1rQ\niLAyIlyNYURcONaInrWs9ci4JyJOaFYawDzP8Q+ZwAICLckbgd08i290eh9V\nCIadQw3qO5Oa1H1GNRlSjeorO2HLruZ2rLudAm+Dm9Gxcx/GXmSIMbnjH5W2\nzy2RbOzM+cENBRAWs0N9b3zXWdp8pra1r61tbXdb4N/2Nv8i5gzeIJd5Gjui\nwT+AzQ9YVGrYnNO0Agm27GBkvNnNzje+921qf/+b1QEfuMDFPe5lk/lspUG3\nWKbQCofLBBBuwNEs3C3aikcrB2TTeM81HgmOd3zf/PZ3yFPNaqSXfODF0EDK\nE9e6liZmCvJwOLD7AQhU2efSbG6zm7VgiG1ofBc+//nGgZ7vbYw67aVux4v/\nfXSSK53by/HVrzIwDZTBBANUrzpMeAAIWASeB4P/AQ9+cHjEJx7xWgDE5nLQ\neMdHXvKbg/zkMZ23H/1oFRjYPOc9v3nQ58Aw0xn9LACvO7HQAOZVf/jl0ii1\nHcXe9bPX3euftaPL5R71tIf97nsy7/o0WlP2r4/JOU7B+r5nqva7jz1EdZ97\n4qNe+bonfvCfVXvly1762beOOdLBd+Q7PCAAOw==\n",
//    "filename": "rails_logo.gif"
//  }
//}
//View Response
//PUT
///admin/api/2020-07/products/{product_id}/images/{image_id}.json
//Modify an existing product image
//Modify an image; change its position and alt tag content
//PUT /admin/api/2020-07/products/632910392/images/850703190.json
//{
//    "image": {
//    "id": 850703190,
//    "position": 2,
//    "alt": "new alt tag content"
//  }
//}
//View Response
//Modify an image; add a metafield
//PUT /admin/api/2020-07/products/632910392/images/850703190.json
//{
//    "image": {
//    "id": 850703190,
//    "metafields": [
//      {
//          "key": "my_new_metafield",
//        "value": "my_new_value",
//        "value_type": "string",
//        "namespace": "tags"
//      }
//    ]
//  }
//}
//View Response
//Modify an image; add it to product variants
//PUT /admin/api/2020-07/products/632910392/images/850703190.json
//{
//    "image": {
//    "id": 850703190,
//    "variant_ids": [
//        808950810,
//        457924702
//    ]
//  }
//}
//View Response
//DELETE
///admin/api/2020-07/products/{product_id}/images/{image_id}.json
