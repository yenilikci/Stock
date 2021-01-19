<?php

class excel extends controller
{
    public function export()
    {
        require_once 'Classes/PHPExcel.php';
        $Excel = new PHPExcel();
        $tumUrunler = $this->model('productModel')->listview();
        $Excel->getActiveSheet()->setTitle('Sayfa1');
        $Excel->getActiveSheet()->setCellValue('A1','Ürün Adı');
        $Excel->getActiveSheet()->setCellValue('B1','Ürün Kategori');
        $Excel->getActiveSheet()->setCellValue('C1','Ürün Özellikleri');
        $Excel->getActiveSheet()->setCellValue('D1','Eklenme Tarihi');

        $i = 2;
        foreach ($tumUrunler as $key => $value) {
            $ozellikler = $this->ozellikOlustur(json_decode($value['ozellikler'],true));
            $kategoriData = $this->model('categoryModel')->getData($value['kategoriid']);
            $Excel->getActiveSheet()->setCellValue('A'.$i,$value['ad']);
            $Excel->getActiveSheet()->setCellValue('B'.$i,$kategoriData['ad']);
            $Excel->getActiveSheet()->setCellValue('C'.$i,$ozellikler);
            $Excel->getActiveSheet()->setCellValue('D'.$i,$value['tarih']);
            $i++;
        }

        $Kaydet = PHPExcel_IOFactory::createWriter($Excel,'Excel2007');
        $fileName = rand(1,9000).".xlsx";
        $Kaydet->save($fileName);
    }

    public function ozellikOlustur($array = [])
    {
        $returnArray = [];
        foreach ($array as $key => $value)
        {
            $returnArray[] = $value['name'].":".$value['value'];
        }
        return implode(',',$returnArray);
    }
}

?>