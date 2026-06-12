<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog Kami')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', sans-serif;
            color: #2d2d2d;
        }
        .navbar-publik {
            background-color: #2C3E50;
            padding: 14px 0;
        }
        .navbar-publik .brand-title {
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            margin: 0;
            text-decoration: none;
        }
        .navbar-publik .brand-sub {
            color: #aaa;
            font-size: 11px;
            margin: 0;
        }
        .navbar-publik .nav-link {
            color: #ccc !important;
            font-size: 13px;
        }
        .navbar-publik .nav-link:hover {
            color: #fff !important;
        }
        .artikel-card {
            background: #fff;
            border-radius: 10px;
            margin-bottom: 32px;
            overflow: hidden;
            box-shadow: 0 1px 4px rgba(0,0,0,0.06);
        }
        .artikel-card img {
            width: 100%;
            height: 260px;
            object-fit: cover;
        }
        .artikel-card .card-body {
            padding: 20px 24px;
        }
        .badge-kategori {
            background-color: #e8f5e9;
            color: #2e7d32;
            font-size: 11px;
            padding: 4px 10px;
            border-radius: 20px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 10px;
        }
        .artikel-card h2 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #1a1a1a;
        }
        .artikel-card .meta {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 12px;
        }
        .avatar-initial {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background-color: #2e7d32;
            color: #fff;
            font-size: 12px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .meta-text {
            font-size: 12px;
            color: #888;
        }
        .artikel-card p {
            font-size: 13px;
            color: #555;
            line-height: 1.7;
            margin-bottom: 16px;
        }
        .btn-baca {
            background-color: #2e7d32;
            color: #fff;
            font-size: 12px;
            padding: 7px 16px;
            border-radius: 20px;
            text-decoration: none;
            display: inline-block;
        }
        .btn-baca:hover {
            background-color: #1b5e20;
            color: #fff;
        }
        /* Sidebar */
        .sidebar-card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.06);
            margin-bottom: 20px;
        }
        .sidebar-card h6 {
            font-size: 13px;
            font-weight: 700;
            color: #333;
            margin-bottom: 14px;
            padding-bottom: 8px;
            border-bottom: 2px solid #e8f5e9;
        }
        .kategori-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 10px;
            border-radius: 6px;
            text-decoration: none;
            color: #444;
            font-size: 13px;
            margin-bottom: 4px;
            transition: background 0.15s;
        }
        .kategori-item:hover {
            background-color: #f0f0f0;
            color: #333;
        }
        .kategori-item.active {
            background-color: #e8f5e9;
            color: #2e7d32;
            font-weight: 600;
        }
        .kategori-item .badge-count {
            background-color: #e0e0e0;
            color: #555;
            font-size: 10px;
            padding: 2px 7px;
            border-radius: 10px;
        }
        .kategori-item.active .badge-count {
            background-color: #2e7d32;
            color: #fff;
        }
        /* Footer */
        .footer-publik {
            background-color: #2C3E50;
            color: #aaa;
            text-align: center;
            padding: 20px;
            font-size: 12px;
            margin-top: 48px;
        }
    </style>
</head>
<body>

{{-- Navbar --}}
<nav class="navbar-publik">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="{{ route('publik.index') }}" style="text-decoration:none;">
            <p class="brand-title">Blog Kami</p>
            <p class="brand-sub">Artikel terbaru seputar teknologi dan pemrograman</p>
        </a>
        <div class="d-flex gap-3">
            <a href="{{ route('publik.index') }}" class="nav-link">Beranda</a>
            <a href="{{ route('publik.index') }}" class="nav-link">Artikel</a>
            <a href="{{ route('publik.index') }}" class="nav-link">Kategori</a>
        </div>
    </div>
</nav>

{{-- Konten --}}
<div class="container mt-4">
    @yield('content')
</div>

{{-- Footer --}}
<div class="footer-publik">
    © 2026 Blog Kami. Seluruh hak cipta dilindungi.
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>