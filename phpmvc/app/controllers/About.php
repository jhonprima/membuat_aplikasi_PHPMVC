<?php

class About {
    public function index($nama = 'JHON PRIMA PANJAITAN', $pekerjaan = 'Mahasiswa', $umur = 32)
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan. Saya berumur $umur tahun.";
    }
    public function page()
    {
        echo 'About/page';
    }
}