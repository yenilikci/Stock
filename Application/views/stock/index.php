
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
                            <h3 class="card-title">Stok İşlemleri Listesi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ürün Adı</th>
                                    <th>Kasa</th>
                                    <th>İşlem Tipi</th>
                                    <th>Adet</th>
                                    <th>Toplam Fiyat</th>
                                    <th>Düzenle</th>
                                    <th>Kaldır</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (count($params['data']) != 0)
                                {
                                    foreach ($params['data'] as $key => $value)
                                    {
                                        $urunler = $this->model('productModel')->getData($value['urunid']);
                                        $kasalar = $this->model('stockCaseModel')->getData($value['kasaid']);
                                        if($value['islemtipi'] == 0){$islem = "Stok Giriş";  $toplamFiyat = "-".$value['adet'] * $value['fiyat'];}else{$islem = "Stok Çıkış";  $toplamFiyat = $value['adet'] * $value['fiyat'];}
                                        ?>
                                        <tr>
                                            <td><?= $value['id']?></td>
                                            <td><?= $urunler['ad']?></td>
                                            <th><?= $kasalar['ad']?></th>
                                            <td><?= $islem ?></td>
                                            <td><?= $value['adet'];?></td>
                                            <td><?= $toplamFiyat ?></td>
                                            <td><a class="btn btn-warning btn-sm" href="<?=SITE_URL;?>/stock/edit/<?=$value['id']?>">Düzenle</a></td>
                                            <td><a class="btn btn-danger btn-sm" href="<?=SITE_URL;?>/stock/delete/<?=$value['id']?>">Sil</a></td>
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
