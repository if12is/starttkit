@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Films')

@section('vendor-style')
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/rateyo/rateyo.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
@endsection

@section('vendor-script')
  <script src="{{asset('assets/vendor/libs/rateyo/rateyo.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>

@endsection

@section('page-script')
  <script src="{{asset('assets/js/extended-ui-star-ratings.js')}}"></script>
  <script>
    // get val of input id film_rate
    var total_film_rate = $('#film_rate').val();
    // divide val by 2
    var film_rate = total_film_rate / 2;
    $('.basic-ratings').rateYo({
      rating: film_rate ,
    });
  </script>
@endsection

@section('content')

  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> <a href="{{ route('films.index') }}">Films
            </a> /</span> {{ $film->name }} </h4>
  <div class="row justify-content-center align-items-center">
<div class="col-md-6 col-lg-6 mb-3 ">
  <div class="card h-100">
    <div class="card-body">
      <h5 class="card-title">Film Name : <span class="text-info text-capitalize">{{$film->name}}</span>
      <span class="card-subtitle text-muted">
       ( {{ $film->year }} )
      </span>
      </h5>
      <!-- Multi Color-->
      <div>Rating : <span class="text-muted">({{ $film->rating }})</span></div>
            <div class="basic-ratings"></div>
      <!-- /Multi Color-->
      <input type="hidden" id="film_rate" value="{{ $film->rating }}" />
      <img class="img-fluid d-flex mx-auto my-4 rounded" src="{{$film->photo}}" alt="Card image cap">
      <p class="card-text">{{$film->storyline}}</p>
      <h5>Category :  <span class="badge rounded-pill bg-label-success"><i class="ti ti-sm ti-folder"></i> {{$film->category}}</span></h5>

    </div>
</div>
</div>
@endsection
