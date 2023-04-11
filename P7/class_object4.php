<?php
class Balok
{
    public $panjang, $tinggi, $lebar;

    public function hitungVolume()
    {
        return $this->panjang * $this->tinggi * $this->lebar;
    }

}
$objekBalok = new Balok;
$objekBalok->panjang = 18;
$objekBalok->tinggi = 20;
$objekBalok->lebar = 12;
echo "Volume Balok = ";
echo round($objekBalok->hitungVolume());
echo "cm";
echo "<br>";

class Bola
{
    public function hitungVolume()
    {
        return 4/3 * 3.14 * pow(18,3);
    }
}
$objekBola = new Bola;
echo "Volume Bola = ";
echo round($objekBola->hitungVolume());