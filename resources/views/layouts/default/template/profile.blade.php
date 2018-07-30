<!DOCTYPE html>
<html>
<head>
    <title>PROFILE - NESCAF&Eacute; Kickstart</title>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/default.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
    <link href="{{ URL::to('/') }}/asset/libs/slider.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

</head>
<body>
    <div class="border-navbar-fixed-top">

    </div>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
            <div class="logo">
                <a class="navbar-brand" href="#">
                   <img src="{{ URL::to('/') }}/asset/images/logo-nescafe.png">
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
        </div> <!-- end of navbar-header -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ URL::to('/') }}" class="smoothScroll active">BERANDA</a></li>
            <li><a href="{{ URL::to('/') }}/gallery.html">GALERI</a></li>
            <li><a href="#" data-toggle="modal" data-target="#tnc">SYARAT & KETENTUAN</a></li>
            <li><a href="https://connect.sahabatnestle.co.id/sso/auth?response_type=code&action=register&client_id=8_2dkudha0au4gkc840w48gog4w4swwc88ggwg0o4ckw4ooscg4s&redirect_uri=https%3A%2F%2Fkickstart.nescafe.co.id%2Fnkl%2Fsso&scope=user" class="register">DAFTAR</a></li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
    <div class="clearfix"></div>
    <div class="container-fluid-full">
        <div class="body-profile">
            <div class="col-md-3 col-xs-12">
              <div class="profile-sidebar-top text-center">
                  <img src="{{$sso_profilepic}}" class="img-circle" style="width: 150px">
                  <?php //var_dump( \session::all() );  ?>
                  <h4>{{$sso_username}}</h4>

              </div>
              <div class="profile-sidebar">
                <h4>ACCOUNT SETTINGS </h4>
                <a href="#">
                  <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-9 col-xs-8">
                      Profile
                    </div>
                    <div class="col-md-3 col-xs-4">
                      <img src="{{ URL::to('/') }}/asset/images/icon-profile.png" class="img-responsive">
                    </div>
                  </div>
                </a>
                <a href="{{ URL::to('/') }}/pointhistory/">
                  <div class="row">
                    <div class="col-md-9 col-xs-8">
                      Point History
                    </div>
                    <div class="col-md-3 col-xs-4">
                      <img src="{{ URL::to('/') }}/asset/images/icon-reedem.png" class="img-responsive">
                    </div>
                  </div>
                </a>

                <!-- <a href="https://beta.connect.sahabatnestle.co.id/sso/auth?response_type=code&amp;action=login&amp;client_id=10_5npaai24lu4o8ccs8wgogo8s8sk4soc4og8wo40gk8c4o8g8wg&amp;redirect_uri=http%3A%2F%2Fdrupal.solusidata.co.id%2Fsso.php&amp;scope=user">
                    <div class="submit-sidebar">

                        <img src="asset/images/btn-submit-idea.png"  class="img-responsive">
                    </div>
                </a> -->

              </div>
            </div>
            <div class="col-md-9 col-xs-12 col-sm-12">
              <div class="account-setting">
                <h4>Account Settings</h4>

                  <div class="form-group">
                    <label>Email</label>
                    <input readonly type="text" name="email" class="form-control input-setting" value="{{$sso_email}}">
                  </div>
                  <div class="form-group">
                    <label>First Name</label>
                    <input readonly type="text" name="firstname" class="form-control input-setting" value="{{$sso_firstname}}">
                  </div>
                  <div class="form-group">
                    <label>Lastname</label>
                    <input readonly type="text" name="lastname" class="form-control input-setting" value="{{$sso_lastname}}">
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input  readonly type="text" name="phone" class="form-control input-setting" value="{{$sso_phone}}">
                  </div>
                  <div class="form-group">
                    <label>Province</label>
                    <input  readonly type="text" name="province" class="form-control input-setting" value="{{$sso_province}}">
                  </div>
                  <div class="form-group">
                    <label>City</label>
                    <input  readonly type="text" name="City" class="form-control input-setting" value="{{$sso_city}}">
                  </div>

                  <div class="form-group">
                        <!-- <button class="btn btn-submit form-control" type="submit">SUBMIT PROPOSAL</button> -->
                      <!--  <input type="image" src="asset/images/btn-save.png" border="0" alt="Submit" style="height:45px;" class="hidden-xs" />  -->
                      <!--  <input type="image" src="asset/images/btn-save.png" border="0" alt="Submit" style="height:40px;" class="visible-xs" />  -->
                    </div>

              </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
     <footer class="footer html-content">
      <div class="footer-line">
        <div class="text-footer">KUNJUNGI KAMI DI MEDIA SOSIAL</div>
      </div>
      <div class="socmed">
        <a href="https://www.instagram.com/nescafe_indonesia" target="_blank" class="item instagram">
          <img src="{{ URL::to('/') }}/asset/images/instagram.svg" class="normal">
          <img src="{{ URL::to('/') }}/asset/images/instagram-hover.svg" class="hover">
        </a>
        <a href="https://www.facebook.com/NescafeID" target="_blank" class="item facebook">
          <img src="{{ URL::to('/') }}/asset/images/facebook.svg" class="normal">
          <img src="{{ URL::to('/') }}/asset/images/facebook-hover.svg" class="hover">
        </a>
        <a href="https://twitter.com/inibaruhidup" target="_blank" class="item twitter">
          <img src="{{ URL::to('/') }}/asset/images/twitter.svg" class="normal">
          <img src="{{ URL::to('/') }}/asset/images/twitter-hover.svg" class="hover">
        </a>
        <a href="https://www.youtube.com/user/NescafeID" target="_blank" class="item youtube">
          <img src="{{ URL::to('/') }}/asset/images/youtube.svg" class="normal">
          <img src="{{ URL::to('/') }}/asset/images/youtube-hover.svg" class="hover">
        </a>
      </div>
      <div class="row wrap-copy">
        <div class="col-sm-4">
          <div class="copyright">
            <p>&copy; 2017 Hak Cipta oleh PT Nestl&eacute; Indonesia dilindungi undang-undang. Tidak diperkenankan mengambil materi/isi website dan mempublikasikan dalam bentuk apapun tanpa izin tertulis dari PT Nestl&eacute; Indonesia. Saran, komentar, dan pertanyaan mengenai website ditujukan ke sahabat.nestle@id.nestle.com atau <a href="https://www.sahabatnestle.co.id/contactus" target="_blank">kontak kami.</a></p>
          </div>
        </div>
        <div class="col-sm-6 col-sm-offset-2">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <div class="footer-item consumer">
                <div class="icon"><div class="valign"><div class="inner"><i class="fa fa-phone"></i></div></div></div>
                <div class="text">
                  <p>Nestl&eacute; Consumer Services<br>
                    Senin - Minggu<br>
                    Jam 08:00 - 24:00 WIB<br>
                    +62-800-182-1028
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="footer-item privacy">
                <div class="icon"><div class="valign"><div class="inner"><i class="fa fa-lock"></i></div></div></div>
                <div class="text">
                  <p><a href="https://www.nescafe.co.id/privacy-policy" class="open-modal" data-target="#policy-modal">Privacy Policy</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <div id="tnc" class="modal fade" role="dialog">
      <div class="modal-dialog" style="width: 90%;">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title text-center">SYARAT DAN KETENTUAN NESCAF&Eacute; KICKSTART</h3>
          </div>
          <div class="modal-body">
            <p>
              Program ini diselenggarakan oleh <strong>PT. NESTLÉ INDONESIA</strong>, berkantor di Perkantoran Hijau Arkadia,
              Wisma NESTLÉ Lantai 5, Jl. Letjend. TB. Simatupang Kav. 88, Jakarta Selatan 12520
              (untuk selanjutnya disebut sebagai "<strong>Penyelenggara</strong>").
              Seluruh peserta yang terlibat dan berpartisipasi aktif dalam Program ini ("<strong>Peserta</strong>"), dengan ini
              dianggap telah membaca dan memahami dengan baik, serta setuju tanpa syarat untuk patuh dan taat
              pada syarat dan ketentuan Program sebagaimana tercantum di bawah ini termasuk seluruh perubahannya
              jika ada ("<strong>Ketentuan</strong>"). Keputusan Penyelenggara mengenai semua hal - hal yang terkait dengan Program
              ini bersifat final.
            </p>
            <p><strong>A.    SYARAT AWAL</strong></p>
            <ol>
              <li>Warga Negara Indonesia dan bertempat tinggal di Indonesia.</li>
              <li>Pria / Wanita berusia 18 - 25 tahun dan dalam keadaan sehat jasmani dan rohani. Usia harus dapat dibuktikan dengan KartuTanda Penduduk dan menunjukkan kartu identitas yang masih berlaku ("<strong>IdentitasDiri</strong>") pada saat verifikasi pemenang.</li>
            </ol>
            <p>   <strong>B.    MEKANISME PROGRAM</strong></p>
            <ol>
              <li>Kompetisi ini dapat diikuti individu atau pun berkelompok (Maksimal 3 orang)</li>
              <li>Periode Submit Ide Bisnis 20 Februari - 08 April 2018.</li>
              <li>Peserta harus melakukan registrasi / login di <strong>www.nescafekickstart.com</strong> terlebih dahulu sebelum mengikuti Program ini.</li>
              <li>Pesertanya harus submit 1 (satu) bisnis modul dgn format pdf. Besar file tidak melebihi 5 (lima) MB. File disubmit ke  <strong>www.nescafekickstart.com</strong></li>
              <li>Juri akan melakukan shortlisting, 12 ide bisnis terbaik akan diumumkan di website pada tanggal <strong>17 Apr 2018</strong> dan dihubungi untuk maju ke fase bootcamp yang akan dilaksanakan pada tanggal <strong>07 – 08 Mei 2018</strong>.</li>
              <li>Fase bootcamp berlangsung selama 2 hari, 12 semi-finalis akan berada di karantina dan mengikuti program / workshop</li>
              <li>12 semi-finalis akan dibimbing dan dibekali oleh para mentor agar mereka siap untuk melakukan presentasi final di Awarding Day yang akan dilaksanakan pada tanggal <strong>09 Mei 2018</strong>.</li>
              <li>12 semi-finalis akan melakukan presentasi dihadapan umum dan para juri. </li>
              <li>Penentuan Pemenang akan dilakukan melalui sistem penilaian dewan juri yang ditentukan sepenuhnya oleh pihak Penyelenggara.  </li>
              <li>Kompetisi ini bersifat nasional, dan/ atau boleh diikuti oleh seluruh Peserta dari berbagai daerah . </li>
            </ol>
            <p>*Tanggal <strong>17 April – 09 Mei </strong> akan diadakan voting (digital) untuk pemilihan ide bisnis favorit.* </p>
            <p><strong>C. PENENTUAN FINALIST, PEMENANG, DAN HADIAH</strong></p>
            <p>Penentuan Finalist dan Pemenang berdasarkan system penilaian dari dewan juri yang sepenuhnya ditentukan oleh Pihak Penyelenggara.</p>
            <ol>
              <li>Hadiah untuk 1 (satu) Pemenang adalah sebagai berikut:
                <ul>
                  <li>Pemenang hadiah utama: Akan mendapatkan hadiah sebesar Rp 100.000.000,-</li>
                  <li>Pemenang hadiah kedua akan mendapatkan hadiah sebesar Rp. 50.000.000,-</li>
                  <li>Pemenang hadiah ketiga akan mendapatkan hadiah sebesar Rp 35.000.000,-</li>
                  <li>Pemenang hadiah favorit akan mendapatkan hadiah sebesar gadget (laptop)</li>
                </ul>
              </li>
              <li>Pajak Hadiah ditanggung oleh Pihak Penyelengara. Hadiah tidak dapat dikembalikan dan / atau ditukarkan dengan uang maupun produk dari Pihak Penyelenggara.</li>
              <li>Pengumuman Pemenang akan dilaksanakan <strong>tanggal 09 Mei 2018 (saat Awarding Day). </strong></li>
              <li>Pemenang akan diumumkan di akun sosial media  NESCAF&Eacute; Indonesia.</li>
              <li>Pemenang akan diverifikasi data-datanya dengan melengkapi data identitas diri Pemenang sesuai kartu Identitas Diri.  Pemenang dinyatakan gugur bila data yang dimasukkan saat registrasi tidak sesuai dengan data yang tercantum di kartu Identitas Diri. </li>
            </ol>
            <p><strong>D.   LAIN-LAIN</strong></p>
            <ol>
              <li>Setiap materi ide bisnis yang diikutsertakan dan dikirimkan dalam Program harus merupakan kreasi asli dan milik pribadi Peserta, belum pernah diikutsertakan dalam kegiatan serupa lainnya, tidak mengandung unsur kekerasan, pelecehan, pornografi, tidak menyinggung SARA dan tidak melanggar hak milik intelektual pihak lain manapun.  Penyelenggara tidak bertanggung jawab atas kerugian pihak ketiga mana pun yang ditimbulkan dari hasil karya Peserta. Penyelenggara berhak untuk mempergunakannya untuk kebutuhan publikasi sesuai dengan kepentingan Penyelenggara untuk kurun waktu yang tidak terbatas dan tanpa persetujuan ataupun kewajiban pemberian kompensasi apapun kepada peserta pengirim materi bisnis modul.</li>
              <li>Dengan mencantumkan data dan terdaftar pada Program ini, Peserta menyatakan bersedia menerima berbagai informasi menarik dari Penyelenggara termasuk informasi mengenai semua produk NESTL&Eacute;.</li>
              <li>Khusus untuk karyawan PT. NESTL&Eacute; Indonesia, tidak diperbolehkan mengikuti program ini. Bilamana pada saat verifikasi pemenang ditemukan pemenang adalah keluarga inti karyawan PT. NESTL&Eacute; Indonesia, maka keputusan pemenangnya dibatalkan.</li>
              <li>Penyelenggara, menurut pertimbangannya sendiri, berhak untuk tidak menampilkan bisnis modul yang tidak sesuai serta mendiskualifikasikan Peserta maupun Pemenang yang tidak memenuhi dan/atau melanggar dan/atau dicurigai melakukan kecurangan terhadap Ketentuan ini.</li>
              <li>Penyelenggara memiliki hak untuk mengubah Ketentuan ini, jika dianggap perlu, tanpa perlu ada pemberitahuan terlebih dahulu. Oleh karena itu, Peserta disarankan untuk memeriksa Syarat dan Ketentuan Program secara berkala.</li>
              <li>Jika ada salah satu pernyataan dan/atau pelaksanaan dari Ketentuan ditemukan batal, melanggar hukum atau tidak dapat dilaksanakan maka poin tersebut tidak mempengaruhi Ketentuan lain untuk tetap berlaku.</li>
              <li>Program ini tidak dipungut biaya apa pun. Hati-hati penipuan.</li>
              <li>Jika terjadi force majeure, PT. NESTL&Eacute; Indonesia berhak menunda/membatalkan keikustertaan.</li>
            </ol>
          </div>
        </div>
      </div>
    </div>



    <script src="{{ URL::to('/') }}/asset/default.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="{{ URL::to('/') }}/asset/libs/slider.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript">
	$(document).ready(function() {
		$(".main-slider-container").basicSlider();

        $(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') ) {
        $(this).collapse('hide');
    }
});

	});

    $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();
    var offset = -50; // <-- change the value here
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top + offset
    }, 500);
});

	</script>
</body>
</html>
