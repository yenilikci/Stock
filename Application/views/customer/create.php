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
                    <?php helper::flashDataView("statu"); ?>

                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> <i class="fas fa-users mr-1"></i> Yeni Müşteri Oluştur</h3>
                        </div>

                        <form role="form" action="<?=SITE_URL;?>/customer/send" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Adı</label>
                                    <input type="text" class="form-control" name="ad">
                                </div>

                                <div class="form-group">
                                    <label>Soyad</label>
                                    <input type="text" class="form-control" name="soyad">
                                </div>

                                <div class="form-group">
                                    <label>Şirket</label>
                                    <input type="text" class="form-control" name="sirket">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email">
                                </div>

                                <div class="form-group">
                                    <label>Telefon</label>
                                    <input type="text" class="form-control" name="telefon">
                                </div>

                                <div class="form-group">
                                    <label>Adres</label>
                                    <input type="text" class="form-control" name="adres">
                                </div>

                                <div class="form-group">
                                    <label>Tc</label>
                                    <input type="text" class="form-control" name="tc">
                                </div>

                                <div class="form-group">
                                    <label>Not</label>
                                    <input type="text" class="form-control" name="notu">
                                </div>

                                <button type="submit" class="btn btn-lg btn-primary">Ekle</button>
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