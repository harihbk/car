@extends('frontend.layout')

@section('content')

<div class="">
<div id="carouselExample" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($list->gallery ?? [] as $gallery)
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="{{ $loop->first ? 'active' : '' }}"></li>
        @endforeach
      </ol>
    <div class="carousel-inner">
        @foreach ($list->gallery ?? [] as $gallery)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img src="{{ asset('public/'.$gallery->images) }}" class="d-block w-100" alt="slide1" height="400">

            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

  <div class="p-5 border">
      <div>
        Car Overview
      </div>
      <div>
          <div class="d-flex justify-content-between">
              <div>
                <div>Make Year</div>
                <div>{{ $list->makeyear ?? '' }}</div>
              </div>
              <div>
                <div>Registration year</div>
                <div>{{ $list->registrationyear ?? '' }}</div>
              </div>
              <div>
                <div>Fuel type</div>
                <div>{{ $list->fueltype ?? '' }}</div>
              </div>
          </div>

          <div class="d-flex justify-content-between">
            <div>
              <div>Km driven</div>
              <div>{{ $list->kmdriven ?? '' }}</div>
            </div>
            <div>
              <div>Transmission</div>
              <div>{{ $list->transmission ?? '' }}</div>
            </div>
            <div>
              <div>No. of Owner</div>
              <div>{{ $list->noofowner ?? ''}}</div>
            </div>


        </div>

        <div class="d-flex justify-content-between">
            <div>
              <div>Insurance validity</div>
              <div>{{ $list->insurancevalidity ?? '' }}</div>
            </div>
            <div>
              <div>Insurance type</div>
              <div>{{ $list->insurancetype ?? ''}}</div>
            </div>
            <div>
              <div>RTO</div>
              <div>{{ $list->rto ?? ''}}</div>
            </div>
        </div>


      </div>
  </div>
</div>
@endsection
