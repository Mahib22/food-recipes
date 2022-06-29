@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <img src="https://picsum.photos/200" class="cover rounded" alt="..." width="100%" height="400px">
                <h1 class="fw-bold mt-3">Lorem Ipsum</h1>
                <p class="fs-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi exercitationem iusto tenetur nam cum
                    omnis, voluptas debitis veritatis! Nihil consequuntur debitis provident hic porro illum labore suscipit
                    expedita id quas?
                </p>

                <p class="fs-4 mb-0 fw-bold">Bahan-bahan</p>
                <ul class="list-unstyled">
                    <li class="fs-5">garam</li>
                </ul>

                <p class="fs-4 mb-0 fw-bold">Langkah Pembuatan</p>
                <ol class="ps-4">
                    <li class="fs-5">garam</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
