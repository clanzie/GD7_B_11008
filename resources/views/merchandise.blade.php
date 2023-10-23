@extends('dashboard')

@section('content')

<style>

    .table-container {
        background-color: #23141E;
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        padding-top: 20px;
        padding-left: 20px;
        padding-right: 20px;
        left: 0;
        z-index: -1;
        overflow-x: hidden;
        border: 1px solid black;
    }

    .table-container::-webkit-scrollbar {
        width: 0px;
    }

    .table-container .content-index{
        margin-top: 20px;
        margin-left: 20px;
    }

    hr {
        border: 1px solid #D6B56E;
    }

    h2, h4,h5,p,h6 {
        font-family: goldenbook,serif;
        font-style: normal;
    }

    h2, h4,h5,p,h6 {
        color: #FFFFFF;
    }

    .title:hover h2{
        color: #D6B56E;
    }

    .card-img:hover{
        transform: scale(105%);
        box-shadow: 0px 0px 20px #D6B56E;
    }

    .container-img{
        margin-top: 20px;
    }

    .title p{
        color: #FFFFFF;
        margin-bottom: 2px;
        margin-right: 10px;
    }

    .scrollable-content {
        max-height: 75vh;
        overflow-y: auto;
        margin-right: 100px;
    }

    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background: #D2B873;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #D2B873;
    }


</style>

<div class="container-details">
    <div class="table-container">
        <div class="content-index">
            <div class="title">
                <h2 class="mt-3 text-center">2022 IU CONCERT〈The Golden Hour: Under The Orange Sun〉</h2>
                <h4 class="text-center mt-5">
                    Our Official Merchandise
                </h4>
            </div>
            
            @if($merchandise->isEmpty())
                <p style="color:white">No tickets available at the moment.</p>
            @else
            <div class="scrollable-content px-5">
                <div class="row ms-5">
                    @foreach ($merchandise as $item)
                        <div class="col-4">
                            <div class="container-image ms-5">
                                <div class="container-img shadow-lg">
                                    @if($item->id % 3 == 0)
                                        <img src="{{ asset('images/echo_bag.png') }}" class="card-img" alt="...">
                                    @elseif($item->id % 2 == 0)
                                        <img src="{{ asset('images/metal_spinning.png') }}" class="card-img" alt="...">
                                    @else
                                        <img src="{{ asset('images/jacket.png') }}" class="card-img" alt="...">
                                    @endif
                                </div>
                                <br>
                                <h6>{{ $item->name }}</h6>
                                <p> IDR {{ number_format($item->price, 2, ',', '.') }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
            
        </div>
    </div>

</div>


@endsection