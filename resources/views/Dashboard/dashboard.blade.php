@extends('Layout.master')
@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" style="max-width: 600px;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('assets/images/img3.jpeg') }}" class="d-block mx-auto w-75 h-50" alt="..." >
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('assets/images/img2.jpeg') }}" class="d-block mx-auto w-75 h-50" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/img3.jpeg') }}" class="d-block mx-auto w-75 h-50" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<div class="row">
<div class="col-6 ">
    <table class="table p-3 caption-top table-hover  ">
        <caption> List of Books</caption>
        <thead style="background-color: rgb(75, 73, 172) !important;">
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="col-6">
<table class="table p-3 caption-top table-hover  ">
        <caption> List of Books</caption>
        <thead style="background-color: rgb(75, 73, 172) !important;">
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
</div>

</div>
@endsection