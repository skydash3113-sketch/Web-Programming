@extends('layouts.app')
@section('title', 'Edit Penulis')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h6 class="fw-semibold mb-0" style="color:#333;">Edit Penulis</h6>
    <a href="{{ route('penulis.index') }}" class="btn btn-sm" style="background-color:#f0f0f0;color:#555;">Kembali</a>
</div>
<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <form action="{{ route('penulis.update', $penulis->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold" style="font-size:13px;">Nama Depan <span class="text-danger">*</span></label>
                    <input type="text" name="nama_depan"
                           class="form-control @error('nama_depan') is-invalid @enderror"
                           value="{{ old('nama_depan', $penulis->nama_depan) }}">
                    @error('nama_depan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold" style="font-size:13px;">Nama Belakang <span class="text-danger">*</span></label>
                    <input type="text" name="nama_belakang"
                           class="form-control @error('nama_belakang') is-invalid @enderror"
                           value="{{ old('nama_belakang', $penulis->nama_belakang) }}">
                    @error('nama_belakang')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold" style="font-size:13px;">Username <span class="text-danger">*</span></label>
                <input type="text" name="user_name"
                       class="form-control @error('user_name') is-invalid @enderror"
                       value="{{ old('user_name', $penulis->user_name) }}">
                @error('user_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold" style="font-size:13px;">Password Baru</label>
                <input type="password" name="password"
                       class="form-control @error('password') is-invalid @enderror"
                       placeholder="Kosongkan jika tidak ingin mengubah password">
                <div class="form-text" style="font-size:12px;">Minimal 8 karakter. Kosongkan jika tidak ingin mengubah.</div>
                @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="form-label fw-semibold" style="font-size:13px;">Foto Profil</label>
                <div class="mb-2">
                    <img src="{{ asset('storage/foto/' . $penulis->foto) }}" alt="Foto Profil"
                         style="width:60px;height:60px;object-fit:cover;border-radius:8px;border:1px solid #e9ecef;">
                </div>
                <input type="file" name="foto"
                       class="form-control @error('foto') is-invalid @enderror"
                       accept="image/jpg,image/jpeg,image/png">
                <div class="form-text" style="font-size:12px;">Kosongkan jika tidak ingin mengubah foto.</div>
                @error('foto')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="d-flex gap-2 justify-content-end">
                <a href="{{ route('penulis.index') }}" class="btn btn-sm" style="background-color:#f0f0f0;color:#555;">Batal</a>
                <button type="submit" class="btn btn-sm btn-success">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection