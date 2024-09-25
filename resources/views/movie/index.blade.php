@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">

            @foreach ($movies as $movie)
                <div class="col-6 d-flex justify-content-center py-3">
                    <div class="card bg-primary-subtle border-3 border-primary" style="width: 30rem;">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="card-title text-primary mb-2">{{ $movie['title'] }}</h3>
                                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie['original_title'] }}
                                        </h6>
                                        <p class="card-text text-info my-5">Realise Date:
                                            {{ date('d-m-Y', strtotime($movie['date'])) }}</p>
                                        <p class="fw-bold text-warning">Vote: {{ $movie['vote'] }}</p>
                                    </div>
                                    <div class="col-6">
                                        <span class="fs-4 fw-semibold">Description:</span>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem
                                            voluptas quia, veniam nulla saepe ducimus dolorem aliquid nesciunt dolores cum
                                            repudiandae quo consequatur minus?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
