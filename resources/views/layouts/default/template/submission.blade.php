<!DOCTYPE html>
<html>
<head>
    <title>SUBMISSION - NESCAF&Eacute; Kickstart</title>
     <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="default.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="asset/nivo-slider/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="asset/nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="asset/nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="asset/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
    <link href="asset/libs/slider.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NFC79VN');</script>
<!-- End Google Tag Manager -->

</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NFC79VN"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

<div class="border-navbar-fixed-top">
</div>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <div class="logo">
            <a class="navbar-brand" href="#">
               <img src="asset/images/logo-nescafe.png">
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
      <ul class="nav navbar-nav navbar-left">
        <li><a href="{{ \SiteHelpers::urlBase() }}#top" class="smoothScroll active">BERANDA</a></li>
        <li><a href="{{ \SiteHelpers::urlBase() }}#about" class="smoothScroll">TENTANG NESCAFE KICKSTART</a></li>
        <li><a href="#" data-toggle="modal" data-target="#tnc" >SYARAT & KETENTUAN</a></li>
        <li><a href="{{ \SiteHelpers::urlBase() }}#winner">PEMENANG 2017</a></li>
        <li><a href="{{ \SiteHelpers::urlBase() }}gallery.html">GALERI</a></li>
        <li><a href="{{ \SiteHelpers::urlRegisterSso() }}" class="register">DAFTAR</a></li>
        <li><a href="{{ \SiteHelpers::urlLoginSso() }}">LOGIN</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
<div class="clearfix"></div>
<div class="container-fluid-full">
    <div class="body-submission">
      <div class="body-submission-layer">
        <div class="col-md-8 col-xs-12 col-md-offset-2">
            {!! Form::open(array('id' => 'userdetail', 'url'=>'msubmission', 'class'=>'form-horizontal validated','files' => true )) !!}
            <div class="body-submission-white">
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

                <h3>SUBMIT PROPOSAL BISNISMU</h3>
                <p>
                    Isi data dirimu di formulir dibawah ini dengan valid beserta penjelasan singkat mengenai proposal bisnismu.
                </p>
                <div class="form-group">
                    <label>NAMA LENGKAP</label>
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Tuliskan Nama Lengkap..">
                </div>
                <div class="form-group">
                    <label>EMAIL PESERTA</label>
                    <input type="text" name="email" class="form-control" placeholder="Tuliskan Email Anda..">
                </div>
                <div class="form-group">
                    <label>JUDUL PROPOSAL</label>
                    <input type="text" name="judul_proposal" class="form-control" placeholder="Tuliskan Judul Proposal..">
                </div>
                <div class="form-group">
                    <label>PENJELASAN SINGKAT PROPOSAL</label>
                    <textarea class="form-control" name="penjelasan_proposal" placeholder="Tuliskan Penjelasan.." style="height:100px;min-height: 100px;max-height: 100px;width: 100%;min-width: 100%;max-width: 100%;"></textarea>
                </div>
                <div class="form-group text-center">
                  <label id="title" /> </label>

                <div class="form-group upload-file text-center">
                    <button class="btn btn-upload">UPLOAD FORMULIR</button>
                    <input id="file_input"  type="file" name="file_name" />
                </div>
                </div>
                <div class="text-center upload-info">

                  <label>Upload File dengan Format PDF. Maksimal 5 MB</label>
                </div>
                <div class="form-group text-center">
                    <label><input type="checkbox" name="term" id="terms" value="1"> Saya Setuju Dengan <a href="#" data-toggle="modal" data-target="#tnc" >Syarat & Ketentuan</a></label>
                </div>
                <div class="form-group text-center">
                    <!-- <button class="btn btn-submit form-control" type="submit">SUBMIT PROPOSAL</button> -->
                    <input type="image" src="asset/images/btn-submit.png" border="0" alt="Submit" style="height:45px;" class="hidden-xs" />
                    <input type="image" src="asset/images/btn-submit.png" border="0" alt="Submit" style="height:40px;" class="visible-xs" />
                </div>
                <div class="text-center">
                  <label>Belum Punya Template ide bisnis? <a href="https://drive.google.com/open?id=1wsSOB2QbO3WH0BONgRgK4m5GsbHel_-0">Download Disini!</a></label>
                </div>
            </div>
            <input type="hidden" name="action_task" value="public" />
            {!! Form::close() !!}
        </div>
      </div>
    </div>
</div>
 <footer class="footer html-content">
  <div class="footer-line">
    <div class="text-footer">KUNJUNGI KAMI DI MEDIA SOSIAL</div>
  </div>
  <div class="socmed">
    <a href="https://www.instagram.com/nescafe_indonesia" target="_blank" class="item instagram">
      <img src="asset/images/instagram.svg" class="normal">
      <img src="asset/images/instagram-hover.svg" class="hover">
    </a>
    <a href="https://www.facebook.com/NescafeID" target="_blank" class="item facebook">
      <img src="asset/images/facebook.svg" class="normal">
      <img src="asset/images/facebook-hover.svg" class="hover">
    </a>
    <a href="https://twitter.com/inibaruhidup" target="_blank" class="item twitter">
      <img src="asset/images/twitter.svg" class="normal">
      <img src="asset/images/twitter-hover.svg" class="hover">
    </a>
    <a href="https://www.youtube.com/user/NescafeID" target="_blank" class="item youtube">
      <img src="asset/images/youtube.svg" class="normal">
      <img src="asset/images/youtube-hover.svg" class="hover">
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
              <p><a href="#policy" class="open-modal" data-target="#policy-modal">Privacy Policy</a></p>
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
          Program ini diselenggarakan oleh <b>PT. NESTL&Eacute; INDONESIA</b>, berkantor di Perkantoran Hijau Arkadia, Wisma  NESTL&Eacute; Lantai 5, Jl. Letjend. TB. Simatupang Kav. 88, Jakarta Selatan 12520 (untuk selanjutnya disebut sebagai "<b>Penyelenggara</b>").
        </p>
        <p>
          Seluruh peserta yang terlibat dan berpartisipasi aktif dalam Program ini ("<b>Peserta</b>"), dengan ini dianggap telah membaca dan memahami dengan baik, serta setuju tanpa syarat untuk patuh dan taat pada syarat dan ketentuan Program sebagaimana tercantum di bawah ini termasuk seluruh perubahannya jika ada ("<b>Ketentuan</b>"). Keputusan Penyelenggara mengenai semua hal – hal yang terkait dengan Program ini bersifat final.
        </p>
        <p><strong>A.    SYARAT AWAL</strong></p>
        <ol>
          <li>Warga Negara Indonesia dan bertempat tinggal di Indonesia.</li>
          <li>Pria / Wanita berusia 18 - 25 tahun dan dalam keadaan sehat jasmani dan rohani. Usia harus dapat dibuktikan dengan Kartu Tanda Penduduk dan menunjukkan kartu identitas yang masih berlaku ("<strong>Identitas Diri</strong>") pada saat verifikasi pemenang.</li>
        </ol>
        <p>   <strong>B.    MEKANISME PROGRAM</strong></p>
        <ol>
          <li>Kompetisi ini dapat diikuti individu atau pun berkelompok (Maksimal 3 orang)</li>
          <li>Periode Submit Ide Bisnis <b>20 Februari - 08 April 2018</b>.</li>
          <li>Peserta harus melakukan registrasi / login di <a href="www.nescafekickstart.com">www.nescafekickstart.com</a> terlebih dahulu sebelum mengikuti Program ini.</li>
          <li>Pesertanya harus submit 1 (satu) bisnis modul dgn format file pdf. Besar file tidak melebihi 5 MB (system akan secara otomatis menolak jika file size melebihi 5 MB). File disubmit ke  <a href="www.nescafekickstart.com">www.nescafekickstart.com</a></li>
          <li>Juri akan melakukan shortlisting, 12 ide bisnis terbaik akan diumumkan di website pada tanggal <b>09 Apr 2018</b> dan dihubungi untuk maju ke fase bootcamp yang akan dilaksanakan pada tanggal <b> 08 – 09 Mei 2018 </b>. </li>
          <li>Fase bootcamp berlangsung selama 2 hari, peserta akan berada di karantina dan mengikuti program/workshop.</li>
          <li>Peserta akan dibimbing dan dibekali oleh para mentor agar mereka siap untuk melakukan presentasi final di Awarding Day yang akan dilaksanakan pada tanggal <b>10 Mei 2018</b>.</li>
          <li>Peserta akan melakukan presentasi dihadapan umum dan para juri.</li>
          <li>Penentuan Pemenang akan dilakukan melalui sistem penilaian dewan juri yang ditentukan sepenuhnya oleh pihak Penyelenggara.</li>
          <li>Kompetisi ini bersifat nasional, dan/ atau boleh diikuti oleh seluruh Peserta dari berbagai daerah.</li>
        </ol>
        *Tanggal <b>12 April - 09 Mei</b> akan diadakan voting (digital) untuk pemilihan peserta favorit.<br /><br />
        <p><strong>C. PENENTUAN FINALIS, PEMENANG, DAN HADIAH</strong></p>
        <p>Penentuan Pemenang berdasarkan system penilaian dari dewan juri yang sepenuhnya ditentukan oleh Pihak Penyelenggara.</p>
        <ol>
          <li>Hadiah untuk 1 (satu) Pemenang adalah sebagai berikut:
            <ul>
              <li>Pemenang hadiah utama: Akan mendapatkan hadiah sebesar Rp 100.000.000,-</li>
              <li>Pemenang hadiah kedua akan mendapatkan hadiah sebesar Rp. 50.000.000,-</li>
              <li>Pemenang hadiah ketiga akan mendapatkan hadiah sebesar Rp 35.000.000,-</li>
              <li>Pemenang hadiah favorit akan mendapatkan hadiah sebesar gadget (Laptop)</li>
            </ul>
          </li>
          <li>Pajak Hadiah ditanggung oleh Pihak Penyelengara. Hadiah tidak dapat dikembalikan dan / atau ditukarkan dengan uang mau pun produk dari Pihak Penyelenggara, bentuk dan warna Hadiah tergantung persediaan.</li>
          <li>Pengumuman Pemenang Hadiah Utama akan dilaksanakan tanggal <b>10 Mei 2018</b> (Saat Awarding Day)</li>
          <li>Pemenang akan diumumkan di akun sosial media NESCAF&Eacute; Indonesia.</li>
          <li>Pemenang akan diverifikasi data-datanya dengan melengkapi data identitas diri Pemenang sesuai kartu Identitas Diri.  Pemenang dinyatakan gugur bila data yang dimasukkan saat registrasi tidak sesuai dengan data yang tercantum di kartu Identitas Diri.</li>
        </ol>
        <p><strong>D.   LAIN-LAIN</strong></p>
        <ol>
          <li>Setiap materi ide bisnis yang diikutsertakan dan dikirimkan dalam Program harus merupakan kreasi asli dan milik pribadi Peserta, belum pernah diikutsertakan dalam kegiatan serupa lainnya, tidak mengandung unsur kekerasan, pelecehan, pornografi, tidak menyinggung SARA dan tidak melanggar hak milik intelektual pihak lain manapun.  Penyelenggara tidak bertanggung jawab atas kerugian pihak ketiga mana pun yang ditimbulkan dari hasil karya Peserta. Penyelenggara berhak untuk mempergunakannya untuk kebutuhan publikasi sesuai dengan kepentingan Penyelenggara untuk kurun waktu yang tidak terbatas dan tanpa persetujuan ataupun kewajiban pemberian kompensasi apapun kepada peserta pengirim materi bisnis modul. </li>
          <li>Dengan mencantumkan data dan terdaftar pada Program ini, Peserta menyatakan bersedia menerima berbagai informasi menarik dari Penyelenggara termasuk informasi mengenai semua produk  NESTL&Eacute;. </li>
          <li>Khusus untuk karyawan PT. NESTL&Eacute; Indonesia, tidak diperbolehkan mengikuti program ini. Bilamana pada saat verifikasi pemenang ditemukan pemenang adalah keluarga inti karyawan PT.  NESTL&Eacute; Indonesia, maka keputusan pemenangnya dibatalkan. </li>
          <li>Penyelenggara, menurut pertimbangannya sendiri, berhak untuk tidak menampilkan bisnis modul yang tidak sesuai serta mendiskualifikasikan Peserta maupun Pemenang yang tidak memenuhi dan/atau melanggar dan/atau dicurigai melakukan kecurangan terhadap Ketentuan ini.</li>
          <li>Penyelenggara memiliki hak untuk mengubah Ketentuan ini, jika dianggap perlu, tanpa perlu ada pemberitahuan terlebih dahulu. Oleh karena itu, Peserta disarankan untuk memeriksa Syarat dan Ketentuan Program secara berkala. </li>
          <li>Jika ada salah satu pernyataan dan/atau pelaksanaan dari Ketentuan ditemukan batal, melanggar hukum atau tidak dapat dilaksanakan maka poin tersebut tidak mempengaruhi Ketentuan lain untuk tetap berlaku..</li>
          <li>Program ini tidak dipungut biaya apa pun. Hati-hati penipuan.</li>
          <li>Jika terjadi force majeure, PT. NESTL&Eacute; Indonesia berhak menunda/membatalkan keikustertaan.</li>
        </ol>
      </div>
    </div>
  </div>
</div>



<script src="asset/default.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="asset/libs/slider.js"></script>
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

$('#file_input').change(function() {
  //$('#title').val(this.value ? this.value.match(/([\w-_]+)(?=\.)/)[0] : '');
  $('#title').text(this.files && this.files.length ? this.files[0].name : '');

})

$('#userdetail').submit(function(event){
    if($('#terms').is(':checked') == false){
        event.preventDefault();
        alert("By signing up, you must accept our terms and conditions!");
        return false;
    }
});

</script>
</body>
</html>
