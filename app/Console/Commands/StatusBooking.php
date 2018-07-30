<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class StatusBooking extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'statusbooking {kode}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show booking Details';

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
        $kodeBooking = $this->argument('kode');

        $this->info('Gojek Status Booking Start');
        $client = new Client(); //GuzzleHttp\Client
        //$response = $client->request('POST', 'https://integration-kilat-api.gojekapi.com/gojek/booking/v3/makeBooking');
         $response = $client->request('GET', 'https://integration-kilat-api.gojekapi.com:443/gojek/v2/booking/orderno/GK-'.$kodeBooking,[
             'headers' => [
                 'Accept'              => 'application/json',
                 'Accept-Language'     => 'id',
                 'Cache-Control'       => 'no-cache',
                 'Client-ID'           => 'nestle-engine',
                 'Content-type'        => 'application/json',
                 'Pass-Key'            => '5A57D14EBD8D9196046F3D7DC7EB4B5B4912DEA2B9756D7CF937624901EF1B81'
             ]
           ]);

     $this->comment('['.date('Y-m-d h:i:s').']'.$response->getBody());




    }
}
