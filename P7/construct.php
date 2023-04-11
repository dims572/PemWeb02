<?php
class Persegi
{
    public $sisi;

    function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    function hitungluas()
    {
        return $this->sisi * $this->sisi;
    }
}
$objek = new Persegi(7);
echo $objek->hitungLuas();