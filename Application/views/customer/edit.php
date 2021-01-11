<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <?php
                    if (isset($_SESSION['statu']))
                    {
                        ?>
                        <div class="alert alert-info"><?=$_SESSION['statu'];?></div>
                        <?php
                    }
                    ?>
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> <i class="fas fa-users mr-1"></i>
                            "<?=$params['data']['ad'];?> <?=$params['data']['soyad'];?>" Müşterisini Düzenle</h3>
                        </div>

                        <form role="form" action="<?=SITE_URL;?>/customer/update/<?=$params['data']['id']?>" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Adı</label>
                                    <input type="text" class="form-control" name="ad" value="<?=$params['data']['ad']?>">
                                </div>

                                <div class="form-group">
                                    <label>Soyad</label>
                                    <input type="text" class="form-control" name="soyad" value="<?=$params['data']['soyad']?>">
                                </div>

                                <div class="form-group">
                                    <label>Şirket</label>
                                    <input type="text" class="form-control" name="sirket" value="<?=$params['data']['sirket']?>">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="<?=$params['data']['email']?>">
                                </div>

                                <div class="form-group">
                                    <label>Telefon</label>
                                    <input type="text" class="form-control" name="telefon" value="<?=$params['data']['telefon']?>">
                                </div>

                                <div class="form-group">
                                    <label>Adres</label>
                                    <input type="text" class="form-control" name="adres" value="<?=$params['data']['adres']?>">
                                </div>

                                <div class="form-group">
                                    <label>Tc</label>
                                    <input type="text" class="form-control" name="tc" value="<?=$params['data']['tc']?>">
                                </div>

                                <div class="form-group">
                                    <label>Not</label>
                                    <input type="text" class="form-control" name="notu" value="<?=$params['data']['notu']?>">
                                </div>

                                <button type="submit" class="btn btn-lg btn-primary">Düzenle</button>
                        </form>
                    </div>


                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>