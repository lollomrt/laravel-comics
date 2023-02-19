@extends ('layouts.app')

@section('content')
    <div class="container-fluid bg-primary py-3">
        <div class="container-detail d-flex">
            <div class="container-thumb">
                <img class="thumb" src="{{ $single['thumb'] }}" alt="{{ $single['title'] }}">
                <span class="lable">{{ $single['type'] }}</span>
                <span class="gallery text-center"><a href="#">view gallery</a></span>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container-detail py-5">
            <div class="row">
                <div class="col-8">
                    <h1>{{ $single['title'] }}</h1>
                    <div class="container-info d-flex justify-content-between my-3">
                        <div class="container-price d-flex justify-content-between w-75 p-3">
                            <span class="d-flex align-items-center"><span class="int me-1">U.S. Price: </span>{{ $single['price']}}</span>
                            <span class="int">available</span>
                        </div>
                        <div class="container-select w-25">
                            <select class="p-3" name="#" id="#">
                                <option value="1">check availability</option>
                                <option value="2">opzione 1</option>
                                <option value="3">opzione 2</option>
                                <option value="3">opzione 3</option>
                            </select>
                        </div>    
                    </div>
                    <p>{{ $single['description']}}</p>
                </div>
                <div class="col-4">
                    <div class="container-adv d-flex flex-column align-items-end">
                        <span>advertisement</span>
                        <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="adv">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection