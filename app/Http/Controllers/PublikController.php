<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\KategoriArtikel;

class PublikController extends Controller
{
    public function index(Request $request)
    {
        $kategori = KategoriArtikel::withCount('artikel')->get();

        $idKategori = $request->query('kategori');

        if ($idKategori) {
            $artikel = Artikel::with('penulis', 'kategori')
                ->where('id_kategori', $idKategori)
                ->orderBy('id', 'desc')
                ->take(5)
                ->get();
            $kategoriAktif = KategoriArtikel::find($idKategori);
        } else {
            $artikel = Artikel::with('penulis', 'kategori')
                ->orderBy('id', 'desc')
                ->take(5)
                ->get();
            $kategoriAktif = null;
        }

        return view('publik.index', compact('artikel', 'kategori', 'idKategori', 'kategoriAktif'));
    }

    public function detail($id)
    {
        $artikel = Artikel::with('penulis', 'kategori')->findOrFail($id);

        $artikelTerkait = Artikel::with('penulis', 'kategori')
            ->where('id_kategori', $artikel->id_kategori)
            ->where('id', '!=', $id)
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();

        $kategori = KategoriArtikel::withCount('artikel')->get();

        return view('publik.detail', compact('artikel', 'artikelTerkait', 'kategori'));
    }
}