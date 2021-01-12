
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ürün Rapor Listesi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ad</th>
                                    <th>Toplam Giriş</th>
                                    <th>Toplam Giren Ürün</th>
                                    <th>Toplam Çıkış</th>
                                    <th>Toplam Çıkan Ürün</th>
                                    <th>Fiyat Kalan</th>
                                    <th>Ürün Kalan</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (count($params['data']) != 0)
                                {
                                    foreach ($params['data'] as $key => $value)
                                    {
                                        $toplamGiren =  $this->model('reportModel')->girenUrunToplam($value['id']);
                                        $toplamCikan =  $this->model('reportModel')->cikanUrunToplam($value['id']);
                                        $toplamKalan = $toplamCikan-$toplamGiren;

                                        $girenAdet = $this->model('reportModel')->girenUrunAdet($value['id']);
                                        $cikanAdet = $this->model('reportModel')->cikanUrunAdet($value['id']);
                                        $toplamAdet = $girenAdet - $cikanAdet;

                                        ?>
                                        <tr>
                                            <td><?= $value['id']?></td>
                                            <td><?= $value['ad']?></td>
                                            <td>-<?=$toplamGiren;?></td>
                                            <td><?=$girenAdet;?></td>
                                            <td><?=$toplamCikan;?></td>
                                            <td><?=$cikanAdet;?></td>
                                            <td><?=$toplamKalan;?></td>
                                            <td><?=$toplamAdet;?></td>
                                        </tr>

                                        <?php
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
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
<!-- /.control-sidebar -->
