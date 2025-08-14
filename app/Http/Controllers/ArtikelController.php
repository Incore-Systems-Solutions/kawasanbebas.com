<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Category;
use App\Services\ArtikelServices;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    //

    protected $artikelServices;
    public function __construct(ArtikelServices $artikelServices)
    {
        $this->artikelServices = $artikelServices;
    }

    public function index(){
        $resp = $this->artikelServices->fetchIndex();

        return view('pages.artikel.index', [
            'data' => $resp['data'],
        ]);
    }

    public function detailArtikel($slug)
    {
        $resp = $this->artikelServices->fetchDetail($slug);

        if ($resp['status'] != 'success') {
            return redirect()->back();
        }

        $data = $resp['data'];
        $content = $data['content'] ?? '';
        $maxWords = 900;

        // ====== META DESCRIPTION ======
        $text = strip_tags($content);
        $words = preg_split('/\s+/', $text);
        $limitedWords = array_slice($words, 0, $maxWords);
        $descriptionText = implode(' ', $limitedWords);
        $description = Str::limit(trim($descriptionText), 160, '');

        // ====== META KEYWORDS ======
        $stopwords = [
            'dan', 'yang', 'untuk', 'dengan', 'atau', 'dari', 'pada', 'ini', 'itu', 'adalah',
            'sebagai', 'ke', 'di', 'dalam', 'oleh', 'akan', 'karena', 'juga', 'agar', 'maka',
            'sudah', 'belum', 'tidak', 'bisa', 'harus', 'lebih', 'kurang', 'namun', 'meskipun', 'secara', 'dapat', 'memungkinkan', 'menjadi', 'bahwa', 'mereka', 'penting', 'tetap', 'lanjut', 'terhadap', 'tepat', 'seperti', 'keseluruhan', 'meningkatkan', 'banyak', 'semakin', 'bagaimana', 'mengelola', 'berbagai', 'berlaku', 'solusi', 'anggota', 'dirancang', 'fitur', 'jarak', 'membantu', 'antara', 'terstruktur', 'setiap', 'melacak', 'memiliki', 'mengurangi'
        ];

        $industryTerms = [
            'kawasan berikat', 'gudang berikat', 'izin kawasan berikat', 'pengurusan izin', 'fasilitas kawasan industri',
            'sistem inventory', 'manajemen stok', 'pengawasan barang', 'barang impor', 'barang ekspor',
            'pengeluaran barang', 'pemasukan barang', 'kepabeanan', 'dokumen bea cukai', 'prosedur ekspor impor',
            'logistik internasional', 'transportasi logistik', 'automasi logistik', 'custom clearance', 'jaminan bea masuk',
            'pabean digital', 'modul inventory', 'peraturan bea cukai', 'sistem ERP kawasan berikat', 'konsultan kawasan berikat'
        ];


        $plainText = strtolower(strip_tags($content));
        $foundIndustryTerms = array_filter($industryTerms, fn($term) => str_contains($plainText, $term));

        $words = preg_split('/\s+/', $plainText);
        $limitedWords = array_slice($words, 0, $maxWords);

        $filteredWords = array_filter(array_map(function ($word) use ($stopwords) {
            $clean = trim(preg_replace('/[^a-z0-9-]/', '', $word));
            return (!in_array($clean, $stopwords) && strlen($clean) > 4) ? $clean : null;
        }, $limitedWords));

        $wordCounts = array_count_values($filteredWords);
        arsort($wordCounts);
        $autoKeywords = array_slice(array_keys($wordCounts), 0, 10);

        $keywordsfix = implode(', ', array_unique(array_merge($foundIndustryTerms, $autoKeywords)));

        // ====== RETURN VIEW ======
        return view('pages.artikel.detail', [
            'slug' => $slug,
            'data' => $data,
            'meta_description' => $description,
            'meta_keywords' => $keywordsfix,
        ]);
    }
    
}
