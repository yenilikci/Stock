
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
                    <a href="<?=SITE_URL?>/excel/export" class="btn btn-info">Excel Olarak İndir</a>
                    <div class="card mt-2">
                        <div class="card-header">
                            <h3 class="card-title">Ürün Listesi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ad</th>
                                    <th>Kategori</th>
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
                                        $categoryInfo = $this->model('categoryModel')->getData($value['kategoriid']);
                                        ?>
                                        <tr>
                                            <td><?= $value['id']?></td>
                                            <td><?= $value['ad']?></td>
                                            <td><?=$categoryInfo['ad'];?></td>
                                            <td><a class="btn btn-warning btn-sm" href="<?=SITE_URL;?>/product/edit/<?=$value['id']?>">Düzenle</a></td>
                                            <td><a class="btn btn-danger btn-sm" href="<?=SITE_URL;?>/product/delete/<?=$value['id']?>">Sil</a></td>
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
