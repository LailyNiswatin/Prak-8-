@extends('layouts.app')
@section('content')
<body>
    <div class="container mt-4 mb-4">
      <div class="row">
        <div class="col-3">
        <img src="{{ Vite::asset('resources/images/laily.jpg') }}" alt="image" class="img-thumbnail rounded-circle">
        </div>
        <div class="col-9">
          <div class="container text-dark">
          <h4>About me</h4>
            <p> {{ $desc }} </p>
          <h4>Contact</h4>
            <p><i class="fa fa-instagram"></i> {{ $instagram }} </p>
            <p><i class="fa fa-facebook"></i> {{ $namaa }}</p>
            <p><i class="fa fa-envelope"></i> {{ $email }}</p>
          </div>
      </div>
    </div>
</div>
</body>
<script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>

@endsection
