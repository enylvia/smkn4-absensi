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
                        <div class="d-flex justify-content-center">
                            <div class="col-md-6">
                                <div class="header-search text-center">
                                    <form action="{{route('strattendance')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="mapel">Silahkan Pilih Mata Pelajaran</label>
                                            <select name="mapel_id" id="mapel" class="form-control">
                                                @foreach ($mapel as $item)
                                                    <option value="{{$item->id}}">{{$item->mapel}}</option>
                                                @endforeach
                                            </select>
                                        </div>                        
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
                                        <th class="min-width text-center">Attendance</th>
                                    </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1
                                    @endphp
                                @foreach($siswa as $key => $data)
                                <tr>
                                    <input type="text" name="guru_id" value="{{Auth::user()->id}}" hidden>
                                    <input type="text" name="jurusan_id" value="{{$data->jurusan_id}}" hidden>
                                    <input type="text" name="siswa_id[]" value="{{$data->id}}" hidden>
                                    <td class="min-width">{{ $no++}}</td>
                                    <td class="min-width">{{ $data->nipd }}</td>
                                    <td class="min-width">{{ $data->nama }}</td>
                                    <td class="min-width text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox{{$data->id}}" value="{{$data->id}}" name="hadir[]">
                                            <label class="form-check-label" for="inlineCheckbox{{$data->id}}">Hadir</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbo{{$data->id}}" value="{{$data->id}}" name="sakit[]">
                                            <label class="form-check-label" for="inlineCheckbo{{$data->id}}">Sakit</label>
                                        </div><div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckb{{$data->id}}" value="{{$data->id}}" name="izin[]">
                                            <label class="form-check-label" for="inlineCheckb{{$data->id}}">Izin</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheck{{$data->id}}" value="{{$data->id}}" name="alpa[]">
                                            <label class="form-check-label" for="inlineCheck{{$data->id}}">Alpa</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <div class="text-center py-3">
                            <button class="btn btn-primary" type="submit">Absen</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
