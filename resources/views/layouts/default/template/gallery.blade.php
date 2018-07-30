<!DOCTYPE html>
<html>
<head>
	<title>GALERI - Koko Krunch</title>
  <meta charset="UTF-8">
	<!-- Latest compiled and minified CSS -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
		<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/asset/bootstrap-less/css/bootstrap.min.css">

		<!-- Optional theme -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
		<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/asset/bootstrap-less/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/default.css">
		<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/gallery.css">
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
							 <li><a href="{{ URL::to('/') }}/daftar/" >DAFTAR</a></li>
							 <li><a href="{{ URL::to('/') }}/galeri/" class="active" >GALERI</a></li>
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
					<h4>Galeri</h4>
			</div>
			<div class="clearfix"></div>
	</div>
<div class="container-fluid-full">
		<div class="body-content" id="gallery">
			<div class="tab" role="tabpanel">
									<!-- Nav tabs -->

									<div class="col-md-12 hidden-xs">
									<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="#Section1" class="roundleft" aria-controls="home" role="tab" data-toggle="tab">BEKASI</a></li>
											<li role="presentation"><a href="#Section2" class="noround" aria-controls="profile" role="tab" data-toggle="tab">BANDUNG</a></li>
											<li role="presentation"><a href="#bengkulu" class="noround" aria-controls="messages" role="tab" data-toggle="tab">BENGKULU</a></li>
											<li role="presentation"><a href="#malang" class="noround" aria-controls="messages" role="tab" data-toggle="tab">MALANG</a></li>
											<li role="presentation"><a href="#solo" class="roundright" aria-controls="messages" role="tab" data-toggle="tab">SOLO</a></li>
									</ul>
									</div>
									<div class="visible-xs">
											<div class=" col-xs-8 col-xs-offset-1">
													<ul class="nav nav-tabs" role="tablist">
															<li role="presentation" class="active"><a href="#Section1" class="roundleft" aria-controls="home" role="tab" data-toggle="tab">BEKASI</a></li>
															<li role="presentation"><a href="#Section2" class="noround" aria-controls="profile" role="tab" data-toggle="tab">BANDUNG</a></li>
															<li role="presentation"><a href="#bengkulu" class="noround" aria-controls="messages" role="tab" data-toggle="tab">BENGKULU</a></li>
															<li role="presentation"><a href="#malang" class="noround" aria-controls="messages" role="tab" data-toggle="tab">MALANG</a></li>
															<li role="presentation"><a href="#solo" class="roundright" aria-controls="messages" role="tab" data-toggle="tab">SOLO</a></li>
													</ul>
											</div>
									</div>
									<div class="clearfix"></div>
									<!-- Tab panes -->
									<div class="tab-content tabs">
											<div role="tabpanel" class="tab-pane fade in active" id="Section1">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-2">
																			<h4>GOR Patriot Bekasi</h4>
																			<p>4 Maret 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-1">
																					<article class="col-6 col-sm-3" id="section1-1">  <a href="#">                                                    <img data-position="1" src="{{ URL::to('/') }}/asset/images/bekasi-1.JPG" alt="">                                               </a>  </article>
																					<article class="col-6 col-sm-3" id="section1-2">  <a href="#">                                                    <img data-position="2" src="{{ URL::to('/') }}/asset/images/bekasi-2.JPG" alt="">                                               </a>  </article>
																					<article class="col-6 col-sm-3" id="section1-3">  <a href="#">                                                    <img data-position="3" src="{{ URL::to('/') }}/asset/images/bekasi-3.JPG" alt="">                                               </a>  </article>
																					<article class="col-6 col-sm-3" id="section1-4">  <a href="#">                                                    <img data-position="4" src="{{ URL::to('/') }}/asset/images/bekasi-4.JPG" alt="">                                               </a>  </article>
																					<article class="col-6 col-sm-3" id="section1-5">  <a href="#">                                                    <img data-position="5" src="{{ URL::to('/') }}/asset/images/bekasi-5.JPG" alt="">                                               </a>  </article>
																					<article class="col-6 col-sm-3" id="section1-6">  <a href="#">                                                    <img data-position="6" src="{{ URL::to('/') }}/asset/images/bekasi-6.JPG" alt="">                                               </a>  </article>
																					<article class="col-6 col-sm-3" id="section1-7">  <a href="#">                                                    <img data-position="7" src="{{ URL::to('/') }}/asset/images/bekasi-7.JPG" alt="">                                               </a>  </article>
																					<article class="col-6 col-sm-3" id="section1-8">  <a href="#">                                                    <img data-position="8" src="{{ URL::to('/') }}/asset/images/bekasi-8.JPG" alt="">                                               </a>  </article>  </div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="0"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>  </div>  </div>   </div>  </div>
											<div role="tabpanel" class="tab-pane fade" id="Section2">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-2">
																			<h4>Miko Mall Bandung</h4>
																			<p>25 Maret 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-2">
																					<article class="col-6 col-sm-3" id="section2-1">
																							<a href="#">
																									<img data-position="9" src="{{ URL::to('/') }}/asset/images/bandung-1.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section2-2">
																							<a href="#">
																									<img data-position="10" src="{{ URL::to('/') }}/asset/images/bandung-2.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section2-3">
																							<a href="#">
																									<img data-position="11" src="{{ URL::to('/') }}/asset/images/bandung-3.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section2-4">
																							<a href="#">
																									<img data-position="12" src="{{ URL::to('/') }}/asset/images/bandung-4.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section2-5">
																							<a href="#">
																									<img data-position="13" src="{{ URL::to('/') }}/asset/images/bandung-5.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section2-6">
																							<a href="#">
																									<img data-position="14" src="{{ URL::to('/') }}/asset/images/bandung-6.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section2-7">
																							<a href="#">
																									<img data-position="15" src="{{ URL::to('/') }}/asset/images/bandung-7.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section2-8">
																							<a href="#">
																									<img data-position="16" src="{{ URL::to('/') }}/asset/images/bandung-8.JPG" alt="">
																							</a>
																					</article>
																			</div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="1"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>  </div>  </div>   </div>  </div>
											<div role="tabpanel" class="tab-pane fade" id="bengkulu">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-2">
																			<h4>GOR Sawah Lebar</h4>
																			<p>31 Maret 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-3">
																					<article class="col-6 col-sm-3" id="section3-1">
																							<a href="#">
																									<img data-position="17" src="{{ URL::to('/') }}/asset/images/bengkulu-1.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section3-2">
																							<a href="#">
																									<img data-position="18" src="{{ URL::to('/') }}/asset/images/bengkulu-2.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section3-3">
																							<a href="#">
																									<img data-position="19" src="{{ URL::to('/') }}/asset/images/bengkulu-3.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section3-4">
																							<a href="#">
																									<img data-position="20" src="{{ URL::to('/') }}/asset/images/bengkulu-4.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section3-5">
																							<a href="#">
																									<img data-position="21" src="{{ URL::to('/') }}/asset/images/bengkulu-5.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section3-2">
																							<a href="#">
																									<img data-position="22" src="{{ URL::to('/') }}/asset/images/bengkulu-6.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section3-2">
																							<a href="#">
																									<img data-position="23" src="{{ URL::to('/') }}/asset/images/bengkulu-7.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section3-2">
																							<a href="#">
																									<img data-position="24" src="{{ URL::to('/') }}/asset/images/bengkulu-8.JPG" alt="">
																							</a>
																					</article>
																			</div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="2"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>
																			</div>
																	</div>
													</div>
											</div><!-- tab panel -->
											<div role="tabpanel" class="tab-pane fade" id="malang">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-6">
																			<h4>Gedung Samantha Krida, Universitas Brawijaya MALANG</h4>
																			<p>1 April 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-4">
																					<article class="col-6 col-sm-3" id="section4-1">
																							<a href="#">
																									<img data-position="25" src="{{ URL::to('/') }}/asset/images/malang-1.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section4-2">
																							<a href="#">
																									<img data-position="26" src="{{ URL::to('/') }}/asset/images/malang-2.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section4-3">
																							<a href="#">
																									<img data-position="27" src="{{ URL::to('/') }}/asset/images/malang-3.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section4-4">
																							<a href="#">
																									<img data-position="28" src="{{ URL::to('/') }}/asset/images/malang-4.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section4-5">
																							<a href="#">
																									<img data-position="29" src="{{ URL::to('/') }}/asset/images/malang-5.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section4-6">
																							<a href="#">
																									<img data-position="30" src="{{ URL::to('/') }}/asset/images/malang-6.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section4-7">
																							<a href="#">
																									<img data-position="31" src="{{ URL::to('/') }}/asset/images/malang-7.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section4-8">
																							<a href="#">
																									<img data-position="32" src="{{ URL::to('/') }}/asset/images/malang-8.JPG" alt="">
																							</a>
																					</article>
																			</div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="3"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>
																			</div>
																	</div>
													</div>
											</div><!-- tab panel -->
											<div role="tabpanel" class="tab-pane fade" id="solo">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-2">
																			<h4>Luwes Gentan</h4>
																			<p>1 April 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-5">
																					<article class="col-6 col-sm-3" id="section5-1">
																							<a href="#">
																									<img data-position="33" src="{{ URL::to('/') }}/asset/images/solo-1.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section5-2">
																							<a href="#">
																									<img data-position="34" src="{{ URL::to('/') }}/asset/images/solo-2.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section5-3">
																							<a href="#">
																									<img data-position="35" src="{{ URL::to('/') }}/asset/images/solo-3.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section5-4">
																							<a href="#">
																									<img data-position="36" src="{{ URL::to('/') }}/asset/images/solo-4.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section5-5">
																							<a href="#">
																									<img data-position="37" src="{{ URL::to('/') }}/asset/images/solo-5.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section5-6">
																							<a href="#">
																									<img data-position="38" src="{{ URL::to('/') }}/asset/images/solo-6.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section5-7">
																							<a href="#">
																									<img data-position="39" src="{{ URL::to('/') }}/asset/images/solo-7.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section5-8">
																							<a href="#">
																									<img data-position="40" src="{{ URL::to('/') }}/asset/images/solo-8.JPG" alt="">
																							</a>
																					</article>
																			</div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="3"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>
																			</div>
																	</div>
													</div>
											</div><!-- tab panel -->
									</div>
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
	<div class="floating-notice visible-xs text-center">
    	<a href="{{ URL::to('/') }}/daftar/"><h4><b><u>Daftar Lomba</u></b></h4></a>
	  </div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	    <script type="text/javascript">
	    $(window).load(function() {
	        $('#slider').nivoSlider();
	    });
	    </script>
	    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		  <script>
		  $( function() {
		    $( ".datepicker" ).datepicker({
		      changeMonth: true,
		      changeYear: true,
		      dateFormat: 'dd/mm/yy'
		    });
		  } );
		  </script>
		  <script type="text/javascript" src="asset/slick/slick/slick.min.js"></script>
		  <script type="text/javascript">
	      $(document).ready(function() {
	                    var a = 8,
	                        b = 8,
	                        c = 8;
	                    $(".more").click(function(d) {
	                        d.preventDefault();
	                        var e = $(this).attr("data-number");
	                        if ("0" == e) {
	                            a = Number(a) + Number(8);
	                            for (var f = $("#galeri-1 .col-6").size(), g = 1; g < Number(a) + Number(1); g++) $("#section1-" + g).show();
	                            a >= f && $(this).hide()
	                        } else if ("1" == e) {
	                            b = Number(b) + Number(8);
	                            for (var f = $("#galeri-2 .col-6").size(), g = 1; g < Number(b) + Number(1); g++) $("#section2-" + g).show();
	                            b >= f && $(this).hide()
	                        } else if ("2" == e) {
	                            c = Number(c) + Number(8);
	                            for (var f = $("#galeri-3 .col-6").size(), g = 1; g < Number(c) + Number(1); g++) $("#section3-" + g).show();
	                            c >= f && $(this).hide()
	                        }
	                        else if ("3" == e) {
	                            c = Number(c) + Number(8);
	                            for (var f = $("#galeri-4 .col-6").size(), g = 1; g < Number(c) + Number(1); g++) $("#section4-" + g).show();
	                            c >= f && $(this).hide()
	                        }
	                        else if ("4" == e) {
	                            c = Number(c) + Number(8);
	                            for (var f = $("#galeri-5 .col-6").size(), g = 1; g < Number(c) + Number(1); g++) $("#section5-" + g).show();
	                            c >= f && $(this).hide()
	                        }
	                    }), $(".less").click(function(a) {
	                        a.preventDefault(), $(".more").show()
	                    });
	                    var d = [],
	                        e = [];
	                    $(".gallerij a img").each(function() {
	                        var a = $(this).attr("src"),
	                            b = a.replace("-150x150", "");
	                        d.push(a), e.push(b)
	                    }), $(".gallerij article").each(function() {
	                        $(this).find("a").on("click", function(a) {
	                            a.preventDefault();
	                            var b = $(this).find("img").attr("data-position") - 1;
	                            $("body").append('<div class="lightbox"><article><span><i class="fa fa-times" aria-hidden="true"></i></span><img data-thumb="' + b + '" src="' + e[b] + '" alt="" /><div class="navigation"><i class="fa fa-chevron-left" aria-hidden="true"></i><i class="fa fa-chevron-right" aria-hidden="true"></i></div></article></div>')
	                        })
	                    }), $(document).on("click", ".navigation .fa-chevron-right", function(a) {
	                        a.stopPropagation(), $(this).each(function() {
	                            var a = $(".lightbox img").attr("data-thumb"),
	                                b = ++a,
	                                c = e[b];
	                            $(".lightbox article").hide(), $(".lightbox article img").attr("src", c), $(".lightbox article img").attr("data-thumb", b), $(".lightbox article").fadeIn();
	                            var d = e[e.length - 1];
	                            $(".lightbox article img").attr("src") == d ? $(this).addClass("disabled") : $(this).removeClass("disabled"), $(".navigation .fa-chevron-left").removeClass("disabled")
	                        })
	                    }), $(document).on("click", ".navigation .fa-chevron-left", function(a) {
	                        a.stopPropagation(), $(this).each(function() {
	                            var a = $(".lightbox img").attr("data-thumb"),
	                                b = --a,
	                                c = e[b];
	                            $(".lightbox article").hide(), $(".lightbox article img").attr("src", c), $(".lightbox article img").attr("data-thumb", b), $(".lightbox article").fadeIn();
	                            var d = e[0];
	                            $(".lightbox article img").attr("src") == d ? $(this).addClass("disabled") : $(this).removeClass("disabled"), $(".navigation .fa-chevron-right").removeClass("disabled")
	                        })
	                    }), $(document).on("click", ".lightbox", function() {
	                        $(".lightbox").fadeOut().delay(3e3).queue(function() {
	                            $(this).remove()
	                        })
	                    })
	                })
	    </script>
	</body>
	</html>
