<!DOCTYPE html>
<html>
<head>
	<title>JADWAL LOMBA - Koko Krunch</title>
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
	   	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
			<style>
	#map-canvas {
		height:450px;
	}
	#map-old {
		height:450px;
	}
	</style>
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXlRkE0K0FFd90smdB4KODfLcrw25uxjw&callback=initMap"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script>
		var map,map2;

		var markerData= [
			{lat: -6.2349578 , lng: 106.9915272 , zoom: 15 , name: "Bekasi", dates:"4 Maret 2018",venue:"GOR Patriot Bekasi",fulladdress:"Jalan Jendral Ahmad Yani No.2, Marga Jaya, Bekasi Selatan"},
			{lat: -6.9602536 , lng: 107.5787321 , zoom: 15 , name: "Bandung Kota",dates:"25 Maret 2018",venue:"Miko Mall Bandung",fulladdress:"Atrium Oval Lt.2, Jl. Raya Kopo no. 599"},
			{lat: -3.7942604 , lng: 102.2718247 , zoom: 15 , name: "Bengkulu",dates:"31 Maret 2018",venue:"GOR Sawah Lebar",fulladdress:"Sawah Lebar Baru, Bengkulu, Kota Bengkulu, Bengkulu 38222"},
			{lat: -7.57761 , lng: 110.7810129 , zoom: 15 , name: "Solo",dates:"1 April 2018",venue:"Luwes Gentan",fulladdress:"Jalan Raya Songgolangit no.1 Gentan Baki Sukoharjo"},
			{lat: -7.9529187 , lng: 112.6138044 , zoom: 15 , name: "Malang",dates:"1 April 2018",venue:"Gedung Samantha Krida, Universitas Brawijaya MALANG",fulladdress:"Jl. Mt. Haryono, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145"},
			{lat: -0.0455466 , lng: 109.3377282 , zoom: 15 , name: "Pontianak",dates:"8 April 2018",venue:"Gor Pangsuma Pontianak",fulladdress:"Jl. Jenderal Ahmad Yani, Benua Melayu Barat, Pontianak"},
			{lat: -7.57761 , lng: 110.7810129 , zoom: 15 , name: "Tangerang Selatan",dates:"15 April 2018",venue:"QBIG BSD City",fulladdress:"Jl. BSD Raya Utama, Lengkong Kulon, Pagedangan, Lengkong Kulon, Pagedangan, Tangerang, Banten 15331"},
			{lat: -5.1537034 , lng: 119.401481 , zoom: 15 , name: "Makassar",dates:"15 April 2018",venue:"Celebes Convention Center",fulladdress:"Maccini Sombala, Tamalate, Kota Makassar, Sulawesi Selatan 90121"},
			{lat: 2.9609898 , lng: 99.0761164 , zoom: 15 , name: "Siantar",dates:"21 April 2018",venue:"Aula Kampus Nommensen",fulladdress:"Jl. Asahan No 4, Siopat Suhu Siantar Tim, Kota Pematang Siantar"},
			{lat: -0.8990885 , lng: 119.8765244 , zoom: 15 , name: "Palu",dates:"22 April 2018",venue:"GOR KONI Palu",fulladdress:"Jl. Jenderal Ahmad Yani RT3 / RW1, Besusu Bar., Palu Tim., Kota Palu, Sulawesi Tengah 94111"},
			{lat: -6.7307933 , lng: 108.5387075 , zoom: 15 , name: "Cirebon",dates:"6 May 2018",venue:"Pemuda Sport Centre",fulladdress:"Jl. Pemuda no 42 Cirebon"},
			{lat: -0.8995351 , lng: 100.3453489 , zoom: 15 , name: "Padang",dates:"6 May 2018",venue:"GOR UNP (Universitas Negeri Padang)",fulladdress:"West Air Tawar, North Padang, Padang City, West Sumatra"},
			{lat: -6.8787379 , lng: 109.1350537 , zoom: 15 , name: "Tegal",dates:"19 May 2018",venue:"GOR Wisanggeni Tegal",fulladdress:"Jl. Wisa Geni no 8 Tegan Jateng"},
			{lat: -5.3993206 , lng: 105.2676337 , zoom: 15 , name: "Lampung",dates:"6 May 2018",venue:"GOR Way Halim",fulladdress:"Jagabaya III, Way Halim, Bandar Lampung City, Lampung 35122"},
		];

		function initialize() {
			 	map = new google.maps.Map(document.getElementById('map-canvas'), {
					zoom: 4,
					center: {lat: -2.44565, lng: 117.8888}
				});
				markerData.forEach(function(data) {

					jQuery("#selectlocation").append('<option value="'+[data.lat, data.lng,data.zoom,data.name,data.dates,data.venue,data.fulladdress].join('|')+'" style="margin:0 0 5px 0;">'+data.name+'</option>');
				});
		}

		google.maps.event.addDomListener(window, 'load', initialize);

		jQuery(document).on('change','#selectlocation',function() {
			var latlngzoom = jQuery(this).val().split('|');
			if(latlngzoom == ''){
				location.reload();
			}
			else{
			var newzoom = 1*latlngzoom[2],
			newlat = 1*latlngzoom[0],
			newlng = 1*latlngzoom[1];
			newname = latlngzoom[3];
			newdate = latlngzoom[4];
			newvenue = latlngzoom[5];
			newaddress = latlngzoom[6];
			map.setZoom(newzoom);
			map.setCenter({lat:newlat, lng:newlng});

					var newmarker= new google.maps.Marker({
						map:map,
						position:{lat:newlat, lng:newlng},
						title: newname
					});
					var infowindow = new google.maps.InfoWindow();
					google.maps.event.addListener(newmarker, 'click', function() {
		              infowindow.setContent('<div><strong>JADWAL LOMBA</strong><br />' + newname + ' - '+newdate+'<br /><br />' +
		                '<strong>'+newvenue+'</strong><br>'+newaddress+'</div>');
		              infowindow.open(map, this);
	            	});

					infowindow.setContent('<div><strong>JADWAL LOMBA</strong><br />' + newname + ' - '+newdate+'<br /><br />' +
						'<strong>'+newvenue+'</strong><br>'+newaddress+'</div>');
					infowindow.open(map, newmarker);
			}
		});
	</script>

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
							 <li><a href="{{ URL::to('/') }}/jadwallomba/" class="active">JADWAL LOMBA</a></li>
							 <li><a href="{{ URL::to('/') }}/daftar/">DAFTAR</a></li>
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
		<div class="col-md-2 col-xs-12">
			<h4>Jadwal Lomba</h4>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="container-fluid-full">
		<div style="margin: 0 0 20px 0;">
			<div class="col-md-4 col-md-offset-4 col-xs-12">
				<select id="selectlocation" class="js-example-basic-single" name="state" style="width: 100%;height: 100%">
					<option value="" style="margin:0 0 5px 0;">-- PILIH KOTA DISINI --</option>
				</select>
			</div>
		</div>
		<div class="clearfix"></div>
		<div style="margin: 20px 0 10px 0;">
	    	<div class="row" style="margin: 0 0">
	    		<div id="map-canvas"></div>
	    	</div>
	    </div>
	    <div class="clearfix"></div>
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
	<div class="floating-notice visible-xs text-center">
    	<a href="{{ URL::to('/') }}/daftar/"><h4><b><u>Daftar Lomba</u></b></h4></a>
  	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::to('/') }}/asset/nivo-slider/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</body>
</html>
