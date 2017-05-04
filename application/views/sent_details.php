<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Detail Pengiriman</title>

    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
</head>
<body style="margin-top: 60px; background: #FFFFFF">
<!-- NAVBAR -->
<nav class="navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('login'); ?>"><span class="glyphicon glyphicon-chevron-left"></span><span  id="registration">  Detail Pengiriman</span></a>
        </div>
    </div><!--/.container -->
</nav>
<!--<div class="col-lg-12 col-lg-offset-0 bg-register">-->
<!--    <img class="img-responsive" src="--><?php //echo base_url('assets/images/bg-shirt.png'); ?><!--" id="img-bg-regist">-->
<!--</div>-->
<div class="col-md-4 col-md-offset-4 form-login">
    <div class="outter-form-register">
        <form action="<?php echo base_url('Daftar/proses'); ?>" class="inner-login" method="POST" enctype="multipart/form-data">
            <h5 class="title-login"><strong>Tujuan Pengiriman</strong></h5>
            <p style="color: red;">
                <?php
                if (empty($warning)) {
                    echo "";
                }else{
                    echo $warning;
                }
                ?>
            </p>
            <!-- fullname -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                            <input name="fullname" type="text" class="form-control" placeholder="Nama Lengkap" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- province -->
                <div class="col-xs-6">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker"></span></span>
                            <select class="form-control" name="province">
                                <option>Propinsi</option>
                                <option>Jawa Timur</option>
                                <option>Jawa Barat</option>
                                <option>Jawa Tengah</option>
                                <option>Sumatera Barat</option>
                                <option>Sumatera Selatan</option>
                                <option>Kalimantan Timur</option>
                                <option>Maluku Utara</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- city -->
                <div class="col-xs-6">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker"></span></span>
                            <select class="form-control" name="city">
                                <option>Kota</option>
                                <option>Banyuwangi</option>
                                <option>Madiun</option>
                                <option>Malang</option>
                                <option>Surabaya</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-globe"></span></span>
                            <input name="kodepos" type="text" class="form-control" placeholder="Kode Pos" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-phone"></span></span>
                            <input name="nomorhp" type="text" class="form-control" placeholder="Nomor Handphone" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                            <input name="email" type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker"></span></span>
                            <textarea name="address" class="form-control" rows="2" cols="50" placeholder="Alamat" aria-describedby="basic-addon1"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-login">
                    <div class="outter-form-sent">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="row">
                                   <div class="col-xs-4">
                                       <div class="col-xs-12"></div>
                                       <div class="col-xs-12">
                                           <img id="img-no-bg" src="<?php echo base_url('assets/images/jne-logo.png'); ?>" alt="" class="img-responsive img-kurir align-left">
                                       </div>
                                       <div class="col-xs-12"></div>
                                   </div>
                                   <div class="col-xs-8">
                                       <div class="col-xs-12">
                                           <div class="col-xs-12">
                                               <div class="checkbox box-sent">
                                                   <input type="checkbox" id="oke">
                                                   <label for="oke"><strong class="small">JNE OKE</strong></label>
                                               </div>
                                           </div>
                                           <div class="col-xs-12">
                                               <div class="checkbox box-sent">
                                                   <input type="checkbox" id="reguler">
                                                   <label for="reguler"><strong class="small">JNE Reguler</strong></label>
                                               </div>
                                           </div>
                                           <div class="col-xs-12">
                                               <div class="checkbox box-sent">
                                                   <input type="checkbox" id="express">
                                                   <label for="express"><strong class="small">JNE Express</strong></label>
                                               </div>
                                           </div>

                                       </div>
                                   </div>
                                </div>
                            </div>
                        </div>

                        <div class="row row-top-border">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="col-xs-12"></div>
                                        <div class="col-xs-12">
                                            <img id="img-no-bg" src="<?php echo base_url('assets/images/pos-logo.png'); ?>" alt="" class="img-responsive img-kurir align-left">
                                        </div>
                                        <div class="col-xs-12"></div>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="col-xs-12">
                                            <div class="col-xs-12">
                                                <div class="checkbox box-sent">
                                                    <input type="checkbox" id="poskilat">
                                                    <label for="poskilat"><strong class="small">Pos Kilat Khusus</strong></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-login">
                    <div class="outter-form-sent">
                        <div class="row">
                            <div class="col-xs-5 text-right">
                                <h5 class="small">Harga barang :</h5>
                            </div>
                            <div class="col-xs-7 text-right">
                                <h5 class="small text-right">Rp. 500.000</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5 text-right">
                                <h5 class="small">Biaya kirim :</h5>
                            </div>
                            <div class="col-xs-7 text-right">
                                <h5 class="small text-right">Rp. 20.000</h5>
                            </div>
                        </div>
                        <div class="line-separator"></div>
                        <div class="row">
                            <div class="col-xs-5 text-right">
                                <h5 class="small"><strong>Total :</strong></h5>
                            </div>
                            <div class="col-xs-7 text-right">
                                <h5 class="small text-right">Rp. 20.000</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="alert alert-warning" role="alert">
                        <div class="checkbox box-aggrement center-block">
                            <input type="checkbox" id="agreement">
                            <label for="agreement" class="small text-justify">Saya bersedia pesanan ini diganti dengan barang yang sama oleh Throwapp apabila pesanan ini ditolak/tidak ditanggapi oleh penjual.</label>
                        </div>
                    </div>
                </div>
            </div>

            <input name="lanjut" type="submit" class="btn btn-block btn-custom-yellow" value="Lanjut" />
        </form>
    </div>
</div>

<script src="<?php echo base_url('assets/assets/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
</body>
</html>