@extends('layout.master')

@section('content')    
<div class="container-fluid">
    <div class="content mt-3">
        <h3>Daftar Guru SMK N 4 Pontianak</h3>
        <span class="divider"></span>
        <div class="tables-wrapper">
            <div class="row">
                <div class="card-style">
                    <div class="row">
                        <div class="d-flex justify-content-end">
                            <div class="col-md-6">
                                <div class="header-search text-end">
                                    <form action="{{route('listguru')}}">
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
                        <table class="table" id="listguru">
                            <thead>
                                <tr>
                                    <th class="min-width">No</th>
                                    <th class="min-width">NUPTK</th>
                                    <th class="min-width">Nama</th>
                                    <th class="min-width">Status Kepegawaian</th>
                                    <th class="min-width">Alamat</th>
                                    <th class="min-width">Nomor HP</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($guru as $key => $data)
                                <tr>
                                    <td class="min-width">{{ $guru->firstItem() + $key}}</td>
                                    <td class="min-width">{{ $data->nuptk }}</td>
                                    <td class="min-width">{{ $data->nama }}</td>
                                    <td class="min-width">{{ $data->status_kepeg}}</td>
                                    <td class="min-width">{{ $data->alamat }}</td>
                                    <td class="min-width">0{{ $data->hp }}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <div>
                            @if ($guru->count()>0) 
                            showing 
                            {{$guru->firstItem()}}
                            to
                            {{$guru->lastItem()}} 
                            data                              
                            @else
                                <p>Data tidak ditemukan!</p>
                            @endif
                        </div>
                        <div class="d-flex justify-content-end py-3">
                            {{ $guru->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
