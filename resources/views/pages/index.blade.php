@extends('../layouts.master')

@section('title')
    Home
@endsection

@section('content')
  <div class="jumbotron">
    <h1 class="display-4">{{$title}}</h1>
    <p class="lead">A "paragraph"</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </div>

  <div class="row">

  <div class="col-sm-6">
    <div class="card">
      <img class="card-img-top" src="https://www.gettyimages.ca/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg" alt="Card image cap" class="img-responsive">
      <div class="card-body">
        <h5 class="card-title">bird</h5>
        <p class="card-text desc">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
          <div class="float-left price"> 12$ </div>
          <a href="#" class="btn btn-dark float-right" role="button">Add</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <img class="card-img-top" src="https://www.w3schools.com/w3css/img_lights.jpg" alt="Card image cap" class="img-responsive">
      <div class="card-body">
        <h5 class="card-title">aurora borealis</h5>
        <p class="card-text desc">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
          <div class="float-left price"> 12$ </div>
          <a href="#" class="btn btn-dark float-right" role="button">Add</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <img class="card-img-top" src="https://imagejournal.org/wp-content/uploads/bb-plugin/cache/23466317216_b99485ba14_o-panorama.jpg" alt="Card image cap" class="img-responsive">
      <div class="card-body">
        <h5 class="card-title">rock</h5>
        <p class="card-text desc">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
          <div class="float-left price"> 12$ </div>
          <a href="#" class="btn btn-dark float-right" role="button">Add</a>
      </div>
      </div>
    </div>
  </div>


<div class="row">

<div class="col-sm-6">
  <div class="card">
    <img class="card-img-top" src="https://www.gettyimages.ca/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg" alt="Card image cap" class="img-responsive">
    <div class="card-body">
      <h5 class="card-title">bird</h5>
      <p class="card-text desc">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
        <div class="float-left price"> 12$ </div>
        <a href="#" class="btn btn-dark float-right" role="button">Add</a>
    </div>
  </div>
</div>

<div class="col-sm-6">
  <div class="card">
    <img class="card-img-top" src="https://www.w3schools.com/w3css/img_lights.jpg" alt="Card image cap" class="img-responsive">
    <div class="card-body">
      <h5 class="card-title">aurora borealis</h5>
      <p class="card-text desc">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
        <div class="float-left price"> 12$ </div>
        <a href="#" class="btn btn-dark float-right" role="button">Add</a>
    </div>
  </div>
</div>

<div class="col-sm-6">
</div>
</div>
@endsection
