
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
                            <h3 class="card-title"><i class="fas fa-cash-register mr-1"></i> Yeni Kasa Oluştur</h3>
                        </div>

                        <form role="form" action="<?=SITE_URL;?>/stockcase/send" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Kasa Adı</label>
                                    <input type="text" class="form-control" name="ad">
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
