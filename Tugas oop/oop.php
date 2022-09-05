<?php

class Kalkulator
{
    public float $daya = 0;
    // public static float $daya = 0;

    public function isiDaya($dayaMasuk)
    {
        $this->daya = $this->daya + $dayaMasuk;
        // self::$daya = self::$daya + $dayaMasuk;
    }

    public function tambah($angka1, $angka2)
    {
        // if($this->cekDaya(1) == true)
        // {
        //     echo $angka1 + $angka2;
        // }
        echo ($this->cekDaya(1) == true ? $angka1 + $angka2 : $this->pesanDayaTidakCukup());
    }

    public function kurang($angka1, $angka2)
    {
        echo ($this->cekDaya(1) == true ? $angka1 - $angka2 : $this->pesanDayaTidakCukup());
    }

    public function kali($angka1, $angka2)
    {
        echo ($this->cekDaya(1) == true ? $angka1 * $angka2 : $this->pesanDayaTidakCukup());
    }

    public function bagi($angka1, $angka2)
    {
        if($this->cekDaya(1) == true)
        {
            if ($angka2 !== 0)
            {
                echo $angka1 / $angka2;
            }
            else 
            {
                echo "Tidak bisa dilakukan pembagian dengan angka 0";
            }
        }
        else 
        {
            echo ($this->pesanDayaTidakCukup());
        }
    }

    private function pesanDayaTidakCukup()
    {
        return "Daya tidak cukup";
    }

    private function cekDaya($konsumsiDaya)
    {
        if ($this->daya >= $konsumsiDaya)
        {
            $this->daya -= $konsumsiDaya;
            return true;
        }

        echo $pesan;
        return false;
    }
}

$objekKalkulator = new Kalkulator();
$objekKalkulator->isiDaya(100);
$objekKalkulator->tambah(1, 4);

?>