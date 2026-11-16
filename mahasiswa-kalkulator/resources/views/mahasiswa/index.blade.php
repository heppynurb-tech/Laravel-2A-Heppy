@extends('layouts.akademik')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <section class="panel">
        <p class="eyebrow">Data mahasiswa</p>
        <h1>Daftar Mahasiswa</h1>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Gender</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $item)
                        <tr>
                            <td>{{ $item['nama'] }}</td>
                            <td>{{ $item['alamat'] }}</td>
                            <td><span class="badge">{{ $item['gender'] }}</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
