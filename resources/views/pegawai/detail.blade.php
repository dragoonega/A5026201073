@extends('layout.bahagia')

@section('title', 'Detail Data Pegawai')
@section('judulhalaman', 'Detail Data Pegawai')

@section('konten')

    <body>


        @foreach ($pegawai as $p)
            <br>
            <div>
                <label for="nama">Nama </label>
                <p>{{ $p->pegawai_nama }}
                <p>
            </div>

            <div>
                <label for="jabatan">Jabatan </label>
                <p>{{ $p->pegawai_jabatan }}
                <p>
            </div>

            <div>
                <label for="umur">Umur </label>
                <p>{{ $p->pegawai_umur }}
                <p>
            </div>

            <label for="alamat">Alamat</label>
            <p>{{ $p->pegawai_alamat }}
            <p>
                <a href="/pegawai" class="btn btn-primary"> Kembali</a>
                <br>
                </div>


        @endforeach


    </body>
@endsection
