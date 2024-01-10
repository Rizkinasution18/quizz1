@extends('layout.app')

@section('content')
    <div class="card m-auto col-10 mt-4 shadow-sm p-3 mb-5 bg-body-tertiary rounded">
        <div class="card-header text-center">
            <h3 class="card-title">Edit Data Barang</h3>
        </div>
        <div class="card-body">
            <!-- Formulir untuk mengedit data pelanggan -->
            <form action="{{ route('pel_update', ['id' => $data->id]) }}" method="POST" class="mt-3">
                @csrf
                @method('PUT') <!-- Tambahkan ini untuk menandai bahwa ini adalah request PUT -->

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="golongan_id" class="form-label">Kode</label>
                        <select class="form-select" name="gol_id" required>
                            @foreach ($golongans as $golongan)
                                <option value="{{ $golongan->id }}"
                                    {{ $data->golongan->id == $golongan->id ? 'selected' : '' }}>
                                    {{ $golongan->gol_kode }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="pel_nama" class="form-label">Merek</label>
                        <input type="text" class="form-control" id="pel_nama" name="pel_nama"
                            value="{{ $data->pel_nama }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="user_id" class="form-label">User</label>
                        <select class="form-select" id="user_id" name="user_id" required>
                            @if ($users->count() > 0)
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}"
                                        {{ $data->user_id == $user->id ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            @else
                                <option value="" disabled>Tidak ada user tersedia</option>
                            @endif
                        </select>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <button type="submit" class="btn text-white" style="background-color: #004643">Update</button>
                        </div>
                    </div>
                </div>
                <!-- Lanjutkan dengan input lainnya sesuai kebutuhan -->
                {{-- <div class="row mt-3">
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div> --}}
        </div>
        </form>
    </div>
    </div>
@endsection
