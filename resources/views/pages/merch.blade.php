@extends('../layouts.master')

@section('title')
    Mercandise
@endsection

@section('content')

<!-- laravel has a chunk method -->
  @foreach($products->chunk(3) as $productChunk)
  <div class="row">
    @foreach($productChunk as $product)
    <div class="col-sm-6">
      <div class="card">
        <img class="card-img-top" src="{{ $product -> imgPath }}" alt="Card image cap" class="img-responsive">
        <div class="card-body">
          <h5 class="card-title">{{ $product -> name }}</h5>
          <p class="card-text desc">{{ $product -> desc }}</p>
        </div>
        <div class="card-footer">
            <div class="float-left price"> ${{ $product -> price }} </div>
            <a href="#" class="btn btn-dark float-right" role="button">Add</a>
        </div>
      </div>
    </div>
    @endforeach
</div>
  @endforeach
@endsection
