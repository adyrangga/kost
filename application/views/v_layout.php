<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Kost Losari | Losari - Brebes - Jawa Tengah</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- bootstrap -->
<link rel="stylesheet" href="<?php url(); ?>asset/template/assets/bootstrap/css/bootstrap.min.css" />

<!-- uniform -->
<link type="text/css" rel="stylesheet" href="<?php url(); ?>asset/template/assets/uniform/css/uniform.default.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="<?php url(); ?>asset/template/assets/wow/animate.css" />


<!-- gallery -->
<link rel="stylesheet" href="<?php url(); ?>asset/template/assets/gallery/blueimp-gallery.min.css">


<!-- favicon -->
<link rel="shortcut icon" href="<?php url(); ?>asset/template/assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php url(); ?>asset/template/assets/images/favicon.png" type="image/x-icon">

<link rel="stylesheet" href="<?php url(); ?>asset/template/assets/style.css">

</head>

<body id="home">


<!-- top 
  <form class="navbar-form navbar-left newsletter" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Your Email Id Here">
        </div>
        <button type="submit" class="btn btn-inverse">Subscribe</button>
    </form>
 top -->

  <!-- header -->
  <nav class="navbar  navbar-default" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="<?php url(); ?>asset/template/images/logo.png"  alt="holiday crown"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
        
        <ul class="nav navbar-nav">        
          <li><a href="index.php">Beranda </a></li>
          <li><a href="#intro" class="arrow-nav scroll wowload">Intro</a></li>
          <li><a href="#information" class="arrow-nav scroll wowload">Kontak Kami</a></li>
        </ul>
      </div><!-- Wnavbar-collapse -->
    </div><!-- container-fluid -->
  </nav>
  <!-- header -->

  <!-- contents -->
  <?= $contents ?>

  <!-- footer -->
  <footer class="spacer">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12">
                      <h4>Kontak Kami</h4>
                      <p>Alamat : Jl. Pulosaren Gang Basuki RT:03 RW:01, Desa Losari Lor, Kecamatan Losari, Kabupaten Brebes, Jawa Tengah, Indonesia 52255</p>
                      <p>Phone  : 081803933723</p>
                  </div>
              </div>
              <!--/.row--> 
          </div>
          <!--/.container-->    
      
      <!--/.footer-bottom--> 
  </footer>

  <div class="text-center copyright">Powered by <a href="http://thebootstrapthemes.com">thebootstrapthemes.com</a></div>

  <a href="#home" class="toTop scroll" title="back to top"><i class="fa fa-angle-up"></i></a>




  <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
  <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
      <!-- The container for the modal slides -->
      <div class="slides"></div>
      <!-- Controls for the borderless lightbox -->
      <h3 class="title">title</h3>
      <a class="prev">‹</a>
      <a class="next">›</a>
      <a class="close">×</a>
      <!-- The modal dialog, which will be used to wrap the lightbox content -->    
  </div>





    <script src="<?php url(); ?>asset/template/assets/jquery.js"></script>

    <!-- wow script -->
    <script src="<?php url(); ?>asset/template/assets/wow/wow.min.js"></script>

    <!-- uniform -->
    <script src="<?php url(); ?>asset/template/assets/uniform/js/jquery.uniform.js"></script>


    <!-- boostrap -->
    <script src="<?php url(); ?>asset/template/assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

    <!-- jquery mobile -->
    <script src="<?php url(); ?>asset/template/assets/mobile/touchSwipe.min.js"></script>

    <!-- jquery mobile -->
    <script src="<?php url(); ?>asset/template/assets/respond/respond.js"></script>

    <!-- gallery -->
    <script src="<?php url(); ?>asset/template/assets/gallery/jquery.blueimp-gallery.min.js"></script>


    <!-- custom script -->
    <script src="<?php url(); ?>asset/template/assets/script.js"></script>


  <!-- custome script -->
  <script type="text/javascript">
      // detect and return only number
      function isNumber(evt) {
          evt = (evt) ? evt : window.event;
          var charCode = (evt.which) ? evt.which : evt.keyCode;

          if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
          }
          return true;
      }

      function isAlfa(evt) {
          evt = (evt) ? evt : window.event;
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode > 31 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122)) {
              return false;
          }
          return true;
      }

      // handle submit ask, buka ab baru untuk kirim pertanyaan via whatsapp
      function submit_ask() {
          var txname =  $('#tx_name').val();
          var txphone = $('#tx_phone').val();
          var txket = $('#tx_ket').val();
          var textask = htmlEntities(txname) + " - " + htmlEntities(txphone) + "\n" + htmlEntities(txket);
          var ask = encodeURI(textask);
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('Welcome/ask_action')?>",
            dataType : "JSON",
            data : {txdata:ask},
                success: function(data){
                  window.open(data);
                }
          });
          return false;
      }

      function htmlEntities(str) {
          return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
      }

      // open maps in new windows
      function klik_maps() {
          $.ajax({
            type : "GET",
            url  : "<?php echo base_url('Welcome/maps_action')?>",
            dataType : "JSON",
                success: function(data){
                  window.open(data);
                }
          });
          return false;
      }

      function focusContact() {
        $('#tx_name').focus();
      }
  </script>
  </body>
</html>

