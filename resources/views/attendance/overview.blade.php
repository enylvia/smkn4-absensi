@extends('layout.master')

@section('content')
<div class="container-fluid">
    <div class="content mt-3">
        <h4>Menu List</h4>
        <span class="divider"></span>
        <div class="row">
            <div class="card-style">
                <div class="row">
                        {{-- loop here --}}
                        <div class="col-md-4 text-center">
                            <a href="" class="">
                                <div class="card py-5 px-5 text-center bg-success">
                                    <p class="text-white">
                                        Jurusan A
                                    </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="" class="">
                            <div class="card py-5 px-5 text-center bg-success">
                                <p class="text-white">
                                    Jurusan A
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="" class="">
                            <div class="card py-5 px-5 text-center bg-success">
                                <p class="text-white">
                                    Jurusan A
                                </p>
                            </div>
                        </a>
                    </div>
                    {{-- end loop here --}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
