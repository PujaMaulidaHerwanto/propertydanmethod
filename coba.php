<?php


class makanan {

    public $nama = "Tiramisu";
    public $jenis = "Kue";
    public $rasa = "Kopi";
    public $harga = 25000;

    public function getLabel(){
        return "$this->nama, $this->jenis, $this->rasa, $this->harga ";
    }

}
//membuat object instance dari class

$roti = new makanan();
$roti ->nama = "Black Choco Almond";
$roti ->jenis = "Donat";
$roti ->rasa = "Coklat";
$roti ->harga = 5000;
echo "Kue : " .$roti->getLabel();

echo "<br>";

$roti2 = new makanan();
$roti2 ->nama = "Roti Bakar";
$roti2 ->jenis = "Roti";
$roti2 ->rasa = "Sroberi";
$roti2 ->harga = 3000;
echo "Kue : " .$roti2->getLabel();

echo "<br>";

$roti3 = new makanan();
$roti3 ->nama = "Black Forest";
$roti3 ->rasa = "Coklat";
echo "Kue : " .$roti3->getLabel();

?>
