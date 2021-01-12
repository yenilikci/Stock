
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
                            <h3 class="card-title"><i class="fas fa-layer-group mr-1"></i>  Stok İşlemi Düzenle</h3>
                        </div>

                        <form role="form" action="<?=SITE_URL;?>/stock/update/<?=$params['data']['id']?>" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Ürün Seçimi</label>
                                    <select name="urunid" class="form-control">
                                        <?php
                                        if (count($params['urunler']) != 0)
                                        {
                                            foreach ($params['urunler'] as $key => $value)
                                            {
                                                ?>
                                                <option <?php if ($value['id'] == $params['data']['urunid']){echo 'selected';}?> value="<?=$value['id']?>"><?=$value['ad']?></option>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo '<option value="0">Ürün Yok!</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Müşteri Seçimi</label>
                                    <select name="musteriid" class="form-control">
                                        <option <?php if($params['data']['musteriid'] == 0){echo 'selected';}?> value="0">Müşteri Seçme</option>
                                        <?php
                                        if (count($params['musteriler']) != 0)
                                        {
                                            foreach ($params['musteriler'] as $key => $value)
                                            {
                                                ?>
                                                <option <?php if ($value['id'] == $params['data']['musteriid']){echo 'selected';}?> value="<?=$value['id']?>"><?=$value['ad']?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>İşlem Seçimi</label>
                                    <select name="islemtipi" class="form-control">
                                        <option <?php if($params['data']['islemtipi'] == 0)echo 'selected'?> value="0">Stok Giriş</option>
                                        <option <?php if($params['data']['islemtipi'] == 1)echo 'selected'?> value="1">Stok Çıkış</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Ürün Adeti</label>
                                    <input type="text" name="adet" class="form-control" value="<?=$params['data']['adet']?>">
                                </div>

                                <div class="form-group">
                                    <label>Ürün Birim Fiyat</label>
                                    <input type="text" name="fiyat" class="form-control" value="<?=$params['data']['fiyat']?>">
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
