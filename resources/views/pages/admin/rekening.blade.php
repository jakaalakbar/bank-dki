@extends('layouts.AdminLayout.index')

@section('content')
    <section class="mt-3">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="">
                        <h6>Pembukaan Rekening</h6>
                    </div>
                    <div class="">
                        <a href="{{ route('rekening_create') }}" class="btn btn-primary">
                            Buat Rekening
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Pekerjaan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Nominal Setor</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rekening as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->tempat_lahir }}</td>
                                    <td>{{ $item->tanggal_lahir }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->nama_pekerjaan }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->nominal_setor }}</td>
                                    <td>
                                        @if ($item->status == 'Menunggu')
                                            <span class="badge text-bg-warning">
                                                {{ $item->status }}
                                            </span>
                                        @endif
                                        @if ($item->status == 'Disetujui')
                                            <span class="badge text-bg-success">
                                                {{ $item->status }}
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($role_user == 'SUPERVISOR' && $item->status == 'Menunggu')
                                            <form action="{{ route('approved', $item->id) }}" method="post">
                                                @csrf
                                                @method('POST')
                                                <button class="btn btn-outline-primary">
                                                    Disetujui
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
