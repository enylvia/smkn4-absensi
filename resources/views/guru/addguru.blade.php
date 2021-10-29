@extends('layout.master')

@section('content')
<div class="container-fluid">
    <div class="content mt-3">
        <span class="divider"></span>

        <div class="card-style">
            <div class="row justify-content-center">
                <h3 class="text-center py-2">Masukan Informasi User</h3>
                <div class="col-8">
                    <hr>
                    <form action="{{route('storeuser')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="py-2">Nama</label>
                            <input type="nama" class="form-control" placeholder="Masukan nama user" name="name" />
                        </div>
                        <div class="form-group">
                            <label class="py-2">E-mail</label>
                            <input type="email" class="form-control" placeholder="user@mail.com" name="email" />
                        </div>
                        <div class="form-group">
                            <label class="py-2">Kata Sandi</label>
                            <input type="password" class="form-control" name="password" />
                            <small class="fst-italic">&middot; Must contains character&number</small>
                        </div>
                        <div class="form-group">
                            <label for="role" class="py-2">Role</label>
                            <select name="role" id="role" class="form-control">
                                <option value="guru">Guru</option>
                                <option value="walikelas">Wali Kelas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jurusan" class="py-2">Jurusan</label> <br>
                            <div class="row">
                                @foreach($jurusan as $item)
                                <div class="col-md-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="{{$item->id}}" value="{{$item->id}}" name="jurusan[]">
                                        <label class="form-check-label" for="{{$item->id}}">{{$item->tingkatan}} {{$item->kelas}} {{$item->sub}}</label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <hr>
                        <div class="form-group py-3 text-end">
                            <button class="btn btn-primary" type="submit">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
