@extends('layout.temp')
@section('content')
    <div class="d-flex justify-content-between">
    @for($i=0;$i<count($cloth);$i++)
            <div class="card" style="width: 20rem;background-color: grey">
            <img src={{ $path[$i] }} class="card-img-top mx-auto d-block" style="margin:20px; width:200px; height:200px;" alt="Card image cap">
            <div class="card-body" style="d-flex flex-column">
                <h5 class="card-title justify-content-center" style="text-align:center">{{ $cloth[$i] }}</h5>
                <p class="card-text" style="text-align:center">{{ $desc[$i] }}</p>
                <a href="#" class="btn btn-primary d-flex justify-content-center" style="margin: 10px; text-align:center; align-items:center">Buy Now</a>
                <h5 class="card-text" style="text-align:center"> Stock : {{ $stock[$i] }}</h5>
                @if($stock[$i] > 0)
                    <div class="alert alert-success d-inline-bock" style="text-align:center">
                        Stock Available
                    </div>
                @elseif($stock[$i] == 0)
                    <div class="alert alert-danger d-inline-bock" style="text-align:center">
                        Stock Not Available
                    </div>
                @endif
            </div>
        </div>
    @endfor
</div>
</div>
@endsection