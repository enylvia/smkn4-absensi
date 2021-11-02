@extends('layout.master')

@section('content')
<div class="container-fluid">
    <div class="content mt-3">
        <h4>Menu List</h4>
        <span class="divider"></span>
        <div class="row">
            <div class="card-style">
                <h5 class="text-center">PILIH KELAS MENGAJAR</h5>
                <hr>
                <div class="row">
                        {{-- loop here --}}
                        @foreach ($kelas as $item)
                        <div class="col-md-3 text-center py-3">
                            <a href="{{route('attendance',$item->id)}}" class="">
                                <div class="card py-5 px-5 text-center bg-success" style="width: 200px">
                                    <p class="text-white">
                                       {{$item->tingkatan}} {{$item->kelas}} {{$item->sub}}
                                    </p>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    {{-- end loop here --}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
