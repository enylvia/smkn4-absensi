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
                                                <option value="1">Bind</option>
                                                <option value="2">MTK</option>
                                                <option value="3">IPA</option>
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
                                    <td class="min-width">{{ $no++}}</td>
                                    <input type="text" name="id_guru" value="{{Auth::user()->id}}" hidden>
                                    <td class="min-width">{{ $data->nipd }}</td>
                                    <td class="min-width">{{ $data->nama }}</td>
                                    <td class="min-width text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{$data->id}}" name="hadir[]">
                                            <label class="form-check-label" for="inlineCheckbox1">Hadir</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="{{$data->id}}+1" name="sakit[]">
                                            <label class="form-check-label" for="inlineCheckbox2">Sakit</label>
                                        </div><div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="{{$data->id}}+1" name="izin[]">
                                            <label class="form-check-label" for="inlineCheckbox3">Izin</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="{{$data->id}}+1" name="alpa[]">
                                            <label class="form-check-label" for="inlineCheckbox4">Alpa</label>
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
