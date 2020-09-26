<?php namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Osiset\ShopifyApp\Contracts\Objects\Values\ShopDomain;
use stdClass;

class ProductsUpdateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Shop's myshopify domain
     *
     * @var ShopDomain
     */
    public $shopDomain;

    /**
     * The webhook data
     *
     * @var object
     */
    public $data;

    /**
     * Create a new job instance.
     *
     * @param string   $shopDomain The shop's myshopify domain
     * @param stdClass $data    The webhook data (JSON decoded)
     *
     * @return void
     */
    public function __construct($shopDomain, $data)
    {
        $this->shopDomain = $shopDomain;
        $this->data = $data;
        $original_data_image_source = $data->image->src;

//        POST /admin/api/2020-07/products/632910392/images.json
//        $image_resource  => [['topic' => 'products/create'],
//        [
//            'topic' => 'products/update',
//            'address' => 'https://tasty-kangaroo-40.loca.lt/webhook/products-update'
//        ]
//    ],
//            {
//                "image": {
//                "src": "https://dixieoutfitterscom-3qieegk5u.stackpathdns.com/wp-content/uploads/2017/02/dixieoutfitters-since1861.jpg"
//              }
//            }

//        POST /admin/api/2020-07/products/632910392/images.json
//            {
//                "image": {
//                "src": "http://example.com/rails_logo.gif"
//              }
//            }


//        $s = "s";
//
//        // open an image file
////                $img = Image::make('public/foo.jpg');
//                $img = Image::make($data_image_source);
//        $s = "s";
//        // now you are able to resize the instance
//                $img->resize(100, 240);
//        $s = "s";
//        // and insert a watermark for example
//                $img->insert('public/watermark.png');
//
////         finally we save the image as a new file
//                $img->save('public/bar.jpg');
//
//        $s = "s";
//        $base64_encodeimage = $img;




//        POST /admin/api/2020-07/products/632910392/images.json
//            {
//                "image": {
//                "src": "http://example.com/rails_logo.gif"
//              }
//            }
//
//        POST /admin/api/2020-07/products/632910392/images.json
//            {
//                "image": {
//                "src": "http://example.com/rails_logo.gif"
//              }
//            }


//        https://dixieoutfitterscom-3qieegk5u.stackpathdns.com/wp-content/uploads/2017/02/dixieoutfitters-since1861.jpg


        $s = "s";
//        $updated_image = array( "image" => array( 'attachment' => base64_encodeimage, "filename" => $original_data_image_source ));
        $s = "s";

//        /admin/products/product_id/images.json



//            $trigger_url = "https://curly-fox-59.loca.lt/webhook/products-update";
//            $array = array('webhook' => array('topic' => 'products/update', 'address' => $trigger_url, 'format' => 'json'));
//            $shop->api()->rest('POST', '/admin/api/2020-07/products/{product_id}/images.json', $array);


//        $shop = Auth::user();
//        $current_webhook_id = 5782166798503;
        $s = "s";
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Do what you wish with the data
        // Access domain name as $this->shopDomain->toNative()


        $s = "s";


//            $shop = Auth::user();
//
//        $current_webhook_id = 5782166798503;

//            $webhooks_delete = $shop->api()->rest('DELETE', '/admin/api/2020-07/webhooks/933662654631.json');

//            $webhooks_list = $shop->api()->rest('GET', '/admin/api/2020-07/webhooks.json');

//            $trigger_url = "https://curly-fox-59.loca.lt/webhook/products-update";
//            $array = array('webhook' => array('topic' => 'products/update', 'address' => $trigger_url, 'format' => 'json'));
//            $shop->api()->rest('POST', '/admin/api/2020-07/webhooks.json', $array);


//            $webhooks_list_after = $shop->api()->rest('GET', '/admin/api/2020-07/webhooks.json');
            $s = "s";



            return ['ProductsUpdateJob'];//$img->response('png');


    }
}
