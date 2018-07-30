<!DOCTYPE html>
<html>
<head>
	<title>PENDAFTARAN - Koko Krunch</title>
  <meta charset="UTF-8">


	  <!-- Latest compiled and minified CSS -->
	    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/asset/bootstrap-less/css/bootstrap.min.css">

	    <!-- Optional theme -->
	    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/asset/bootstrap-less/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/default.css">
		<link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/themes/light/light.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	   	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<div class="container-fluid-full">
		<nav class="navbar navbar-default">
	      <div class="">
	        <div class="navbar-header">
	            <div class="logo hidden-xs">
	            	<a class="navbar-brand" href="#">
	                   <img src="{{ URL::to('/') }}/asset/images/web/logo-koko.png" style="width:150px;">
	                </a>
	            </div>
	            <div class="logo visible-xs">
	            	<a class="navbar-brand" href="#">
	                   <img src="{{ URL::to('/') }}/asset/images/web/logo-koko.png" style="width:80px;margin-top: -15px;">
	                </a>
	            </div>
	            <div class="visible-xs visible-sm visible-md">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	              </button>
	            </div>
	        </div> <!-- end of navbar-header -->

	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div class="collapse navbar-collapse navbar-custom" id="bs-navbar-collapse-1">
	          <ul class="nav navbar-nav">
							<ul class="nav navbar-nav">
							 <li><a href="{{ URL::to('/') }}" class="home">BERANDA</a></li>
							 <li><a href="{{ URL::to('/') }}/tentang/" >TENTANG</a></li>
							 <li><a href="{{ URL::to('/') }}/jadwallomba/" >JADWAL LOMBA</a></li>
							 <li><a href="{{ URL::to('/') }}/daftar/" class="active" >DAFTAR</a></li>
							 <li><a href="{{ URL::to('/') }}/galeri/">GALERI</a></li>
							 <li><a href="{{ URL::to('/') }}/video/">VIDEO</a></li>
						 </ul>
	          </ul>
	          <ul class="nav navbar-nav navbar-right nav-lbc visible-lg">
	          	<li>
	        		<img src="{{ URL::to('/') }}/asset/images/web/logo-nbc-new.png" class="img-responsive">
	        	</li>
	          </ul>
	        </div><!-- /.navbar-collapse -->
	      </div>
	    </nav>
	</div>
	<div class="breadcrumbs">
		<div class="col-md-1 col-xs-12">
			<h4>Daftar</h4>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="container-fluid-full">
	    <div class="body-content" id="register">

	    		<div class="col-xs-12 col-md-8 col-md-offset-2">
						<div class="row">
							@if(Session::has('status'))
								@if(session('status') =='success')
									<p class="alert alert-success">
									{!! Session::get('message') !!}
								</p>
							@else
								<p class="alert alert-danger">
									{!! Session::get('message') !!}
								</p>
							@endif
							@if ($errors->all())


								@foreach($errors->all() as $error)
									<p class="alert alert-danger">
									{{ $error }}
										</p>
								@endforeach

							@endif


						@endif
							<div class="col-xs-12 col-md-5 col-md-offset-5">
								<button data-toggle="modal" data-target="#daftarPeserta">LIHAT DATA PESERTA</button>
								<button>CETAK TIKET</button>
							</div>
						</div>
							{!! Form::open(array('id' => 'userdetail', 'url'=>'mpeserta', 'class'=>'form-horizontal validated','files' => true )) !!}
						<div class="row">
							<div class="col-xs-12">

								<label>FORMULIR PENDAFTARAN </label>
							</div>
						</div>
	    			<div class="row">
	    				<div class="col-xs-12 col-md-3">
	    					<label>Nama Anak</label>
	    				</div>
	    				<div class="col-xs-12 col-md-9">
	    					<div class="form-group">
	    						<input type="text" name="nama_anak" class="form-control" data-validation="required" >
	    					</div>
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="col-xs-12 col-md-3">
	    					<label>Jenis Kelamin</label>
	    				</div>
	    				<div class="col-xs-6 col-md-3">
	    					<div class="form-group">
	    						<label><input type="radio" name="jenis_kelamin" class="" value="1" checked> Laki-laki</label>
	    					</div>
	    				</div>
	    				<div class="col-xs-6 col-md-3">
	    					<div class="form-group">
	    						<label><input type="radio" name="jenis_kelamin" class="" value="0"> Perempuan</label>
	    					</div>
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="col-xs-12 col-md-3">
	    					<label>Tempat / Tanggal Lahir</label>
	    				</div>
	    				<div class="col-xs-12 col-md-3">
	    					<div class="form-group">
	    						<input data-validation="required" type="text" name="tempat_lahir" class="form-control" placeholder="Tempat">
	    					</div>
	    				</div>
	    				<div class="col-xs-12 col-md-3">
	    					<div class="form-group">
	    						<input data-validation="date" data-validation-format="yyyy/mm/dd" type="text" name="tanggal_lahir" class="form-control datepicker" placeholder="yyyy/mm/dd">
	    					</div>
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="col-xs-12 col-md-3">
	    					<label>Usia [TAHUN]</label>
	    				</div>
	    				<div class="col-xs-12 col-md-2">
	    					<div class="form-group">
	    						<input data-validation="number" data-validation-allowing="range[1;100]" type="text" name="usia" class="form-control">
	    					</div>
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="col-xs-12 col-md-3">
	    					<label>Alamat</label>
	    				</div>
	    				<div class="col-xs-12 col-md-9">
	    					<div class="form-group">
	    						<textarea data-validation="required" name="alamat" class="form-control"></textarea>
	    					</div>
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="col-xs-12 col-md-3">
	    					<label>Kota</label>
	    				</div>
	    				<div class="col-xs-12 col-md-9">
	    					<div class="form-group">
	    						<input data-validation="required" type="text" name="kota" class="form-control">
	    					</div>
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="col-xs-12 col-md-3">
	    					<label>Sekolah</label>
	    				</div>
	    				<div class="col-xs-12 col-md-4">
	    					<div class="form-group">
	    						<input data-validation="required" type="text" name="sekolah" class="form-control">
	    					</div>
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="col-xs-12 col-md-3">
	    					<label>Kelas</label>
	    				</div>
	    				<div class="col-xs-6 col-md-9">
	    					<div class="form-group">
	    						<label><input type="radio" name="kelas" class="" value="1" checked> 1 SD</label>&nbsp;&nbsp;&nbsp;&nbsp;
	    						<label><input type="radio" name="kelas" class="" value="2"> 2 SD</label>&nbsp;&nbsp;&nbsp;&nbsp;
	    						<label><input type="radio" name="kelas" class="" value="3"> 3 SD</label>&nbsp;&nbsp;&nbsp;&nbsp;
	    						<label><input type="radio" name="kelas" class="" value="4"> 4 SD</label>&nbsp;&nbsp;&nbsp;&nbsp;
	    						<label><input type="radio" name="kelas" class="" value="5"> 5 SD</label>&nbsp;&nbsp;&nbsp;&nbsp;
	    						<label><input type="radio" name="kelas" class="" value="6"> 6 SD</label>&nbsp;&nbsp;&nbsp;&nbsp;
	    					</div>
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="col-xs-12 col-md-3">
	    					<label>Email</label>
	    				</div>
	    				<div class="col-xs-12 col-md-9">
	    					<div class="form-group">
	    						<input data-validation="required email" type="text" name="email" class="form-control">
	    					</div>
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="col-xs-12 col-md-3">
	    					<label>Kategori</label>
	    				</div>
	    				<div class="col-xs-6 col-md-3">
	    					<div class="form-group">
	    						<label><input type="radio" name="kategori" class="" value="1" checked> Menggambar</label>
	    					</div>
	    				</div>
	    				<div class="col-xs-6 col-md-3">
	    					<div class="form-group">
	    						<label><input type="radio" name="kategori" class="" value="2"> Mewarnai</label>
	    					</div>
	    				</div>
	    			</div>
	    			<div style="margin: 20px 0 0 0;">
	    				<h4><strong>Syarat untuk mengikuti lomba:</strong></h4><br />
	    				<ul>
	    					<li>Pembelian Produk Koko Krunch Minimal Rp. 30.000,-</li>
	    					<li>Membawa Bukti struck pembelian pada saat pendaftaran ulang</li>
	    				</ul>
	    			</div>
	    			<div class="text-center">
	    				<button type="submit" style="background: none;border:none;">
							<img src="{{ URL::to('/') }}/asset/images/web/icon-submit.png" width="200px"/>
						</button>
	    			</div>
	    		</div>
	    		<div class="clearfix"></div>
					<input type="hidden" name="action_task" value="public" />
	      {!! Form::close() !!}
	    </div> <!-- end of body content -->
	</div>
<div class="container-fluid-full">
		<div class="footer">
	    	<div class="row hidden-xs">
	    		<div class="col-md-3">
	    			<img src="{{ URL::to('/') }}/asset/images/web/koko-olimpiade.png" class="img-responsive">
	    		</div>
	    		<div class="col-md-5">
	    			<div class="contact">
	    				<div style="width: 45px;float: left;padding: 10px 0 0 0">
	    					<img style="width:40px" src="{{ URL::to('/') }}/asset/images/web/icon-phone.png">
	    				</div>
	    				<div style="width: 130px;float: left">
	    					Nestl&eacute; Customer Service<br />
	    					0800018-21028<br />
	    					Senin - Minggu, <br />
	    					Jam 08.00 - 24.00
	    				</div>
	    				<div style="width: 45px;float: left;padding: 10px 0 0 0">
	    					<a href="http://sahabatnestle.co.id/contactus" title="Kontak Kami">
	    						<img style="width:40px" src="{{ URL::to('/') }}/asset/images/web/icon-mail.png">
	    					</a>
	    				</div>
	    				<div style="width: 70px;float: left;padding: 15px 0 0 0">
	    					<a href="http://sahabatnestle.co.id/contactus" title="Kontak Kami">
	    						Kontak Kami
	    					</a>
	    				</div>
	    				<div style="width: 45px;float: left;padding: 10px 0 0 0;">
	    					<a href="http://sahabatnestle.co.id/privacy" title="Privacy Policy">
	    						<img style="width:40px" src="{{ URL::to('/') }}/asset/images/web/icon-policy.png">
	    					</a>
	    				</div>
	    				<div style="width: 100px;float: left;padding: 15px 0 0 0;">
	    					<a href="http://sahabatnestle.co.id/privacy" title="Privacy Policy">
	    						Privacy Policy
	    					</a>
	    				</div>
	    			</div>
	    			<div class="clearfix"></div>
	    		</div>
	    		<div class="col-md-4 text-right">
	    			Nestl&eacute; Indonesia<br />
	    			&copy;Hak Cipta oleh PT Nestl&eacute; Indonesia dilindungi oleh undang-undang
	    			Tidak diperkenankan mengambil materi / isi website dan
	    			mempublikasikan dalam bentuk apapun tanpa izin tertulis dari
	    			PT Nestl&eacute; Indonesia. Saran, komentar, dan pelayanan
	    			mengenai website ditujukan ke sahabat.nestle@id.nestle.com atau kontak kami
	    		</div>
	    	</div>
	    	<div class="row visible-xs">
	    		<div class="col-xs-12" style="margin-bottom: 25px;">
	    			<img src="{{ URL::to('/') }}/asset/images/web/koko-olimpiade.png" class="img-responsive">
	    		</div>
	    		<div class="col-xs-12" style="margin-bottom: 25px;">
	    			<div class="col-xs-3">
	    					<img style="width:40px" src="{{ URL::to('/') }}/asset/images/web/icon-phone.png">
	    				</div>
	    				<div class="col-xs-9">
	    					Nestl&eacute; Customer Service<br />
	    					0800018-21028<br />
	    					Senin - Minggu, <br />
	    					Jam 08.00 - 24.00
	    				</div>
	    		</div>
	    		<div class="col-xs-12" style="margin-bottom: 25px;">
	    			<div class="contact">
	    				<div style="width: 30px;float: left;padding: 10px 0 0 0">
	    					<a href="https://www.sahabatnestle.co.id/contactus" title="Kontak Kami">
	    						<img style="width:25px" src="{{ URL::to('/') }}/asset/images/web/icon-mail.png">
	    					</a>
	    				</div>
	    				<div style="width: 70px;float: left;padding: 15px 0 0 0">
	    					<a href="https://www.sahabatnestle.co.id/contactus" title="Kontak Kami">
	    						Kontak Kami
	    					</a>
	    				</div>
	    				<div style="width: 45px;float: left;padding: 10px 0 0 0;">
                            <a href="https://www.sahabatnestle.co.id/privacy" title="Privacy Policy">
                                <img style="width:40px" src="{{ URL::to('/') }}/asset/images/web/icon-policy.png">
                            </a>
                        </div>
                        <div style="width: 75px;float: left;padding: 15px 0 0 0;">
                            <a href="https://www.sahabatnestle.co.id/privacy" title="Privacy Policy">
                                Privacy Policy
                            </a>
                        </div>
	    			</div>
	    			<div class="clearfix"></div>
	    		</div>
	    		<div class="col-md-4 text-right col-xs-12">
	    			Nestl&eacute; Indonesia<br />
	    			&copy;Hak Cipta oleh PT Nestl&eacute; Indonesia dilindungi oleh undang-undang
	    			Tidak diperkenankan mengambil materi / isi website dan
	    			mempublikasikan dalam bentuk apapun tanpa izin tertulis dari
	    			PT Nestl&eacute; Indonesia. Saran, komentar, dan pelayanan
	    			mengenai website ditujukan ke sahabat.nestle@id.nestle.com atau kontak kami
	    		</div>
	    	</div>
	    </div>
	</div>
	<!-- Modal -->
<div id="daftarPeserta" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Daftar Peserta</h4>
      </div>
      <div class="modal-body">
        <table class="table">
        	<thead>
        		<tr>
        			<th>No</th>
        			<th>Nama Anak</th>
        			<th>Jenis Kelamin</th>
        			<th>Tanggal Lahir</th>
        		</tr>
        	</thead>
        	<tbody>
						<?php $pos = 1 ?>
				@if(isset($data_peserta))

					@foreach ($data_peserta as $key => $node)
						<tr>
							<td>{{ $pos++ }}</td>
							<td>{{ $node->nama_anak }}</td>
							<td>{{ $node->jenis_kelamin }}</td>
							<td>{{ $node->tanggal_lahir }}</td>
						</tr>
							@endforeach
				@else
				<tr>
					<td>1</td>
					<td>BELUM ADA TERDAFTAR</td>
					<td></td>
					<td></td>
				</tr>
				@endif
        	</tbody>
        </table>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>
	<div class="floating-notice visible-xs text-center">
    	<a href="{{ URL::to('/') }}/daftar/"><h4><b><u>Daftar Lomba</u></b></h4></a>
  	</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script>

			$( function() {
					$.noConflict();
				$( ".datepicker" ).datepicker({
					changeMonth: true,
					changeYear: true,
					dateFormat: 'yy/mm/dd'
				});
			} );




		  </script>

			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
		  <script>



			$.validate({
				lang: 'en'
			});

		  </script>
	</body>
	</html>
