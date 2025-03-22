<?php namespace App\Controllers;

class page extends  BaseController
{
    public function about()
    {
        echo "about page";
    }
    public function contact()
    {
        echo "contact page";
    }
    public function faqs()
    {
        echo "faqs page";
    }
    public function tos()
    {
        echo "Halaman Term of Service";
    }
    public function  biodata()
    {
        echo "nama : muhammad fahmilhaq";
        echo "<br>Alamat : mojowarno jombang<br>";
        echo "Ttl : Jombang, 15 Februari 2004";
        echo "<br>Jenis Kelamin : Laki-Laki<br>";
        echo "Agama : Islam";
        echo "No Hp : 0123456789";
    }
}