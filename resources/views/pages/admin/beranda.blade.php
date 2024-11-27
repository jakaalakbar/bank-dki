@extends('layouts.AdminLayout.index')

@section('content')
    <section class="mt-3">
        <div class="card">
            <div class="card-header">
                <h6>Daftar User</h6>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role_user }}</td>
                                <td>
                                    @if ($item->is_blocked == false)
                                        <span class="badge text-bg-info text-white">Aktif</span>
                                    @endif
                                    @if ($item->is_blocked == true)
                                        <span class="badge text-bg-danger">Terblokir</span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('buka_blokir', $item->id) }}" method="post">
                                        @csrf
                                        @method('POST')
                                        @if ($item->is_blocked == true)
                                            <button type="submit" class="btn btn-outline-primary">Buka Blokir</button>
                                        @endif
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
