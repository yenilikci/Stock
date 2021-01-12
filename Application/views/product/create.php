
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
                            <h3 class="card-title"><i class="fas fa-box"></i> Yeni Ürün Oluştur</h3>
                        </div>

                        <form role="form" action="<?=SITE_URL;?>/product/send" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Ürün Adı</label>
                                    <input type="text" class="form-control" name="ad">
                                </div>

                                <div class="form-group">
                                    <label>Ürün Kategorisi</label>
                                    <select name="kategoriId" class="form-control">
                                        <?php
                                        foreach ($params['category'] as $key => $value)
                                        {
                                            ?>
                                            <option value="<?=$value['id'];?>"><?=$value['ad'];?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="d-block">Ürün Özellikleri</label>
                                    <button id="yeniEkle" class="btn btn-success" type="button">Yeni Özellik Oluştur</button>
                                    <div class="row my-1" id="urunOzellikAlani"></div>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js">
</script>
<script>
    $(document).ready(function (){
        var i = $(".selectOzellik").length;
        $('#yeniEkle').click(function (){
            var temp = '<div class="col-md-6"><label>Ürün Özellik Adı</label><input type="text" class="form-control selectOzellik" name="ozellik['+i+'][name]"></div>'
            + '<div class="col-md-6"><label>Ürün Özellik Değeri</label><input type="text" class="form-control" name="ozellik['+i+'][value]"></div>';
            $('#urunOzellikAlani').append(temp);
            i++;
        })
    })
</script>