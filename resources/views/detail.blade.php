@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <img src="{{ asset('img/recipes/' . $item->img) }}" class="cover rounded" alt="{{ $item->title }}"
                    width="100%" height="400px">
                <h1 class="fw-bold mt-3">{{ $item->title }}</h1>
                <p class="fs-5">
                    {{ $item->description }}
                </p>

                <p class="fs-4 mb-0 fw-bold">Bahan-bahan</p>
                <ul class="list-unstyled">
                    @foreach (json_decode($item->material) as $bahan)
                        <li class="fs-5">{{ $bahan }}</li>
                    @endforeach
                </ul>

                <p class="fs-4 mb-0 fw-bold">Langkah Pembuatan</p>
                <ol class="ps-4">
                    @foreach (json_decode($item->step) as $langkah)
                        <li class="fs-5">{{ $langkah }}</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@endsection
