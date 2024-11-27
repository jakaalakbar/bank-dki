@extends('layouts.AdminLayout.index')

@section('content')
    <section>
        <form action="{{ route('rekening_store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="card">
                <div class="card-body">
                    <div class="row col-lg-12">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="email" name="nama" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option>--Pilih--</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pekerjaan</label>
                                <select name="pekerjaan" class="form-control">
                                    <option>--Pilih--</option>
                                    @foreach ($pekerjaan as $item)
                                        <option value="{{ $item->kode }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                @livewire('location-dropdown')
                            </div>
                            <br>
                            <textarea name="nama_jalan" class="form-control" cols="30" rows="2" placeholder="Nama Jalan, RT dan RW"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nominal Setor</label>
                            <input type="number" name="nominal_setor" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
            </div>
        </form>
    </section>
@endsection
