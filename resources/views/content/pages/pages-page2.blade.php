@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Films Management - Crud App')

@section('vendor-style')
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
@endsection

@section('vendor-script')
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
  <script src="{{asset('js/laravel-user-management.js')}}"></script>

  <script>
{{--    data table ajax code --}}
$(document).ready(function() {
   let table = $('#film_datatable').DataTable({
     dom: '<"card-header flex-column flex-md-row"<"head-label text-center"><"dt-action-buttons text-end pt-3 pt-md-0"B>><"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
     displayLength: 5,
     lengthMenu: [5, 10, 25, 50, 75, 100],
     buttons: [
       {
         extend: 'collection',
         className: 'btn btn-label-primary dropdown-toggle me-2',
         text: '<i class="ti ti-file-export me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
         buttons: [
           {
             extend: 'print',
             text: '<i class="ti ti-printer me-1" ></i>Print',
             className: 'dropdown-item',
             exportOptions: { columns: [1,2,3,4,5,7] }
           },
           {
             extend: 'csv',
             text: '<i class="ti ti-file-text me-1" ></i>Csv',
             className: 'dropdown-item',
             exportOptions: { columns: [1,2,3,4,5,7] }
           },
           {
             extend: 'pdf',
             text: '<i class="ti ti-file-description me-1"></i>Pdf',
             className: 'dropdown-item',
             exportOptions: { columns: [1,2,3,4,5,7] }
           },
           {
             extend: 'copy',
             text: '<i class="ti ti-copy me-1" ></i>Copy',
             className: 'dropdown-item',
             exportOptions: { columns: [1,2,3,4,5,7] }
           }
         ]
       },
     ],
      processing: true,
      serverSide: true,
      'responsive': true,
      ajax: {
        url: "{{ route('films.getAll') }}",
        type: 'GET',
      },
      columns: [
        // {data: 'checkbox', name: 'checkbox'},
        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
        {data: 'name', name: 'name'},
        {data: 'storyline', name: 'storyline'},
        {data: 'year', name: 'year'},
        {data: 'category', name: 'category'},
        {data: 'photo', name: 'photo'},
        {data: 'rating', name: 'rating'},
        {data: 'action', name: 'action'},
      ],
      order: [[0, 'desc']]
    });
  });
{{--    data table ajax code --}}
// on change in #category_filter search in datatable
$('#category_filter').on('change', function () {
  let table = $('#film_datatable').DataTable();
  table.columns(4).search(this.value).draw();
  });
  </script>
@endsection

@section('content')

  <div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
              <span>Film</span>
              <div class="d-flex align-items-end mt-2">
                <h3 class="mb-0 me-2">
                {{$films->count()}}
                </h3>
                <small class="text-success">(100%)</small>
              </div>
              <small>Total Users</small>
            </div>
            <span class="badge bg-label-primary rounded p-2">
            <i class="ti ti-user ti-sm"></i>
          </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
              <span>Verified Users</span>
              <div class="d-flex align-items-end mt-2">
                <h3 class="mb-0 me-2">10</h3>
                <small class="text-success">(+95%)</small>
              </div>
              <small>Recent analytics </small>
            </div>
            <span class="badge bg-label-success rounded p-2">
            <i class="ti ti-user-check ti-sm"></i>
          </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
              <span>Duplicate Users</span>
              <div class="d-flex align-items-end mt-2">
                <h3 class="mb-0 me-2">15</h3>
                <small class="text-success">(0%)</small>
              </div>
              <small>Recent analytics</small>
            </div>
            <span class="badge bg-label-danger rounded p-2">
            <i class="ti ti-users ti-sm"></i>
          </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
              <span>Verification Pending</span>
              <div class="d-flex align-items-end mt-2">
                <h3 class="mb-0 me-2">6</h3>
                <small class="text-danger">(+6%)</small>
              </div>
              <small>Recent analytics</small>
            </div>
            <span class="badge bg-label-warning rounded p-2">
            <i class="ti ti-user-circle ti-sm"></i>
          </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  List Table -->
  <!--  Top rated -->
  <div class="row justify-content-center align-items-center">
  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-0">Monthly Rating </h5>
          <small class="text-muted">8.52k Social Visiters</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="MonthlyCampaign" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="MonthlyCampaign">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">View All</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          @foreach($topMoves as $film)
            <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
            <div class="badge bg-label-warning rounded p-2">{{$loop->iteration}}</div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-3">{{$film->name}}
                <span class="card-subtitle text-muted"> ({{$film->year}})</span>
              <span class="badge bg-label-success rounded p-2 ms-2"><i class="ti ti-arrow-up ti-sm"></i></span>
              </h6>
              <div class="d-flex">
                <p class="mx-1 badge rounded-pill bg-label-info">{{$film->category}}</p>
                <p class="badge badge-center bg-label-success">{{$film->rating}}</p>
              </div>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  </div>
  <!-- Moves List Table -->
  <div class="card">
    <div class="card-header">
      <h5 class="card-title mb-0">Search Category Filter</h5>
      <div class="mb-4">
        <select id="category_filter" class="form-select">
          <option value="">All</option>
          <option value="action">Action</option>
          <option value="Comdy">Comdy</option>
          <option value="drama">Drama</option>
          <option value="horror">Horror</option>
          <option value="kids">Kids & Family</option>
          <option value="fantasy">Fantasy</option>
          <option value="crime">Crime</option>
          <option value="pinoy">Pinoy</option>
          <option value="Romance">Romance</option>
          <option value="Adventure">Adventure</option>
        </select>
      </div>
    </div>
    <div class="card-datatable table-responsive">
      <table class="table" id="film_datatable">
        <thead class="border-top">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Storyline</th>
          <th>Year</th>
          <th>Category</th>
          <th>Photo</th>
          <th>Rating</th>
          <th>Actions</th>
        </tr>
        </thead>
      </table>
    </div>

  </div>
@endsection
