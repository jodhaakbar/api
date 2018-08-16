<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


use Illuminate\Http\Request;
use Storage;
use Response;

class DownloadSat extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'downloadsat';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Donwload File SAT';

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
        $this->info('Download Start');

        // $file = $request->get('file');
        // if(!$file) {
        //     return Response::json('please provide valid path', 400);
        // }
        $fileName = "coba";
        try {
          $ftp = Storage::createFtpDriver([
                         'host'     => '103.43.45.16',
                         'username' => 'fotigro2',
                         'password' => 'ymq_1I92',
                         'port'     => '21', // your ftp port
                         'timeout'  => '30', // timeout setting
           ]);

            $filecontent = $ftp->get("/custom404.html"); // read file content
            $store = Storage::put('custom.html', $filecontent);
            dd($store);

          } catch (\Exception $e) {

              \SiteHelpers::auditSat($e->getMessage());
              dd($e->getMessage());



          }

           // download file.
           // return Response::make($filecontent, '200', array(
           //      'Content-Type' => 'application/octet-stream',
           //      'Content-Disposition' => 'attachment; filename="'.$fileName.'"'
           //  ));
    }
}
