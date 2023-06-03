

@extends('frontend.layout')

@section('content')


<div class=" d-flex p-5">
    @foreach ($lists ?? [] as $list)
    <a href="{{ route('cars.slug', ['slug' => $list->slug]) }}">

        <div class="card m-2" style="width: 18rem;">
            {{-- <img class="card-img-top" src="" alt="Card image cap"> --}}
            <img src="{{ asset('public/'.$list->gallery[0]->images ?? '') }}" alt="" title="" height="100" />

            <div class="card-body">
                <h5 class="card-title">{{ $list->make }} {{ $list->modelc }}</h5>

                <div class="d-flex justify-content-between">
                    <div class="price">
                        {{ $list->kmdriven }}
                    </div>
                    <div class="price">
                        from {{ $list->transmission }}
                    </div>
                    <div class="price">
                        from {{ $list->fueltype }}
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="price">
                        {{ $list->price }}
                    </div>
                    <div class="price">
                        from {{ $list->emi }}
                    </div>
                </div>
            </div>
        </div>
       </a>
    @endforeach

</div>
@endsection
