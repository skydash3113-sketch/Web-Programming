@extends('layouts.publik')
@section('title', $artikel->judul . ' - Blog Kami')
@section('content')
<div class="row">

    {{-- Konten Artikel --}}
    <div class="col-lg-8">

        {{-- Breadcrumb --}}
        <nav style="font-size:13px;margin-bottom:16px;">
            <a href="{{ route('publik.index') }}" style="color:#2e7d32;text-decoration:none;">Beranda</a>
            <span style="color:#aaa;margin:0 6px;">/</span>
            <a href="{{ route('publik.index', ['kategori' => $artikel->id_kategori]) }}"
               style="color:#2e7d32;text-decoration:none;">
                {{ $artikel->kategori->nama_kategori }}
            </a>
            <span style="color:#aaa;margin:0 6px;">/</span>
            <span style="color:#888;">{{ Str::limit($artikel->judul, 40) }}</span>
        </nav>

        <div style="background:#fff;border-radius:10px;overflow:hidden;box-shadow:0 1px 4px rgba(0,0,0,0.06);">
            <img src="{{ asset('storage/gambar/' . $artikel->gambar) }}"
                 alt="{{ $artikel->judul }}"
                 style="width:100%;height:320px;object-fit:cover;">

            <div style="padding:28px 32px;">
                <span class="badge-kategori">{{ $artikel->kategori->nama_kategori }}</span>
                <h1 style="font-size:24px;font-weight:700;margin-bottom:14px;color:#1a1a1a;">
                    {{ $artikel->judul }}
                </h1>

                <div style="display:flex;align-items:center;gap:10px;margin-bottom:24px;">
                    <div class="avatar-initial" style="width:36px;height:36px;font-size:14px;">
                        {{ strtoupper(substr($artikel->penulis->nama_depan, 0, 1)) }}
                    </div>
                    <div>
                        <div style="font-size:13px;font-weight:600;color:#333;">
                            {{ $artikel->penulis->nama_depan }} {{ $artikel->penulis->nama_belakang }}
                        </div>
                        <div style="font-size:12px;color:#888;">{{ $artikel->hari_tanggal }}</div>
                    </div>
                </div>

                <div style="font-size:14px;line-height:1.9;color:#444;">
                    {!! nl2br(e($artikel->isi)) !!}
                </div>

                <div style="margin-top:32px;padding-top:20px;border-top:1px solid #f0f0f0;">
                    <a href="{{ route('publik.index') }}"
                       style="font-size:13px;color:#2e7d32;text-decoration:none;">
                        ← Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Sidebar Artikel Terkait --}}
    <div class="col-lg-4">
        <div class="sidebar-card">
            <h6>Artikel Terkait</h6>
            @forelse($artikelTerkait as $item)
            <a href="{{ route('publik.detail', $item->id) }}"
               style="display:flex;gap:10px;margin-bottom:14px;text-decoration:none;align-items:flex-start;">
                <img src="{{ asset('storage/gambar/' . $item->gambar) }}"
                     style="width:64px;height:48px;object-fit:cover;border-radius:6px;flex-shrink:0;">
                <div>
                    <div style="font-size:12px;font-weight:600;color:#333;line-height:1.4;margin-bottom:3px;">
                        {{ Str::limit($item->judul, 60) }}
                    </div>
                    <div style="font-size:11px;color:#aaa;">{{ $item->hari_tanggal }}</div>
                </div>
            </a>
            @empty
            <p style="font-size:13px;color:#999;font-style:italic;">Tidak ada artikel terkait.</p>
            @endforelse
        </div>
    </div>

</div>
@endsection