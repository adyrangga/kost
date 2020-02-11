<!-- banner -->
<div class="banner">    	   
    <img src="<?php url(); ?>asset/template/images/photos/banner.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Kemuning Kost</h1>
                <p class="animated fadeInUp">Kosan Terbaik daerah Losari Brebes, Jawa Tengah, Indonesia.</p>                
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->

<!-- kost intro -->
<div id="intro" class="services wowload fadeInUp">
<div class="container">
    <?php $this->load->view('comp_introduction'); ?>
</div>
</div>
<!-- kost intro -->

<!-- kost list -->
<div class="spacer services wowload fadeInUp">
    <div class="container">
        <?php $this->load->view('comp_kost_list'); ?>
    </div>
</div>
<!-- kost list -->

<!-- information -->
<div id="information" class="spacer reserve-info ">
    <div class="container">
        <?php $this->load->view('comp_information'); ?>
    </div>
</div>
<!-- information -->