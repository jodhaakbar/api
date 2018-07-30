<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class MakeBooking extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'makebooking';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make Booking Gojek API';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {


        ## Get All tb_trx_booking status_pesanan_internal == 1
        $trx_booking_new = \DB::table('tb_trx_booking')
                                ->where('status_pesanan_internal', 1)
                                ->get();

        ## Looping semua dan make booking ke gojek
        foreach ($trx_booking_new as $key => $value) {

          $jsondata = '{
                         "paymentType": 3,
                         "deviceToken": "",
                         "collection_location":"pickup",
                         "shipment_method":"SameDay",
                         "routes":
                         [{
                             "originName": "'.$value->originName.'",
                             "originNote": "'.$value->originNote.'",
                             "originContactName": "'.$value->originContactName.'",
                             "originContactPhone": "'.$value->originContactPhone.'",
                             "originLatLong": "'.$value->originLatLong.'",
                             "originAddress": "'.$value->originAddress.'",
                             "destinationName": "'.$value->destinationName.'",
                             "destinationNote": "'.$value->destinationNote.'",
                             "destinationContactName": "'.$value->destinationContactName.'",
                             "destinationContactPhone": "'.$value->destinationContactPhone.'",
                             "destinationLatLong": "'.$value->destinationLatLong.'",
                             "destinationAddress": "'.$value->destinationAddress.'",
                             "item": "'.$value->item.'",
                             "storeOrderId":"'.$value->storeOrderId.'",
                             "insuranceDetails":
                              {
                                "applied": "false",
                                "fee": "0",
                                "product_description": "Barang",
                                "product_price": "1000"
                              }

                        }]
                      }';

                      ## START booking +++++++++++++++ +++++++++++ +++++++++++++++++++ +++++++++++
                       $this->info('Gojek Booking Start');
                       try {
                               $client = new Client(); //GuzzleHttp\Client
                               //$response = $client->request('POST', 'https://integration-kilat-api.gojekapi.com/gojek/booking/v3/makeBooking');
                                $response = $client->request('POST', 'https://integration-kilat-api.gojekapi.com/gojek/booking/v3/makeBooking',[
                                    'headers' => [
                                        'Accept'              => 'application/json',
                                        'Accept-Language'     => 'id',
                                        'Cache-Control'       => 'no-cache',
                                        'Client-ID'           => 'nestle-engine',
                                        'Content-type'        => 'application/json',
                                        'Pass-Key'            => '5A57D14EBD8D9196046F3D7DC7EB4B5B4912DEA2B9756D7CF937624901EF1B81'
                                    ],'json'    => json_decode($jsondata, true)
                                  ]);

                                  $this->info('['.date('Y-m-d h:i:s').']'.$response->getBody());

                                   \SiteHelpers::auditBooking( '1', serialize($jsondata) , $response->getStatusCode() ,$response->getBody());

                        } catch (\GuzzleHttp\Exception\ConnectException $e) {
                          ## d($e->getMessage());
                            \SiteHelpers::auditBooking('1', serialize($jsondata) ,'error' , $e->getMessage());
                             $this->error('['.date('Y-m-d h:i:s').']'.$e->getMessage());

                        } catch (\GuzzleHttp\Exception\ClientException $e) {
                            ## This will catch all 400 level errors.
                            \SiteHelpers::auditBooking('1', serialize($jsondata) , $e->getResponse()->getStatusCode() , $e->getResponse()->getBody());
                            $this->error('['.date('Y-m-d h:i:s').'] STATUS CODE : '.$e->getResponse()->getStatusCode().' '.$e->getResponse()->getBody() );

                        }
                        ## END booking +++++++++++++++ +++++++++++ +++++++++++++++++++ +++++++++++
                        sleep(15);
                        ## Delay 15 second between request.

        }


    }
}
