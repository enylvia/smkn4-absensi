@extends('layout.master')

@section('content')    
<div class="container-fluid">
    <div class="content mt-3">
        <h3>Daftar Siswa SMK N 4 Pontianak</h3>
        <span class="divider"></span>
        <div class="tables-wrapper">
            <div class="row">
                <div class="card-style">
                    <div class="row">
                        <div class="d-flex justify-content-end">
                            <div class="col-md-6">
                                <div class="header-search text-end">
                                    <form action="{{route('listsiswa')}}">
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control" autocomplete="off" value="{{request('search')}}" placeholder="search here...">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">Search</button>
                                            </div>
                                        </div>                                
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-wrapper table-responsive">
                        <table class="table" id="listsiswa">
                            <thead>
                                <tr>
                                    <th class="min-width">No</th>
                                    <th class="min-width">NIPD</th>
                                    <th class="min-width">Nama</th>
                                    <th class="min-width">Jurusan</th>
                                    <th class="min-width">Tempat Lahir</th>
                                    <th class="min-width">Tanggal Lahir</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($siswa as $key => $data)
                                <tr>
                                    <td class="min-width">{{ $siswa->firstItem() + $key}}</td>
                                    <td class="min-width">{{ $data->nipd }}</td>
                                    <td class="min-width">{{ $data->nama }}</td>
                                    <td class="min-width">{{ $data->jurusan->tingkatan }}-{{ $data->jurusan->kelas }}-{{$data->jurusan->sub}}</td>
                                    <td class="min-width">{{ $data->tempat_lahir }}</td>
                                    <td class="min-width">{{ $data->tgl_lahir }}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <div>
                            @if ($siswa->count()>0) 
                            showing 
                            {{$siswa->firstItem()}}
                            to
                            {{$siswa->lastItem()}} 
                            data                              
                            @else
                                <p>Data tidak ditemukan!</p>
                            @endif
                        </div>
                        <div class="d-flex justify-content-end py-3">
                            {{ $siswa->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
