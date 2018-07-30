@extends('layouts.app')


@section('content')
<div class="page-content row">
<div class="page-content-wrapper m-t">

<?php
  $current_date = date('d/m/Y -- H:i:s');

  $total_submission = \DB::table('tb_submission')
                     ->select(DB::raw('count(id) as total'))
                     ->first();

 $total_user = \DB::table('tb_users')
                    ->select(DB::raw('count(id) as total'))
                    ->first();

  $total_idm = \DB::table('tb_users')
                     ->select(DB::raw('count(id) as total'))
                     ->where('no_mypoin','>','0')
                     ->first();

 $total_sat = \DB::table('tb_users')
                    ->select(DB::raw('count(id) as total'))
                    ->where('no_ponta','>','0')
                    ->first();
  //dd();


 ?>
<div class="sbox" style="border-top: none">
    <div class="sbox-title"> <h3>DASHBOARD NESCAFE KICKSTART 2018 </h3></div>
    <div class="sbox-content">
    <div class="ribon-sximo">
        <section >

                <div class="row m-l-none m-r-none m-t  white-bg shortcut " >
                    <div class="col-sm-3  p-sm ribon-grey3">
                        <span class="pull-left m-r-sm "><i class="fa icon-snapchat-square"></i></span>
                        <a href="#"  class="clear">
                            <span class="h3 block m-t-xs"><strong> {{ $total_submission->total }}     </strong>
                            </span> <small >   Submission </small>
                        </a>
                    </div>
                    <div class="col-sm-3 p-sm ribon-grey2">
                        <span class="pull-left m-r-sm "><i class="fa icon-user4"></i></span>
                        <a href="javascript:void(0)" class="clear " onclick="$('.unziped').toggle()">
                            <span class="h3 block m-t-xs"><strong> {{ $total_user->total }}  </strong>
                            </span> <small > Registered User </small>
                        </a>
                    </div>
                    <div class="col-sm-3   p-sm ribon-grey3">
                        <span class="pull-left m-r-sm "><i class="fa icon-github2 "></i></span>
                        <a >
                            <span class="h3 block m-t-xs"><strong> {{ $total_idm->total }}  </strong>
                            </span> <small > Registered IDM </small>
                        </a>
                    </div>

                    <div class="col-sm-3   p-sm ribon-grey3">
                        <span class="pull-left m-r-sm "><i class="fa icon-coffee2 "></i></span>
                        <a >
                            <span class="h3 block m-t-xs"><strong>  {{ $total_sat->total }} </strong>
                            </span> <small > Registered SAT  </small>
                        </a>
                    </div>

                </div>

        </section>
    </div>


<div class="row">
<div class="sbox-title"> <h3>PERINGKAT VOTING  [ {{ $current_date }} ] </h3></div>
  <div class="table-responsive">
              <table  class="table">
                  <thead>
                  <tr>
                      <th>PERINGKAT</th>
                      <th>NAMA</th>
                      <th>JUMLAH VOTING</th>
                      <th>PROSENTASE</th>

                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>1</td>
                      <td>VETWAYS</td>
                      <td>1000</td>
                      <td>100%</td>

                  </tr>
                  </tbody>
              </table>
          </div>





        </div>

    </div>
</div>
</div>



</div>
</div>

<script type="text/javascript" src="{{ asset('sximo5/js/plugins/jquery.sparkline.min.js') }}"></script>
    <script>
        $(document).ready(function() {

            var sparklineCharts = function(){
                $("#sparkline1").sparkline([34, 43, 43, 35, 44, 32, 44, 52], {
                    type: 'line',
                    width: '100%',
                    height: '50',
                    lineColor: '#1ab394',
                    fillColor: "transparent"
                });

                $("#sparkline2").sparkline([32, 11, 25, 37, 41, 32, 34, 42], {
                    type: 'line',
                    width: '100%',
                    height: '50',
                    lineColor: '#1ab394',
                    fillColor: "transparent"
                });

                $("#sparkline3").sparkline([34, 22, 24, 41, 10, 18, 16,8], {
                    type: 'line',
                    width: '100%',
                    height: '50',
                    lineColor: '#1C84C6',
                    fillColor: "transparent"
                });
            };

            var sparkResize;

            $(window).resize(function(e) {
                clearTimeout(sparkResize);
                sparkResize = setTimeout(sparklineCharts, 500);
            });

            sparklineCharts();

       })
    </script>

@stop
