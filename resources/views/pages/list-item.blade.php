@extends('home')
@section('content')
<div class="row">
    <div class="col">
        <div class="row">
            <div class="col d-flex">
                <h2 class="text-light">List Item</h2>
            </div>
            <div class="col">
                <div class="row float-end">
                    <div class="col d-inline-flex">
                        <input type="search" name="" class="form-control mx-2 search-bar" placeholder="Search here">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="border-light mb-4">
    <div class="col">
        <h3 class="text-light mb-3">Item</h3>
        <div class="row">
            @foreach($listItem as $list)
            <div class="col-md-3 rounded p-1">
                <div class="rounded p-4" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    style="cursor: pointer; background-color: #0E2930;"
                    onClick="getPostinganDetails({{ $list -> id }})">
                    <img style="width: 19vw; height: 33vh;" class="mb-4 rounded" src="{{ $list -> gambar }}"
                        alt="">
                    <h5 class="text-light fw-semibold mb-1">{{ $list -> title }}</h5>
                    <h6 class="text-light mb-4">{{ $list -> subtitle }}</h6>
                    <h6 class="text-light mb-3">{{ $list -> endauc }}</h6>
                    <h6 class="text-light fw-semibold m-0 mb-1">Current offer</h6>
                    <h6 class="text-light fw-semibold m-0">Rp. {{ $list -> start_price }}</h6>
                    <hr class="border-light my-3 mb-2">
                    <h6 class="text-light my-0">{{ $list -> created_at -> diffForHumans() }}</h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog" style="z-index: 1400;">
    <div class="modal-dialog modal-fullscreen modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header px-5" style="background-color: #071C21; border-bottom: 1px solid #1D5F6F;">
                <nav class="d-flex" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb my-auto">
                        <li class="breadcrumb-item"><a class="text-decoration-none text-light" href="/home">Home</a>
                        </li>
                        <li id="active-breadcrumb" class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background-color: #071C21;">
                <div id="imported-page" style="overflow-y: auto; overflow-x: hidden;"></div>
            </div>
            <div id="modal-footer" class="modal-footer"
                style="background-color: #071C21; border-top: 1px solid #1D5F6F;">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('jquery/jquery-3.6.3.min.js') }}"></script>
<script>
function getPostinganDetails(id) {
    $.get("{{ url('/postingan-details') }}/" + id, {}, function(data, status) {
        $("#imported-page").html(data);
        $("#exampleModal").show();
    });
}
</script>
@endsection