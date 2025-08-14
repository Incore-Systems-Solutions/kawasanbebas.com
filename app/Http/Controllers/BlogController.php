<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function kawasanBebas()
    {
        return view('blog.kawasan-bebas', [
            'metaTitle' => 'Kawasan Bebas: Pusat Perdagangan dan Investasi Tanpa Hambatan | kawasanbebas.com',
            'metaDescription' => 'Pelajari konsep kawasan bebas yang menawarkan kemudahan perdagangan, investasi, dan insentif fiskal untuk mendorong pertumbuhan ekonomi.',
            'metaKeywords' => 'kawasan bebas, perdagangan bebas, investasi, insentif pajak, ekonomi, it inventory, bea cukai.'
        ]);
    }

    public function pengertianKawasanBebas()
    {
        return view('blog.pengertian-kawasan-bebas', [
            'metaTitle' => 'Pengertian Kawasan Bebas: Definisi dan Karakteristik | kawasanbebas.com',
            'metaDescription' => 'Ketahui pengertian kawasan bebas, ciri-cirinya, dan perannya dalam mendukung perdagangan internasional.',
            'metaKeywords' => 'pengertian kawasan bebas, definisi kawasan bebas, karakteristik, perdagangan, it inventory, bea cukai.'
        ]);
    }

    public function manfaatKawasanBebas()
    {
        return view('blog.manfaat-kawasan-bebas', [
            'metaTitle' => 'Manfaat Kawasan Bebas untuk Ekonomi dan Bisnis | kawasanbebas.com',
            'metaDescription' => 'Temukan berbagai manfaat kawasan bebas bagi dunia usaha, mulai dari efisiensi biaya hingga perluasan pasar.',
            'metaKeywords' => 'manfaat kawasan bebas, keuntungan kawasan bebas, peluang bisnis, efisiensi, it inventory, bea cukai.'
        ]);
    }

    public function regulasiKawasanBebas()
    {
        return view('blog.regulasi-kawasan-bebas', [
            'metaTitle' => 'Regulasi Kawasan Bebas: Kebijakan dan Aturan | kawasanbebas.com',
            'metaDescription' => 'Pelajari regulasi yang mengatur kawasan bebas agar bisnis Anda tetap patuh dan optimal.',
            'metaKeywords' => 'regulasi kawasan bebas, kebijakan, aturan, perdagangan bebas, it inventory, bea cukai.'
        ]);
    }

    public function fasilitasKawasanBebas()
    {
        return view('blog.fasilitas-kawasan-bebas', [
            'metaTitle' => 'Fasilitas Kawasan Bebas: Dukungan untuk Bisnis dan Industri | kawasanbebas.com',
            'metaDescription' => 'Ketahui berbagai fasilitas yang disediakan di kawasan bebas untuk mendukung kelancaran perdagangan dan industri.',
            'metaKeywords' => 'fasilitas kawasan bebas, sarana, infrastruktur, dukungan bisnis, it inventory, bea cukai.'
        ]);
    }

    public function kawasanIndustri()
    {
        return view('blog.kawasan-industri', [
            'metaTitle' => 'Kawasan Industri: Pusat Produksi dan Investasi | kawasanbebas.com',
            'metaDescription' => 'Jelajahi peran kawasan industri dalam pengembangan ekonomi dan daya saing produksi nasional.',
            'metaKeywords' => 'kawasan industri, produksi, investasi, manufaktur, it inventory, bea cukai.'
        ]);
    }

    public function perdaganganBebas()
    {
        return view('blog.perdagangan-bebas', [
            'metaTitle' => 'Perdagangan Bebas: Peluang dan Tantangan Global | kawasanbebas.com',
            'metaDescription' => 'Pahami konsep perdagangan bebas, manfaatnya, dan dampaknya terhadap perekonomian global.',
            'metaKeywords' => 'perdagangan bebas, ekonomi global, ekspor impor, liberalisasi perdagangan, it inventory, bea cukai.'
        ]);
    }

    public function eksporImpor()
    {
        return view('blog.ekspor-impor', [
            'metaTitle' => 'Ekspor Impor: Panduan untuk Pelaku Bisnis | kawasanbebas.com',
            'metaDescription' => 'Pelajari strategi dan regulasi ekspor impor untuk memperluas pasar bisnis Anda.',
            'metaKeywords' => 'ekspor impor, perdagangan internasional, logistik, pasar global, it inventory, bea cukai.'
        ]);
    }

    public function insentifPajak()
    {
        return view('blog.insentif-pajak', [
            'metaTitle' => 'Insentif Pajak: Keuntungan untuk Perusahaan di Kawasan Bebas | kawasanbebas.com',
            'metaDescription' => 'Cari tahu berbagai insentif pajak yang diberikan kepada perusahaan yang beroperasi di kawasan bebas.',
            'metaKeywords' => 'insentif pajak, potongan pajak, kawasan bebas, keuntungan fiskal, it inventory, bea cukai.'
        ]);
    }

    public function kawasanEkonomiKhusus()
    {
        return view('blog.kawasan-ekonomi-khusus', [
            'metaTitle' => 'Kawasan Ekonomi Khusus: Pertumbuhan dan Peluang | kawasanbebas.com',
            'metaDescription' => 'Ketahui potensi kawasan ekonomi khusus dalam meningkatkan investasi dan ekspor.',
            'metaKeywords' => 'kawasan ekonomi khusus, investasi, ekspor, peluang bisnis, it inventory, bea cukai.'
        ]);
    }

}
