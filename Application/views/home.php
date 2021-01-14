
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Anasayfa</h1>
                </div><!-- /.col -->
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

                <div class="col-lg-4">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?=$this->model('reportModel')->toplamGelir();?></h3>

                            <p>Toplam Gelir</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-lira-sign"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3><?=$this->model('reportModel')->toplamGider();?></h3>

                            <p>Toplam Gider</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-lira-sign"></i></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?=$this->model('reportModel')->toplamGelir()-$this->model('reportModel')->toplamGider();?></h3>

                            <p>Kalan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-wallet"></i>
                        </div>
                    </div>
                </div>


                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
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
<!-- /.control-sidebar -->
