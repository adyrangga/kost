<!-- componen information view -->
<div class="row">
    <div class="col-sm-7 col-md-8">
        <div class="embed-responsive embed-responsive-16by9">
            <a href="" onclick="klik_maps(); return false">
                <img class="embed-responsive-item" width="100%" src="<?php url(); ?>asset/template/images/maps_kemuning_kost.png">
            </a>
        </div>
    </div>
    <div class="col-sm-5 col-md-4">
    <h3>Perlu Informasi Lebih Lanjut?</h3>
    <h4>Tanyakan Saja..</h4>
        <form role="form" class="wowload fadeInRight" onsubmit="submit_ask();return false">
            <div class="form-group">
                <input type="text" id="tx_name" class="form-control" placeholder="Nama" required onkeypress="return isAlfa(event)">
            </div>
            <div class="form-group">
                <input type="Phone" id="tx_phone" class="form-control" placeholder="Nomor Telepon" required onkeypress="return isNumber(event);">
            </div>
            <div class="form-group">
                <textarea class="form-control" id="tx_ket" placeholder="Pertanyaan Anda.." rows="6" required style="resize:none;"></textarea>
            </div>
            <div class="form-group">
                <span style="font-style:italic;"><small>*Pertanyaan Akan Dikirim via WhatsApp</small></span>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
<!-- componen information view -->