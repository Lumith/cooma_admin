<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentGatewaysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_gateways')->delete();
        
        \DB::table('payment_gateways')->insert(array (
            0 => 
            array (
                'created_at' => '2023-02-07 06:46:00',
                'id' => 1,
                'is_test' => 0,
                'live_value' => NULL,
                'status' => 1,
                'title' => 'Cash on Delivery',
                'type' => 'cash',
                'updated_at' => '2023-06-21 22:56:49',
                'value' => NULL,
            ),
            1 => 
            array (
                'created_at' => '2023-02-13 15:48:48',
                'id' => 2,
                'is_test' => 1,
                'live_value' => NULL,
                'status' => 1,
                'title' => 'Stripe Payment',
                'type' => 'stripe',
                'updated_at' => '2023-07-07 18:33:53',
                'value' => '{"stripe_url":"https:\\/\\/api.stripe.com\\/v1\\/payment_intents","stripe_key":"sk_test_CG2JhAIXvVWDeFUFqtUizO4N00zmvm7o8J","stripe_publickey":"pk_test_HtQwwWoE9b43mfy5km6ThSPN00xunQv8J9"}',
            ),
            2 => 
            array (
                'created_at' => '2023-02-13 15:49:18',
                'id' => 3,
                'is_test' => 1,
                'live_value' => NULL,
                'status' => 1,
                'title' => 'Razor Pay',
                'type' => 'razorPay',
                'updated_at' => '2023-07-08 11:46:25',
                'value' => '{"razor_url":"https:\\/\\/api.razorpay.com\\/v1\\/orders","razor_key":"rzp_test_CLw7tH3O3P5eQM","razor_secret":"QrVY94kUadOioIv2AXNA7JFu"}',
            ),
            3 => 
            array (
                'created_at' => '2023-02-13 15:49:48',
                'id' => 4,
                'is_test' => 1,
                'live_value' => NULL,
                'status' => 1,
                'title' => 'FlutterWave',
                'type' => 'flutterwave',
                'updated_at' => '2023-06-21 22:57:40',
                'value' => '{"flutterwave_public":"FLWPUBK_TEST-0e16d1deea10a74762ea18fd0bf5be1c-X","flutterwave_secret":"FLWSECK_TEST-76e58fc4d85dd2c3fc01ea7ef5b9e2bb-X","flutterwave_encryption":"FLWSECK_TEST78be9f954079"}',
            ),
            4 => 
            array (
                'created_at' => '2023-02-13 15:50:08',
                'id' => 5,
                'is_test' => 1,
                'live_value' => NULL,
                'status' => 0,
                'title' => 'Paypal',
                'type' => 'paypal',
                'updated_at' => '2023-06-15 05:14:18',
                'value' => '{"paypal_url":"EJy8VnsnJmMk82v7yQ7brcFS6kbBykFwhSIsxAM7eUQCuxJpGtCmli2ret3_3u32CxM0sIRuBIf-CDQp"}',
            ),
        ));
        
        
    }
}