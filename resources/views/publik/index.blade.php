@extends('layouts.publik')
@section('title', 'Beranda - Blog Kami')
@section('content')
<div class="row">

    {{-- Kolom Artikel --}}
    <div class="col-lg-8">
        @if($kategoriAktif)
            <p style="font-size:13px;color:#888;margin-bottom:16px;">
                Menampilkan artikel dalam kategori:
                <strong style="color:#2e7d32;">{{ $kategoriAktif->nama_kategori }}</strong>
                — <a href="{{ route('publik.index') }}" style="color:#888;">Tampilkan semua</a>
            </p>
        @endif

        @forelse($artikel as $item)
        <div class="artikel-card">
            <img src="{{ asset('storage/gambar/' . $item->gambar) }}"
                 alt="{{ $item->judul }}">
            <div class="card-body">
                <span class="badge-kategori">{{ $item->kategori->nama_kategori }}</span>
                <h2>{{ $item->judul }}</h2>
                <div class="meta">
                    <div class="avatar-initial">
                        {{ strtoupper(substr($item->penulis->nama_depan, 0, 1)) }}
                    </div>
                    <span class="meta-text">
                        {{ $item->penulis->nama_depan }} {{ $item->penulis->nama_belakang }}
                        &nbsp;•&nbsp; {{ $item->hari_tanggal }}
                    </span>
                </div>
                <p>{{ Str::limit(strip_tags($item->isi), 200) }}</p>
                <a href="{{ route('publik.detail', $item->id) }}" class="btn-baca">
                    Baca Selengkapnya →
                </a>
            </div>
        </div>
        @empty
        <div style="text-align:center;padding:48px;color:#999;font-size:14px;">
            Belum ada artikel tersedia.
        </div>
        @endforelse
    </div>

    {{-- Sidebar Kategori --}}
    <div class="col-lg-4">
        <div class="sidebar-card">
            <h6>Kategori Artikel</h6>
            <a href="{{ route('publik.index') }}"
               class="kategori-item {{ !$idKategori ? 'active' : '' }}">
                <span>Semua Artikel</span>
                <span class="badge-count">{{ $kategori->sum('artikel_count') }}</span>
            </a>
            @foreach($kategori as $item)
            <a href="{{ route('publik.index', ['kategori' => $item->id]) }}"
               class="kategori-item {{ $idKategori == $item->id ? 'active' : '' }}">
                <span>{{ $item->nama_kategori }}</span>
                <span class="badge-count">{{ $item->artikel_count }}</span>
            </a>
            @endforeach
        </div>
    </div>

</div>
@endsection