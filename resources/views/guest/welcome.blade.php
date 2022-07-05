@extends('layouts.app')

@section('content')
<div class="hero-image">
    <img class="img-fluid" src="{{asset('img/hero_image.webp')}}" alt="">
</div>

<section class="lightsabers bg-white py-5">
    <div class="container">
        <h1 class="py-4 text-center">Spade laser</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
            @forelse ($swords as $sword)
            <div class="col">
                <div class="card border-0">
                    <img src="{{asset('/storage/' . $sword->thumb)}}" alt="">
                    <div class="card-body text-center">
                        <h4 class="text-uppercase">
                            {{$sword->name}}
                        </h4>
                        <div class="price">
                            {{$sword->price}}
                        </div>

                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                No swords yet!
            </div>

            @endforelse
        </div>
    </div>

</section>
@endsection
