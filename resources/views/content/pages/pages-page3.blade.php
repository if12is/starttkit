@php
  $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Series Management - Crud App')

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
      let table = $('#series_datatable').DataTable({
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
          url: "{{ route('series.getAll') }}",
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
          {data: 'seasons', name: 'seasons'},
          {data: 'rating', name: 'rating'},
          {data: 'action', name: 'action'},
        ],
        order: [[0, 'desc']]
      });
    });
    {{--  data table ajax code --}}
    // on change in #category_filter search in datatable
    $('#category_filter').on('change', function () {
      let table = $('#series_datatable').DataTable();
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
                  {{$series->count()}}
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
            @foreach($topSeries as $seri)
              <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
                <div class="badge bg-label-warning rounded p-2">{{$loop->iteration}}</div>
                <div class="d-flex justify-content-between w-100 flex-wrap">
                  <h6 class="mb-0 ms-3">{{$seri->name}}
                    <span class="card-subtitle text-muted"> ({{$seri->year}})</span>
                    <span class="badge bg-label-success rounded p-2 ms-2"><i class="ti ti-arrow-up ti-sm"></i></span>
                  </h6>
                  <div class="d-flex">
                    <p class="mx-1 badge rounded-pill bg-label-info">{{$seri->category}}</p>
                    <p class="badge badge-center bg-label-success">{{$seri->rating}}</p>
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
          <option value="Comedy">Comedy</option>
          <option value="drama">Drama</option>
          <option value="kids">Kids & Family</option>
          <option value="fantasy">Fantasy</option>
          <option value="crime">Crime</option>
          <option value="Trukish">Trukish</option>
          <option value="Romance">Romance</option>
          <option value="Adventure">Adventure</option>
        </select>
      </div>
    </div>
    <div class="card-datatable table-responsive">
      <table class="table" id="series_datatable">
        <thead class="border-top">
        <tr>
          {{--          <th></th>--}}
          <th>#</th>
          <th>Name</th>
          <th>Storyline</th>
          <th>Year</th>
          <th>Category</th>
          <th>Photo</th>
          <th>seasons</th>
          <th>Rating</th>
          <th>Actions</th>
        </tr>
        </thead>
      </table>
    </div>
    <!-- Offcanvas to add new user -->
{{--    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">--}}
{{--      <div class="offcanvas-header">--}}
{{--        <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>--}}
{{--        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>--}}
{{--      </div>--}}
{{--      <div class="offcanvas-body mx-0 flex-grow-0">--}}
{{--        <form class="add-new-user pt-0" id="addNewUserForm">--}}
{{--          <input type="hidden" name="id" id="user_id">--}}
{{--          <div class="mb-3">--}}
{{--            <label class="form-label" for="add-user-fullname">Full Name</label>--}}
{{--            <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="name" aria-label="John Doe" />--}}
{{--          </div>--}}
{{--          <div class="mb-3">--}}
{{--            <label class="form-label" for="add-user-email">Email</label>--}}
{{--            <input type="text" id="add-user-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="email" />--}}
{{--          </div>--}}
{{--          <div class="mb-3">--}}
{{--            <label class="form-label" for="add-user-contact">Contact</label>--}}
{{--            <input type="text" id="add-user-contact" class="form-control phone-mask" placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com" name="userContact" />--}}
{{--          </div>--}}
{{--          <div class="mb-3">--}}
{{--            <label class="form-label" for="add-user-company">Company</label>--}}
{{--            <input type="text" id="add-user-company" name="company" class="form-control" placeholder="Web Developer" aria-label="jdoe1" />--}}
{{--          </div>--}}
{{--          <div class="mb-3">--}}
{{--            <label class="form-label" for="country">Country</label>--}}
{{--            <select id="country" class="select2 form-select">--}}
{{--              <option value="">Select</option>--}}
{{--              <option value="Australia">Australia</option>--}}
{{--              <option value="Bangladesh">Bangladesh</option>--}}
{{--              <option value="Belarus">Belarus</option>--}}
{{--              <option value="Brazil">Brazil</option>--}}
{{--              <option value="Canada">Canada</option>--}}
{{--              <option value="China">China</option>--}}
{{--              <option value="France">France</option>--}}
{{--              <option value="Germany">Germany</option>--}}
{{--              <option value="India">India</option>--}}
{{--              <option value="Indonesia">Indonesia</option>--}}
{{--              <option value="Israel">Israel</option>--}}
{{--              <option value="Italy">Italy</option>--}}
{{--              <option value="Japan">Japan</option>--}}
{{--              <option value="Korea">Korea, Republic of</option>--}}
{{--              <option value="Mexico">Mexico</option>--}}
{{--              <option value="Philippines">Philippines</option>--}}
{{--              <option value="Russia">Russian Federation</option>--}}
{{--              <option value="South Africa">South Africa</option>--}}
{{--              <option value="Thailand">Thailand</option>--}}
{{--              <option value="Turkey">Turkey</option>--}}
{{--              <option value="Ukraine">Ukraine</option>--}}
{{--              <option value="United Arab Emirates">United Arab Emirates</option>--}}
{{--              <option value="United Kingdom">United Kingdom</option>--}}
{{--              <option value="United States">United States</option>--}}
{{--            </select>--}}
{{--          </div>--}}
{{--          <div class="mb-3">--}}
{{--            <label class="form-label" for="user-role">User Role</label>--}}
{{--            <select id="user-role" class="form-select">--}}
{{--              <option value="subscriber">Subscriber</option>--}}
{{--              <option value="editor">Editor</option>--}}
{{--              <option value="maintainer">Maintainer</option>--}}
{{--              <option value="author">Author</option>--}}
{{--              <option value="admin">Admin</option>--}}
{{--            </select>--}}
{{--          </div>--}}
{{--          <div class="mb-4">--}}
{{--            <label class="form-label" for="user-plan">Select Plan</label>--}}
{{--            <select id="user-plan" class="form-select">--}}
{{--              <option value="basic">Basic</option>--}}
{{--              <option value="enterprise">Enterprise</option>--}}
{{--              <option value="company">Company</option>--}}
{{--              <option value="team">Team</option>--}}
{{--            </select>--}}
{{--          </div>--}}
{{--          <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>--}}
{{--          <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>--}}
{{--        </form>--}}
{{--      </div>--}}
{{--    </div>--}}
  </div>
@endsection
