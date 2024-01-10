@extends('layout.app')

@section('content')
    <div class="card m-auto col-10 mt-4 shadow-sm p-3 mb-5 bg-body-tertiary rounded ">
        <div class="card-header text-center">
            <h3 class="card-title">Input Data Barang</h3>
        </div>
        <div class="card-body">
            <!-- Formulir untuk menambahkan data pelanggan -->
            <form action="{{ route('pel_store') }}" method="POST" class="mt-3">
                @csrf
                <div class="row g-3">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="golongan_id" class="form-label">Kode</label>
                            <select class="form-select" id="golongan_id" name="gol_id" required>
                                <option value="" selected disabled>Pilih Kode</option>
                                @foreach ($golongans as $golongan)
                                    <option value="{{ $golongan->id }}">{{ $golongan->gol_kode }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="pel_nama" class="form-label">Merek</label>
                            <input type="text" class="form-control" id="pel_nama" name="pel_nama" required>
                        </div>
                        <div class="col-md-4">
                            <label for="user_id" class="form-label">Suplier</label>
                            <select class="form-select" id="user_id" name="user_id" required>
                                <option value="" selected disabled>Suplier</option>
                                @if ($users->count() > 0)
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                @else
                                    <option value="" disabled>Tidak ada user tersedia</option>
                                @endif
                            </select>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <button type="submit" class="btn text-white"
                                    style="background-color: #004643">Simpan</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
@endsection
