@php
$configData = Helper::appClasses();
@endphp

@extends('layouts.layoutMaster')

@section('title', 'Analytics')

@section('vendor-style')
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/swiper/swiper.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}" />
@endsection

@section('page-style')
  <!-- Page -->
  <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/cards-advance.css')}}">
@endsection

@section('vendor-script')
  <script src="{{asset('assets/vendor/libs/swiper/swiper.js')}}">
  </script>
  <script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
@endsection

@section('page-script')
  <script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')

  <div class="row">
    <!-- Website Analytics -->
    <div class="col-lg-6 mb-4">
      <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg" id="swiper-with-pagination-cards">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="row">
              <div class="col-12">
                <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                <small>Total 28.5% Conversion Rate</small>
              </div>
              <div class="row">
                <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                  <h6 class="text-white mt-0 mt-md-3 mb-3">Traffic</h6>
                  <div class="row">
                    <div class="col-6">
                      <ul class="list-unstyled mb-0">
                        <li class="d-flex mb-4 align-items-center">
                          <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">28%</p>
                          <p class="mb-0">Sessions</p>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                          <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">1.2k</p>
                          <p class="mb-0">Leads</p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="list-unstyled mb-0">
                        <li class="d-flex mb-4 align-items-center">
                          <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">3.1k</p>
                          <p class="mb-0">Page Views</p>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                          <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">12%</p>
                          <p class="mb-0">Conversions</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                  <img src="{{asset('assets/img/illustrations/card-website-analytics-1.png')}}" alt="Website Analytics" width="170" class="card-website-analytics-img">
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="row">
              <div class="col-12">
                <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                <small>Total 28.5% Conversion Rate</small>
              </div>
              <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                <h6 class="text-white mt-0 mt-md-3 mb-3">Spending</h6>
                <div class="row">
                  <div class="col-6">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">12h</p>
                        <p class="mb-0">Spend</p>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">127</p>
                        <p class="mb-0">Order</p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">18</p>
                        <p class="mb-0">Order Size</p>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">2.3k</p>
                        <p class="mb-0">Items</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                <img src="{{asset('assets/img/illustrations/card-website-analytics-2.png')}}" alt="Website Analytics" width="170" class="card-website-analytics-img">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="row">
              <div class="col-12">
                <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                <small>Total 28.5% Conversion Rate</small>
              </div>
              <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                <h6 class="text-white mt-0 mt-md-3 mb-3">Revenue Sources</h6>
                <div class="row">
                  <div class="col-6">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">268</p>
                        <p class="mb-0">Direct</p>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">62</p>
                        <p class="mb-0">Referral</p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">890</p>
                        <p class="mb-0">Organic</p>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">1.2k</p>
                        <p class="mb-0">Campaign</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                <img src="{{asset('assets/img/illustrations/card-website-analytics-3.png')}}" alt="Website Analytics" width="170" class="card-website-analytics-img">
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <!--/ Website Analytics -->

    <!-- Sales Overview -->
    <div class="col-lg-3 col-sm-6 mb-4">
      <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <small class="d-block mb-1 text-muted">Sales Overview</small>
            <p class="card-text text-success">+18.2%</p>
          </div>
          <h4 class="card-title mb-1">$42.5k</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-4">
              <div class="d-flex gap-2 align-items-center mb-2">
                <span class="badge bg-label-info p-1 rounded"><i class="ti ti-shopping-cart ti-xs"></i></span>
                <p class="mb-0">Order</p>
              </div>
              <h5 class="mb-0 pt-1 text-nowrap">62.2%</h5>
              <small class="text-muted">6,440</small>
            </div>
            <div class="col-4">
              <div class="divider divider-vertical">
                <div class="divider-text">
                  <span class="badge-divider-bg bg-label-secondary">VS</span>
                </div>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
                <p class="mb-0">Visits</p>
                <span class="badge bg-label-primary p-1 rounded"><i class="ti ti-link ti-xs"></i></span>
              </div>
              <h5 class="mb-0 pt-1 text-nowrap ms-lg-n3 ms-xl-0">25.5%</h5>
              <small class="text-muted">12,749</small>
            </div>
          </div>
          <div class="d-flex align-items-center mt-4">
            <div class="progress w-100" style="height: 8px;">
              <div class="progress-bar bg-info" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Sales Overview -->

    <!-- Revenue Generated -->
    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
      <div class="card">
        <div class="card-body pb-0">
          <div class="card-icon">
          <span class="badge bg-label-success rounded-pill p-2">
            <i class='ti ti-credit-card ti-sm'></i>
          </span>
          </div>
          <h5 class="card-title mb-0 mt-2">97.5k</h5>
          <small>Revenue Generated</small>
        </div>
        <div id="revenueGenerated"></div>
      </div>
    </div>
    <!--/ Revenue Generated -->

    <!-- Earning Reports -->
    <div class="col-lg-6 mb-4">
      <div class="card h-100">
        <div class="card-header pb-0 d-flex justify-content-between mb-lg-n4">
          <div class="card-title mb-0">
            <h5 class="mb-0">Earning Reports</h5>
            <small class="text-muted">Weekly Earnings Overview</small>
          </div>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="earningReportsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ti ti-dots-vertical ti-sm text-muted"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsId">
              <a class="dropdown-item" href="javascript:void(0);">View More</a>
              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
          </div>
          <!-- </div> -->
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-4 d-flex flex-column align-self-end">
              <div class="d-flex gap-2 align-items-center mb-2 pb-1 flex-wrap">
                <h1 class="mb-0">$468</h1>
                <div class="badge rounded bg-label-success">+4.2%</div>
              </div>
              <small class="text-muted">You informed of this week compared to last week</small>
            </div>
            <div class="col-12 col-md-8">
              <div id="weeklyEarningReports"></div>
            </div>
          </div>
          <div class="border rounded p-3 mt-2">
            <div class="row gap-4 gap-sm-0">
              <div class="col-12 col-sm-4">
                <div class="d-flex gap-2 align-items-center">
                  <div class="badge rounded bg-label-primary p-1"><i class="ti ti-currency-dollar ti-sm"></i></div>
                  <h6 class="mb-0">Earnings</h6>
                </div>
                <h4 class="my-2 pt-1">$545.69</h4>
                <div class="progress w-75" style="height:4px">
                  <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class="d-flex gap-2 align-items-center">
                  <div class="badge rounded bg-label-info p-1"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                  <h6 class="mb-0">Profit</h6>
                </div>
                <h4 class="my-2 pt-1">$256.34</h4>
                <div class="progress w-75" style="height:4px">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class="d-flex gap-2 align-items-center">
                  <div class="badge rounded bg-label-danger p-1"><i class="ti ti-brand-paypal ti-sm"></i></div>
                  <h6 class="mb-0">Expense</h6>
                </div>
                <h4 class="my-2 pt-1">$74.19</h4>
                <div class="progress w-75" style="height:4px">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Earning Reports -->

    <!-- Support Tracker -->
    <div class="col-md-6 mb-4">
      <div class="card">
        <div class="card-header d-flex justify-content-between pb-0">
          <div class="card-title mb-0">
            <h5 class="mb-0">Support Tracker</h5>
            <small class="text-muted">Last 7 Days</small>
          </div>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="supportTrackerMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ti ti-dots-vertical ti-sm text-muted"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="supportTrackerMenu">
              <a class="dropdown-item" href="javascript:void(0);">View More</a>
              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-4 col-md-12 col-lg-4">
              <div class="mt-lg-4 mt-lg-2 mb-lg-4 mb-2 pt-1">
                <h1 class="mb-0">164</h1>
                <p class="mb-0">Total Tickets</p>
              </div>
              <ul class="p-0 m-0">
                <li class="d-flex gap-3 align-items-center mb-lg-3 pt-2 pb-1">
                  <div class="badge rounded bg-label-primary p-1"><i class="ti ti-ticket ti-sm"></i></div>
                  <div>
                    <h6 class="mb-0 text-nowrap">New Tickets</h6>
                    <small class="text-muted">142</small>
                  </div>
                </li>
                <li class="d-flex gap-3 align-items-center mb-lg-3 pb-1">
                  <div class="badge rounded bg-label-info p-1"><i class="ti ti-circle-check ti-sm"></i></div>
                  <div>
                    <h6 class="mb-0 text-nowrap">Open Tickets</h6>
                    <small class="text-muted">28</small>
                  </div>
                </li>
                <li class="d-flex gap-3 align-items-center pb-1">
                  <div class="badge rounded bg-label-warning p-1"><i class="ti ti-clock ti-sm"></i></div>
                  <div>
                    <h6 class="mb-0 text-nowrap">Response Time</h6>
                    <small class="text-muted">1 Day</small>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-12 col-sm-8 col-md-12 col-lg-8">
              <div id="supportTracker"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Support Tracker -->

    <!-- Sales By Country -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-header d-flex justify-content-between">
          <div class="card-title mb-0">
            <h5 class="m-0 me-2">Sales by Countries</h5>
            <small class="text-muted">Monthly Sales Overview</small>
          </div>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="salesByCountry" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ti ti-dots-vertical ti-sm text-muted"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountry">
              <a class="dropdown-item" href="javascript:void(0);">Download</a>
              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
              <a class="dropdown-item" href="javascript:void(0);">Share</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <ul class="p-0 m-0">
            <li class="d-flex align-items-center mb-4">
              <img src="{{asset('assets/svg/flags/us.svg')}}" alt="User" class="rounded-circle me-3" width="34">
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <div class="d-flex align-items-center">
                    <h6 class="mb-0 me-1">$8,567k</h6>

                  </div>
                  <small class="text-muted">United states</small>
                </div>
                <div class="user-progress">
                  <p class="text-success fw-semibold mb-0">
                    <i class='ti ti-chevron-up'></i>
                    25.8%
                  </p>
                </div>
              </div>
            </li>
            <li class="d-flex align-items-center mb-4">
              <img src="{{asset('assets/svg/flags/br.svg')}}" alt="User" class="rounded-circle me-3" width="34">
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <div class="d-flex align-items-center">
                    <h6 class="mb-0 me-1">$2,415k</h6>
                  </div>
                  <small class="text-muted">Brazil</small>
                </div>
                <div class="user-progress">
                  <p class="text-danger fw-semibold mb-0">
                    <i class='ti ti-chevron-down'></i>
                    6.2%
                  </p>
                </div>
              </div>
            </li>
            <li class="d-flex align-items-center mb-4">
              <img src="{{asset('assets/svg/flags/in.svg')}}" alt="User" class="rounded-circle me-3" width="34">
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <div class="d-flex align-items-center">
                    <h6 class="mb-0 me-1">$865k</h6>
                  </div>
                  <small class="text-muted">India</small>
                </div>
                <div class="user-progress">
                  <p class="text-success fw-semibold">
                    <i class='ti ti-chevron-up'></i>
                    12.4%
                  </p>
                </div>
              </div>
            </li>
            <li class="d-flex align-items-center mb-4">
              <img src="{{asset('assets/svg/flags/au.svg')}}" alt="User" class="rounded-circle me-3" width="34">
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <div class="d-flex align-items-center">
                    <h6 class="mb-0 me-1">$745k</h6>
                  </div>
                  <small class="text-muted">Australia</small>
                </div>
                <div class="user-progress">
                  <p class="text-danger fw-semibold mb-0">
                    <i class='ti ti-chevron-down'></i>
                    11.9%
                  </p>
                </div>
              </div>
            </li>
            <li class="d-flex align-items-center mb-4">
              <img src="{{asset('assets/svg/flags/fr.svg')}}" alt="User" class="rounded-circle me-3" width="34">
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <div class="d-flex align-items-center">
                    <h6 class="mb-0 me-1">$45</h6>
                  </div>
                  <small class="text-muted">France</small>
                </div>
                <div class="user-progress">
                  <p class="text-success fw-semibold mb-0">
                    <i class='ti ti-chevron-up'></i>
                    16.2%
                  </p>
                </div>
              </div>
            </li>
            <li class="d-flex align-items-center">
              <img src="{{asset('assets/svg/flags/cn.svg')}}" alt="User" class="rounded-circle me-3" width="34">
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <div class="d-flex align-items-center">
                    <h6 class="mb-0 me-1">$12k</h6>
                  </div>
                  <small class="text-muted">China</small>
                </div>
                <div class="user-progress">
                  <p class="text-success fw-semibold mb-0">
                    <i class='ti ti-chevron-up'></i>
                    14.8%
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--/ Sales By Country -->

    <!-- Total Earning -->
    <div class="col-12 col-xl-4 mb-4 col-md-6">
      <div class="card">
        <div class="card-header d-flex justify-content-between pb-1">
          <h5 class="mb-0 card-title">Total Earning</h5>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="totalEarning" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ti ti-dots-vertical ti-sm text-muted"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarning">
              <a class="dropdown-item" href="javascript:void(0);">View More</a>
              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex align-items-center">
            <h1 class="mb-0 me-2">87%</h1>
            <i class="ti ti-chevron-up text-success me-1"></i>
            <p class="text-success mb-0">25.8%</p>
          </div>
          <div id="totalEarningChart"></div>
          <div class="d-flex align-items-start my-4">
            <div class="badge rounded bg-label-primary p-2 me-3 rounded"><i class="ti ti-currency-dollar ti-sm"></i></div>
            <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
              <div class="me-2">
                <h6 class="mb-0">Total Sales</h6>
                <small class="text-muted">Refund</small>
              </div>
              <p class="mb-0 text-success">+$98</p>
            </div>
          </div>
          <div class="d-flex align-items-start">
            <div class="badge rounded bg-label-secondary p-2 me-3 rounded"><i class="ti ti-brand-paypal ti-sm"></i></div>
            <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
              <div class="me-2">
                <h6 class="mb-0">Total Revenue</h6>
                <small class="text-muted">Client Payment</small>
              </div>
              <p class="mb-0 text-success">+$126</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Total Earning -->

    <!-- Monthly Campaign State -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-header d-flex justify-content-between">
          <div class="card-title mb-0">
            <h5 class="mb-0">Monthly Campaign State</h5>
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
            <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
              <div class="badge bg-label-success rounded p-2"><i class="ti ti-mail ti-sm"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap">
                <h6 class="mb-0 ms-3">Emails</h6>
                <div class="d-flex">
                  <p class="mb-0 fw-semibold">12,346</p>
                  <p class="ms-3 text-success mb-0">0.3%</p>
                </div>
              </div>
            </li>
            <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
              <div class="badge bg-label-info rounded p-2"><i class="ti ti-link ti-sm"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap">
                <h6 class="mb-0 ms-3">Opened</h6>
                <div class="d-flex">
                  <p class="mb-0 fw-semibold">8,734</p>
                  <p class="ms-3 text-success mb-0">2.1%</p>
                </div>
              </div>
            </li>
            <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
              <div class="badge bg-label-warning rounded p-2"><i class="ti ti-click ti-sm"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap">
                <h6 class="mb-0 ms-3">Clicked</h6>
                <div class="d-flex">
                  <p class="mb-0 fw-semibold">967</p>
                  <p class="ms-3 text-success mb-0">1.4%</p>
                </div>
              </div>
            </li>
            <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
              <div class="badge bg-label-primary rounded p-2"><i class="ti ti-users ti-sm"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap">
                <h6 class="mb-0 ms-3">Subscribe</h6>
                <div class="d-flex">
                  <p class="mb-0 fw-semibold">345</p>
                  <p class="ms-3 text-success mb-0">8.5k</p>
                </div>
              </div>
            </li>
            <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
              <div class="badge bg-label-secondary rounded p-2"><i class="ti ti-alert-triangle ti-sm text-body"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap">
                <h6 class="mb-0 ms-3">Complaints</h6>
                <div class="d-flex">
                  <p class="mb-0 fw-semibold">10</p>
                  <p class="ms-3 text-success mb-0">1.5%</p>
                </div>
              </div>
            </li>
            <li class="d-flex justify-content-between align-items-center">
              <div class="badge bg-label-danger rounded p-2"><i class="ti ti-ban ti-sm"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap">
                <h6 class="mb-0 ms-3">Unsubscribe</h6>
                <div class="d-flex">
                  <p class="mb-0 fw-semibold">86</p>
                  <p class="ms-3 text-success mb-0">0.8%</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--/ Monthly Campaign State -->

    <!-- Source Visit -->
    <div class="col-xl-4 col-md-6 order-2 order-lg-1">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <div class="card-title mb-0">
            <h5 class="mb-0">Source Visits</h5>
            <small class="text-muted">38.4k Visitors</small>
          </div>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="sourceVisits" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ti ti-dots-vertical ti-sm text-muted"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sourceVisits">
              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
              <a class="dropdown-item" href="javascript:void(0);">Download</a>
              <a class="dropdown-item" href="javascript:void(0);">View All</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mb-0">
            <li class="mb-3 pb-1">
              <div class="d-flex align-items-start">
                <div class="badge bg-label-secondary p-2 me-3 rounded"><i class="ti ti-shadow ti-sm"></i></div>
                <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Direct Source</h6>
                    <small class="text-muted">Direct link click</small>
                  </div>
                  <div class="d-flex align-items-center">
                    <p class="mb-0">1.2k</p>
                    <div class="ms-3 badge bg-label-success">+4.2%</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="mb-3 pb-1">
              <div class="d-flex align-items-start">
                <div class="badge bg-label-secondary p-2 me-3 rounded"><i class="ti ti-globe ti-sm"></i></div>
                <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Social Network</h6>
                    <small class="text-muted">Social Channels</small>
                  </div>
                  <div class="d-flex align-items-center">
                    <p class="mb-0">31.5k</p>
                    <div class="ms-3 badge bg-label-success">+8.2%</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="mb-3 pb-1">
              <div class="d-flex align-items-start">
                <div class="badge bg-label-secondary p-2 me-3 rounded"><i class="ti ti-mail ti-sm"></i></div>
                <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Email Newsletter</h6>
                    <small class="text-muted">Mail Campaigns</small>
                  </div>
                  <div class="d-flex align-items-center">
                    <p class="mb-0">893</p>
                    <div class="ms-3 badge bg-label-success">+2.4%</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="mb-3 pb-1">
              <div class="d-flex align-items-start">
                <div class="badge bg-label-secondary p-2 me-3 rounded"><i class="ti ti-external-link ti-sm"></i></div>
                <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Referrals</h6>
                    <small class="text-muted">Impact Radius Visits</small>
                  </div>
                  <div class="d-flex align-items-center">
                    <p class="mb-0">342</p>
                    <div class="ms-3 badge bg-label-danger">-0.4%</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="mb-3 pb-1">
              <div class="d-flex align-items-start">
                <div class="badge bg-label-secondary p-2 me-3 rounded"><i class="ti ti-discount-2 ti-sm"></i></div>
                <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">ADVT</h6>
                    <small class="text-muted">Google ADVT</small>
                  </div>
                  <div class="d-flex align-items-center">
                    <p class="mb-0">2.15k</p>
                    <div class="ms-3 badge bg-label-success">+9.1%</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="mb-2">
              <div class="d-flex align-items-start">
                <div class="badge bg-label-secondary p-2 me-3 rounded"><i class="ti ti-star ti-sm"></i></div>
                <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Other</h6>
                    <small class="text-muted">Many Sources</small>
                  </div>
                  <div class="d-flex align-items-center">
                    <p class="mb-0">12.5k</p>
                    <div class="ms-3 badge bg-label-success">+6.2%</div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--/ Source Visit -->

    <div class="col-12 col-xl-8 mb-4 col-lg-7">
      <div class="card">
        <div class="card-header pb-3 ">
          <h5 class="m-0 me-2 card-title">Revenue Report</h5>
        </div>
        <div class="card-body">
          <div class="row row-bordered g-0">
            <div class="col-md-8">
              <div id="totalRevenueChart" style="min-height: 365px;"><div id="apexchartslfplfi6n" class="apexcharts-canvas apexchartslfplfi6n apexcharts-theme-light" style="width: 477px; height: 365px;"><svg id="SvgjsSvg1409" width="477" height="365" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="477" height="365"><div class="apexcharts-legend apexcharts-align-left apx-legend-position-top" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 182.5px;"><div class="apexcharts-legend-series" rel="1" seriesname="Earning" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(115, 103, 240) !important; color: rgb(115, 103, 240); height: 12px; width: 12px; left: -3px; top: 2px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Earning" data:collapsed="false" style="color: rgb(182, 190, 227); font-size: 12px; font-weight: 400; font-family: &quot;Public Sans&quot;;">Earning</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Expense" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(255, 159, 67) !important; color: rgb(255, 159, 67); height: 12px; width: 12px; left: -3px; top: 2px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Expense" data:collapsed="false" style="color: rgb(182, 190, 227); font-size: 12px; font-weight: 400; font-family: &quot;Public Sans&quot;;">Expense</span></div></div><style type="text/css">

                        .apexcharts-legend {
                          display: flex;
                          overflow: auto;
                          padding: 0 10px;
                        }
                        .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
                          flex-wrap: wrap
                        }
                        .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                          flex-direction: column;
                          bottom: 0;
                        }
                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                          justify-content: flex-start;
                        }
                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                          justify-content: center;
                        }
                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                          justify-content: flex-end;
                        }
                        .apexcharts-legend-series {
                          cursor: pointer;
                          line-height: normal;
                        }
                        .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{
                          display: flex;
                          align-items: center;
                        }
                        .apexcharts-legend-text {
                          position: relative;
                          font-size: 14px;
                        }
                        .apexcharts-legend-text *, .apexcharts-legend-marker * {
                          pointer-events: none;
                        }
                        .apexcharts-legend-marker {
                          position: relative;
                          display: inline-block;
                          cursor: pointer;
                          margin-right: 3px;
                          border-style: solid;
                        }

                        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
                          display: inline-block;
                        }
                        .apexcharts-legend-series.apexcharts-no-click {
                          cursor: auto;
                        }
                        .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
                          display: none !important;
                        }
                        .apexcharts-inactive-legend {
                          opacity: 0.45;
                        }</style></foreignObject><g id="SvgjsG1411" class="apexcharts-inner apexcharts-graphical" transform="translate(55.52617263793945, 72)"><defs id="SvgjsDefs1410"><linearGradient id="SvgjsLinearGradient1415" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1416" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1417" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1418" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMasklfplfi6n"><rect id="SvgjsRect1420" width="421.47382736206055" height="268.700799074173" x="-5" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasklfplfi6n"></clipPath><clipPath id="nonForecastMasklfplfi6n"></clipPath><clipPath id="gridRectMarkerMasklfplfi6n"><rect id="SvgjsRect1421" width="415.47382736206055" height="266.700799074173" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1419" width="0" height="262.700799074173" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1415)" class="apexcharts-xcrosshairs" y2="262.700799074173" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1445" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1446" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1448" font-family="Public Sans" x="22.85965707567003" y="291.700799074173" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7983bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1449">Jan</tspan><title>Jan</title></text><text id="SvgjsText1451" font-family="Public Sans" x="68.57897122701009" y="291.700799074173" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7983bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1452">Feb</tspan><title>Feb</title></text><text id="SvgjsText1454" font-family="Public Sans" x="114.29828537835014" y="291.700799074173" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7983bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1455">Mar</tspan><title>Mar</title></text><text id="SvgjsText1457" font-family="Public Sans" x="160.0175995296902" y="291.700799074173" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7983bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1458">Apr</tspan><title>Apr</title></text><text id="SvgjsText1460" font-family="Public Sans" x="205.73691368103027" y="291.700799074173" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7983bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1461">May</tspan><title>May</title></text><text id="SvgjsText1463" font-family="Public Sans" x="251.4562278323703" y="291.700799074173" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7983bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1464">Jun</tspan><title>Jun</title></text><text id="SvgjsText1466" font-family="Public Sans" x="297.17554198371033" y="291.700799074173" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7983bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1467">Jul</tspan><title>Jul</title></text><text id="SvgjsText1469" font-family="Public Sans" x="342.8948561350504" y="291.700799074173" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7983bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1470">Aug</tspan><title>Aug</title></text><text id="SvgjsText1472" font-family="Public Sans" x="388.6141702863905" y="291.700799074173" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7983bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1473">Sep</tspan><title>Sep</title></text></g></g><g id="SvgjsG1488" class="apexcharts-grid"><g id="SvgjsG1489" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1491" x1="0" y1="0" x2="411.47382736206055" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1492" x1="0" y1="52.5401598148346" x2="411.47382736206055" y2="52.5401598148346" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1493" x1="0" y1="105.0803196296692" x2="411.47382736206055" y2="105.0803196296692" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1494" x1="0" y1="157.62047944450381" x2="411.47382736206055" y2="157.62047944450381" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1495" x1="0" y1="210.1606392593384" x2="411.47382736206055" y2="210.1606392593384" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1496" x1="0" y1="262.700799074173" x2="411.47382736206055" y2="262.700799074173" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1490" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1498" x1="0" y1="262.700799074173" x2="411.47382736206055" y2="262.700799074173" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1497" x1="0" y1="1" x2="0" y2="262.700799074173" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1422" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1423" class="apexcharts-series" seriesName="Earning" rel="1" data:realIndex="0"><path id="SvgjsPath1425" d="M 13.030004533131915 147.62047944450381L 13.030004533131915 25.762047944450387Q 13.030004533131915 15.762047944450387 23.030004533131915 15.762047944450387L 16.689309618208142 15.762047944450387Q 26.689309618208142 15.762047944450387 26.689309618208142 25.762047944450387L 26.689309618208142 25.762047944450387L 26.689309618208142 147.62047944450381Q 26.689309618208142 157.62047944450381 16.689309618208142 157.62047944450381L 23.030004533131915 157.62047944450381Q 13.030004533131915 157.62047944450381 13.030004533131915 147.62047944450381z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#2f3349" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklfplfi6n)" pathTo="M 13.030004533131915 147.62047944450381L 13.030004533131915 25.762047944450387Q 13.030004533131915 15.762047944450387 23.030004533131915 15.762047944450387L 16.689309618208142 15.762047944450387Q 26.689309618208142 15.762047944450387 26.689309618208142 25.762047944450387L 26.689309618208142 25.762047944450387L 26.689309618208142 147.62047944450381Q 26.689309618208142 157.62047944450381 16.689309618208142 157.62047944450381L 23.030004533131915 157.62047944450381Q 13.030004533131915 157.62047944450381 13.030004533131915 147.62047944450381z" pathFrom="M 13.030004533131915 147.62047944450381L 13.030004533131915 147.62047944450381L 26.689309618208142 147.62047944450381L 26.689309618208142 147.62047944450381L 26.689309618208142 147.62047944450381L 26.689309618208142 147.62047944450381L 26.689309618208142 147.62047944450381L 13.030004533131915 147.62047944450381" cy="15.762047944450387" cx="55.74931868447197" j="0" val="270" barHeight="141.85843150005343" barWidth="19.659305085076227"></path><path id="SvgjsPath1426" d="M 58.74931868447197 147.62047944450381L 58.74931868447197 57.28614383335115Q 58.74931868447197 47.28614383335115 68.74931868447197 47.28614383335115L 62.4086237695482 47.28614383335115Q 72.4086237695482 47.28614383335115 72.4086237695482 57.28614383335115L 72.4086237695482 57.28614383335115L 72.4086237695482 147.62047944450381Q 72.4086237695482 157.62047944450381 62.4086237695482 157.62047944450381L 68.74931868447197 157.62047944450381Q 58.74931868447197 157.62047944450381 58.74931868447197 147.62047944450381z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#2f3349" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklfplfi6n)" pathTo="M 58.74931868447197 147.62047944450381L 58.74931868447197 57.28614383335115Q 58.74931868447197 47.28614383335115 68.74931868447197 47.28614383335115L 62.4086237695482 47.28614383335115Q 72.4086237695482 47.28614383335115 72.4086237695482 57.28614383335115L 72.4086237695482 57.28614383335115L 72.4086237695482 147.62047944450381Q 72.4086237695482 157.62047944450381 62.4086237695482 157.62047944450381L 68.74931868447197 157.62047944450381Q 58.74931868447197 157.62047944450381 58.74931868447197 147.62047944450381z" pathFrom="M 58.74931868447197 147.62047944450381L 58.74931868447197 147.62047944450381L 72.4086237695482 147.62047944450381L 72.4086237695482 147.62047944450381L 72.4086237695482 147.62047944450381L 72.4086237695482 147.62047944450381L 72.4086237695482 147.62047944450381L 58.74931868447197 147.62047944450381" cy="47.28614383335115" cx="101.46863283581203" j="1" val="210" barHeight="110.33433561115267" barWidth="19.659305085076227"></path><path id="SvgjsPath1427" d="M 104.46863283581203 147.62047944450381L 104.46863283581203 73.04819177780153Q 104.46863283581203 63.048191777801534 114.46863283581203 63.048191777801534L 108.12793792088826 63.048191777801534Q 118.12793792088826 63.048191777801534 118.12793792088826 73.04819177780153L 118.12793792088826 73.04819177780153L 118.12793792088826 147.62047944450381Q 118.12793792088826 157.62047944450381 108.12793792088826 157.62047944450381L 114.46863283581203 157.62047944450381Q 104.46863283581203 157.62047944450381 104.46863283581203 147.62047944450381z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#2f3349" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklfplfi6n)" pathTo="M 104.46863283581203 147.62047944450381L 104.46863283581203 73.04819177780153Q 104.46863283581203 63.048191777801534 114.46863283581203 63.048191777801534L 108.12793792088826 63.048191777801534Q 118.12793792088826 63.048191777801534 118.12793792088826 73.04819177780153L 118.12793792088826 73.04819177780153L 118.12793792088826 147.62047944450381Q 118.12793792088826 157.62047944450381 108.12793792088826 157.62047944450381L 114.46863283581203 157.62047944450381Q 104.46863283581203 157.62047944450381 104.46863283581203 147.62047944450381z" pathFrom="M 104.46863283581203 147.62047944450381L 104.46863283581203 147.62047944450381L 118.12793792088826 147.62047944450381L 118.12793792088826 147.62047944450381L 118.12793792088826 147.62047944450381L 118.12793792088826 147.62047944450381L 118.12793792088826 147.62047944450381L 104.46863283581203 147.62047944450381" cy="63.048191777801534" cx="147.1879469871521" j="2" val="180" barHeight="94.57228766670228" barWidth="19.659305085076227"></path><path id="SvgjsPath1428" d="M 150.1879469871521 147.62047944450381L 150.1879469871521 62.54015981483461Q 150.1879469871521 52.54015981483461 160.1879469871521 52.54015981483461L 153.84725207222832 52.54015981483461Q 163.84725207222832 52.54015981483461 163.84725207222832 62.54015981483461L 163.84725207222832 62.54015981483461L 163.84725207222832 147.62047944450381Q 163.84725207222832 157.62047944450381 153.84725207222832 157.62047944450381L 160.1879469871521 157.62047944450381Q 150.1879469871521 157.62047944450381 150.1879469871521 147.62047944450381z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#2f3349" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklfplfi6n)" pathTo="M 150.1879469871521 147.62047944450381L 150.1879469871521 62.54015981483461Q 150.1879469871521 52.54015981483461 160.1879469871521 52.54015981483461L 153.84725207222832 52.54015981483461Q 163.84725207222832 52.54015981483461 163.84725207222832 62.54015981483461L 163.84725207222832 62.54015981483461L 163.84725207222832 147.62047944450381Q 163.84725207222832 157.62047944450381 153.84725207222832 157.62047944450381L 160.1879469871521 157.62047944450381Q 150.1879469871521 157.62047944450381 150.1879469871521 147.62047944450381z" pathFrom="M 150.1879469871521 147.62047944450381L 150.1879469871521 147.62047944450381L 163.84725207222832 147.62047944450381L 163.84725207222832 147.62047944450381L 163.84725207222832 147.62047944450381L 163.84725207222832 147.62047944450381L 163.84725207222832 147.62047944450381L 150.1879469871521 147.62047944450381" cy="52.54015981483461" cx="192.90726113849215" j="3" val="200" barHeight="105.0803196296692" barWidth="19.659305085076227"></path><path id="SvgjsPath1429" d="M 195.90726113849215 147.62047944450381L 195.90726113849215 36.27007990741731Q 195.90726113849215 26.270079907417312 205.90726113849215 26.270079907417312L 199.56656622356837 26.270079907417312Q 209.56656622356837 26.270079907417312 209.56656622356837 36.27007990741731L 209.56656622356837 36.27007990741731L 209.56656622356837 147.62047944450381Q 209.56656622356837 157.62047944450381 199.56656622356837 157.62047944450381L 205.90726113849215 157.62047944450381Q 195.90726113849215 157.62047944450381 195.90726113849215 147.62047944450381z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#2f3349" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklfplfi6n)" pathTo="M 195.90726113849215 147.62047944450381L 195.90726113849215 36.27007990741731Q 195.90726113849215 26.270079907417312 205.90726113849215 26.270079907417312L 199.56656622356837 26.270079907417312Q 209.56656622356837 26.270079907417312 209.56656622356837 36.27007990741731L 209.56656622356837 36.27007990741731L 209.56656622356837 147.62047944450381Q 209.56656622356837 157.62047944450381 199.56656622356837 157.62047944450381L 205.90726113849215 157.62047944450381Q 195.90726113849215 157.62047944450381 195.90726113849215 147.62047944450381z" pathFrom="M 195.90726113849215 147.62047944450381L 195.90726113849215 147.62047944450381L 209.56656622356837 147.62047944450381L 209.56656622356837 147.62047944450381L 209.56656622356837 147.62047944450381L 209.56656622356837 147.62047944450381L 209.56656622356837 147.62047944450381L 195.90726113849215 147.62047944450381" cy="26.270079907417312" cx="238.6265752898322" j="4" val="250" barHeight="131.3503995370865" barWidth="19.659305085076227"></path><path id="SvgjsPath1430" d="M 241.6265752898322 147.62047944450381L 241.6265752898322 20.508031962966925Q 241.6265752898322 10.508031962966925 251.6265752898322 10.508031962966925L 245.2858803749084 10.508031962966925Q 255.2858803749084 10.508031962966925 255.2858803749084 20.508031962966925L 255.2858803749084 20.508031962966925L 255.2858803749084 147.62047944450381Q 255.2858803749084 157.62047944450381 245.2858803749084 157.62047944450381L 251.6265752898322 157.62047944450381Q 241.6265752898322 157.62047944450381 241.6265752898322 147.62047944450381z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#2f3349" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklfplfi6n)" pathTo="M 241.6265752898322 147.62047944450381L 241.6265752898322 20.508031962966925Q 241.6265752898322 10.508031962966925 251.6265752898322 10.508031962966925L 245.2858803749084 10.508031962966925Q 255.2858803749084 10.508031962966925 255.2858803749084 20.508031962966925L 255.2858803749084 20.508031962966925L 255.2858803749084 147.62047944450381Q 255.2858803749084 157.62047944450381 245.2858803749084 157.62047944450381L 251.6265752898322 157.62047944450381Q 241.6265752898322 157.62047944450381 241.6265752898322 147.62047944450381z" pathFrom="M 241.6265752898322 147.62047944450381L 241.6265752898322 147.62047944450381L 255.2858803749084 147.62047944450381L 255.2858803749084 147.62047944450381L 255.2858803749084 147.62047944450381L 255.2858803749084 147.62047944450381L 255.2858803749084 147.62047944450381L 241.6265752898322 147.62047944450381" cy="10.508031962966925" cx="284.3458894411723" j="5" val="280" barHeight="147.1124474815369" barWidth="19.659305085076227"></path><path id="SvgjsPath1431" d="M 287.3458894411723 147.62047944450381L 287.3458894411723 36.27007990741731Q 287.3458894411723 26.270079907417312 297.3458894411723 26.270079907417312L 291.0051945262485 26.270079907417312Q 301.0051945262485 26.270079907417312 301.0051945262485 36.27007990741731L 301.0051945262485 36.27007990741731L 301.0051945262485 147.62047944450381Q 301.0051945262485 157.62047944450381 291.0051945262485 157.62047944450381L 297.3458894411723 157.62047944450381Q 287.3458894411723 157.62047944450381 287.3458894411723 147.62047944450381z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#2f3349" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklfplfi6n)" pathTo="M 287.3458894411723 147.62047944450381L 287.3458894411723 36.27007990741731Q 287.3458894411723 26.270079907417312 297.3458894411723 26.270079907417312L 291.0051945262485 26.270079907417312Q 301.0051945262485 26.270079907417312 301.0051945262485 36.27007990741731L 301.0051945262485 36.27007990741731L 301.0051945262485 147.62047944450381Q 301.0051945262485 157.62047944450381 291.0051945262485 157.62047944450381L 297.3458894411723 157.62047944450381Q 287.3458894411723 157.62047944450381 287.3458894411723 147.62047944450381z" pathFrom="M 287.3458894411723 147.62047944450381L 287.3458894411723 147.62047944450381L 301.0051945262485 147.62047944450381L 301.0051945262485 147.62047944450381L 301.0051945262485 147.62047944450381L 301.0051945262485 147.62047944450381L 301.0051945262485 147.62047944450381L 287.3458894411723 147.62047944450381" cy="26.270079907417312" cx="330.0652035925124" j="6" val="250" barHeight="131.3503995370865" barWidth="19.659305085076227"></path><path id="SvgjsPath1432" d="M 333.0652035925124 147.62047944450381L 333.0652035925124 25.762047944450387Q 333.0652035925124 15.762047944450387 343.0652035925124 15.762047944450387L 336.7245086775886 15.762047944450387Q 346.7245086775886 15.762047944450387 346.7245086775886 25.762047944450387L 346.7245086775886 25.762047944450387L 346.7245086775886 147.62047944450381Q 346.7245086775886 157.62047944450381 336.7245086775886 157.62047944450381L 343.0652035925124 157.62047944450381Q 333.0652035925124 157.62047944450381 333.0652035925124 147.62047944450381z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#2f3349" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklfplfi6n)" pathTo="M 333.0652035925124 147.62047944450381L 333.0652035925124 25.762047944450387Q 333.0652035925124 15.762047944450387 343.0652035925124 15.762047944450387L 336.7245086775886 15.762047944450387Q 346.7245086775886 15.762047944450387 346.7245086775886 25.762047944450387L 346.7245086775886 25.762047944450387L 346.7245086775886 147.62047944450381Q 346.7245086775886 157.62047944450381 336.7245086775886 157.62047944450381L 343.0652035925124 157.62047944450381Q 333.0652035925124 157.62047944450381 333.0652035925124 147.62047944450381z" pathFrom="M 333.0652035925124 147.62047944450381L 333.0652035925124 147.62047944450381L 346.7245086775886 147.62047944450381L 346.7245086775886 147.62047944450381L 346.7245086775886 147.62047944450381L 346.7245086775886 147.62047944450381L 346.7245086775886 147.62047944450381L 333.0652035925124 147.62047944450381" cy="15.762047944450387" cx="375.78451774385246" j="7" val="270" barHeight="141.85843150005343" barWidth="19.659305085076227"></path><path id="SvgjsPath1433" d="M 378.78451774385246 147.62047944450381L 378.78451774385246 88.81023972225191Q 378.78451774385246 78.81023972225191 388.78451774385246 78.81023972225191L 382.44382282892866 78.81023972225191Q 392.44382282892866 78.81023972225191 392.44382282892866 88.81023972225191L 392.44382282892866 88.81023972225191L 392.44382282892866 147.62047944450381Q 392.44382282892866 157.62047944450381 382.44382282892866 157.62047944450381L 388.78451774385246 157.62047944450381Q 378.78451774385246 157.62047944450381 378.78451774385246 147.62047944450381z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#2f3349" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklfplfi6n)" pathTo="M 378.78451774385246 147.62047944450381L 378.78451774385246 88.81023972225191Q 378.78451774385246 78.81023972225191 388.78451774385246 78.81023972225191L 382.44382282892866 78.81023972225191Q 392.44382282892866 78.81023972225191 392.44382282892866 88.81023972225191L 392.44382282892866 88.81023972225191L 392.44382282892866 147.62047944450381Q 392.44382282892866 157.62047944450381 382.44382282892866 157.62047944450381L 388.78451774385246 157.62047944450381Q 378.78451774385246 157.62047944450381 378.78451774385246 147.62047944450381z" pathFrom="M 378.78451774385246 147.62047944450381L 378.78451774385246 147.62047944450381L 392.44382282892866 147.62047944450381L 392.44382282892866 147.62047944450381L 392.44382282892866 147.62047944450381L 392.44382282892866 147.62047944450381L 392.44382282892866 147.62047944450381L 378.78451774385246 147.62047944450381" cy="78.81023972225191" cx="421.50383189519255" j="8" val="150" barHeight="78.81023972225191" barWidth="19.659305085076227"></path></g><g id="SvgjsG1434" class="apexcharts-series" seriesName="Expense" rel="2" data:realIndex="1"><path id="SvgjsPath1436" d="M 13.030004533131915 177.62047944450381L 13.030004533131915 231.17670318527226Q 13.030004533131915 241.17670318527226 23.030004533131915 241.17670318527226L 16.689309618208142 241.17670318527226Q 26.689309618208142 241.17670318527226 26.689309618208142 231.17670318527226L 26.689309618208142 231.17670318527226L 26.689309618208142 177.62047944450381Q 26.689309618208142 167.62047944450381 16.689309618208142 167.62047944450381L 23.030004533131915 167.62047944450381Q 13.030004533131915 167.62047944450381 13.030004533131915 177.62047944450381z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke="#2f3349" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklfplfi6n)" pathTo="M 13.030004533131915 177.62047944450381L 13.030004533131915 231.17670318527226Q 13.030004533131915 241.17670318527226 23.030004533131915 241.17670318527226L 16.689309618208142 241.17670318527226Q 26.689309618208142 241.17670318527226 26.689309618208142 231.17670318527226L 26.689309618208142 231.17670318527226L 26.689309618208142 177.62047944450381Q 26.689309618208142 167.62047944450381 16.689309618208142 167.62047944450381L 23.030004533131915 167.62047944450381Q 13.030004533131915 167.62047944450381 13.030004533131915 177.62047944450381z" pathFrom="M 13.030004533131915 177.62047944450381L 13.030004533131915 177.62047944450381L 26.689309618208142 177.62047944450381L 26.689309618208142 177.62047944450381L 26.689309618208142 177.62047944450381L 26.689309618208142 177.62047944450381L 26.689309618208142 177.62047944450381L 13.030004533131915 177.62047944450381" cy="221.17670318527226" cx="55.74931868447197" j="0" val="-140" barHeight="-73.55622374076844" barWidth="19.659305085076227"></path><path id="SvgjsPath1437" d="M 58.74931868447197 177.62047944450381L 58.74931868447197 241.68473514823918Q 58.74931868447197 251.68473514823918 68.74931868447197 251.68473514823918L 62.4086237695482 251.68473514823918Q 72.4086237695482 251.68473514823918 72.4086237695482 241.68473514823918L 72.4086237695482 241.68473514823918L 72.4086237695482 177.62047944450381Q 72.4086237695482 167.62047944450381 62.4086237695482 167.62047944450381L 68.74931868447197 167.62047944450381Q 58.74931868447197 167.62047944450381 58.74931868447197 177.62047944450381z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke="#2f3349" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklfplfi6n)" pathTo="M 58.74931868447197 177.62047944450381L 58.74931868447197 241.68473514823918Q 58.74931868447197 251.68473514823918 68.74931868447197 251.68473514823918L 62.4086237695482 251.68473514823918Q 72.4086237695482 251.68473514823918 72.4086237695482 241.68473514823918L 72.4086237695482 241.68473514823918L 72.4086237695482 177.62047944450381Q 72.4086237695482 167.62047944450381 62.4086237695482 167.62047944450381L 68.74931868447197 167.62047944450381Q 58.74931868447197 167.62047944450381 58.74931868447197 177.62047944450381z" pathFrom="M 58.74931868447197 177.62047944450381L 58.74931868447197 177.62047944450381L 72.4086237695482 177.62047944450381L 72.4086237695482 177.62047944450381L 72.4086237695482 177.62047944450381L 72.4086237695482 177.62047944450381L 72.4086237695482 177.62047944450381L 58.74931868447197 177.62047944450381" cy="231.68473514823918" cx="101.46863283581203" j="1" val="-160" barHeight="-84.06425570373537" barWidth="19.659305085076227"></path><path id="SvgjsPath1438" d="M 104.46863283581203 177.62047944450381L 104.46863283581203 252.19276711120608Q 104.46863283581203 262.1927671112061 114.46863283581203 262.1927671112061L 108.12793792088826 262.1927671112061Q 118.12793792088826 262.1927671112061 118.12793792088826 252.19276711120608L 118.12793792088826 252.19276711120608L 118.12793792088826 177.62047944450381Q 118.12793792088826 167.62047944450381 108.12793792088826 167.62047944450381L 114.46863283581203 167.62047944450381Q 104.46863283581203 167.62047944450381 104.46863283581203 177.62047944450381z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke="#2f3349" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklfplfi6n)" pathTo="M 104.46863283581203 177.62047944450381L 104.46863283581203 252.19276711120608Q 104.46863283581203 262.1927671112061 114.46863283581203 262.1927671112061L 108.12793792088826 262.1927671112061Q 118.12793792088826 262.1927671112061 118.12793792088826 252.19276711120608L 118.12793792088826 252.19276711120608L 118.12793792088826 177.62047944450381Q 118.12793792088826 167.62047944450381 108.12793792088826 167.62047944450381L 114.46863283581203 167.62047944450381Q 104.46863283581203 167.62047944450381 104.46863283581203 177.62047944450381z" pathFrom="M 104.46863283581203 177.62047944450381L 104.46863283581203 177.62047944450381L 118.12793792088826 177.62047944450381L 118.12793792088826 177.62047944450381L 118.12793792088826 177.62047944450381L 118.12793792088826 177.62047944450381L 118.12793792088826 177.62047944450381L 104.46863283581203 177.62047944450381" cy="242.19276711120608" cx="147.1879469871521" j="2" val="-180" barHeight="-94.57228766670228" barWidth="19.659305085076227"></path><path id="SvgjsPath1439" d="M 150.1879469871521 177.62047944450381L 150.1879469871521 236.43071916675572Q 150.1879469871521 246.43071916675572 160.1879469871521 246.43071916675572L 153.84725207222832 246.43071916675572Q 163.84725207222832 246.43071916675572 163.84725207222832 236.43071916675572L 163.84725207222832 236.43071916675572L 163.84725207222832 177.62047944450381Q 163.84725207222832 167.62047944450381 153.84725207222832 167.62047944450381L 160.1879469871521 167.62047944450381Q 150.1879469871521 167.62047944450381 150.1879469871521 177.62047944450381z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke="#2f3349" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklfplfi6n)" pathTo="M 150.1879469871521 177.62047944450381L 150.1879469871521 236.43071916675572Q 150.1879469871521 246.43071916675572 160.1879469871521 246.43071916675572L 153.84725207222832 246.43071916675572Q 163.84725207222832 246.43071916675572 163.84725207222832 236.43071916675572L 163.84725207222832 236.43071916675572L 163.84725207222832 177.62047944450381Q 163.84725207222832 167.62047944450381 153.84725207222832 167.62047944450381L 160.1879469871521 167.62047944450381Q 150.1879469871521 167.62047944450381 150.1879469871521 177.62047944450381z" pathFrom="M 150.1879469871521 177.62047944450381L 150.1879469871521 177.62047944450381L 163.84725207222832 177.62047944450381L 163.84725207222832 177.62047944450381L 163.84725207222832 177.62047944450381L 163.84725207222832 177.62047944450381L 163.84725207222832 177.62047944450381L 150.1879469871521 177.62047944450381" cy="226.43071916675572" cx="192.90726113849215" j="3" val="-150" barHeight="-78.81023972225191" barWidth="19.659305085076227"></path><path id="SvgjsPath1440" d="M 195.90726113849215 177.62047944450381L 195.90726113849215 210.1606392593384Q 195.90726113849215 220.1606392593384 205.90726113849215 220.1606392593384L 199.56656622356837 220.1606392593384Q 209.56656622356837 220.1606392593384 209.56656622356837 210.1606392593384L 209.56656622356837 210.1606392593384L 209.56656622356837 177.62047944450381Q 209.56656622356837 167.62047944450381 199.56656622356837 167.62047944450381L 205.90726113849215 167.62047944450381Q 195.90726113849215 167.62047944450381 195.90726113849215 177.62047944450381z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke="#2f3349" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklfplfi6n)" pathTo="M 195.90726113849215 177.62047944450381L 195.90726113849215 210.1606392593384Q 195.90726113849215 220.1606392593384 205.90726113849215 220.1606392593384L 199.56656622356837 220.1606392593384Q 209.56656622356837 220.1606392593384 209.56656622356837 210.1606392593384L 209.56656622356837 210.1606392593384L 209.56656622356837 177.62047944450381Q 209.56656622356837 167.62047944450381 199.56656622356837 167.62047944450381L 205.90726113849215 167.62047944450381Q 195.90726113849215 167.62047944450381 195.90726113849215 177.62047944450381z" pathFrom="M 195.90726113849215 177.62047944450381L 195.90726113849215 177.62047944450381L 209.56656622356837 177.62047944450381L 209.56656622356837 177.62047944450381L 209.56656622356837 177.62047944450381L 209.56656622356837 177.62047944450381L 209.56656622356837 177.62047944450381L 195.90726113849215 177.62047944450381" cy="200.1606392593384" cx="238.6265752898322" j="4" val="-100" barHeight="-52.5401598148346" barWidth="19.659305085076227"></path><path id="SvgjsPath1441" d="M 241.6265752898322 177.62047944450381L 241.6265752898322 189.1445753334046Q 241.6265752898322 199.1445753334046 251.6265752898322 199.1445753334046L 245.2858803749084 199.1445753334046Q 255.2858803749084 199.1445753334046 255.2858803749084 189.1445753334046L 255.2858803749084 189.1445753334046L 255.2858803749084 177.62047944450381Q 255.2858803749084 167.62047944450381 245.2858803749084 167.62047944450381L 251.6265752898322 167.62047944450381Q 241.6265752898322 167.62047944450381 241.6265752898322 177.62047944450381z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke="#2f3349" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklfplfi6n)" pathTo="M 241.6265752898322 177.62047944450381L 241.6265752898322 189.1445753334046Q 241.6265752898322 199.1445753334046 251.6265752898322 199.1445753334046L 245.2858803749084 199.1445753334046Q 255.2858803749084 199.1445753334046 255.2858803749084 189.1445753334046L 255.2858803749084 189.1445753334046L 255.2858803749084 177.62047944450381Q 255.2858803749084 167.62047944450381 245.2858803749084 167.62047944450381L 251.6265752898322 167.62047944450381Q 241.6265752898322 167.62047944450381 241.6265752898322 177.62047944450381z" pathFrom="M 241.6265752898322 177.62047944450381L 241.6265752898322 177.62047944450381L 255.2858803749084 177.62047944450381L 255.2858803749084 177.62047944450381L 255.2858803749084 177.62047944450381L 255.2858803749084 177.62047944450381L 255.2858803749084 177.62047944450381L 241.6265752898322 177.62047944450381" cy="179.1445753334046" cx="284.3458894411723" j="5" val="-60" barHeight="-31.52409588890076" barWidth="19.659305085076227"></path><path id="SvgjsPath1442" d="M 287.3458894411723 177.62047944450381L 287.3458894411723 199.6526072963715Q 287.3458894411723 209.6526072963715 297.3458894411723 209.6526072963715L 291.0051945262485 209.6526072963715Q 301.0051945262485 209.6526072963715 301.0051945262485 199.6526072963715L 301.0051945262485 199.6526072963715L 301.0051945262485 177.62047944450381Q 301.0051945262485 167.62047944450381 291.0051945262485 167.62047944450381L 297.3458894411723 167.62047944450381Q 287.3458894411723 167.62047944450381 287.3458894411723 177.62047944450381z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke="#2f3349" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklfplfi6n)" pathTo="M 287.3458894411723 177.62047944450381L 287.3458894411723 199.6526072963715Q 287.3458894411723 209.6526072963715 297.3458894411723 209.6526072963715L 291.0051945262485 209.6526072963715Q 301.0051945262485 209.6526072963715 301.0051945262485 199.6526072963715L 301.0051945262485 199.6526072963715L 301.0051945262485 177.62047944450381Q 301.0051945262485 167.62047944450381 291.0051945262485 167.62047944450381L 297.3458894411723 167.62047944450381Q 287.3458894411723 167.62047944450381 287.3458894411723 177.62047944450381z" pathFrom="M 287.3458894411723 177.62047944450381L 287.3458894411723 177.62047944450381L 301.0051945262485 177.62047944450381L 301.0051945262485 177.62047944450381L 301.0051945262485 177.62047944450381L 301.0051945262485 177.62047944450381L 301.0051945262485 177.62047944450381L 287.3458894411723 177.62047944450381" cy="189.6526072963715" cx="330.0652035925124" j="6" val="-80" barHeight="-42.032127851867685" barWidth="19.659305085076227"></path><path id="SvgjsPath1443" d="M 333.0652035925124 177.62047944450381L 333.0652035925124 210.1606392593384Q 333.0652035925124 220.1606392593384 343.0652035925124 220.1606392593384L 336.7245086775886 220.1606392593384Q 346.7245086775886 220.1606392593384 346.7245086775886 210.1606392593384L 346.7245086775886 210.1606392593384L 346.7245086775886 177.62047944450381Q 346.7245086775886 167.62047944450381 336.7245086775886 167.62047944450381L 343.0652035925124 167.62047944450381Q 333.0652035925124 167.62047944450381 333.0652035925124 177.62047944450381z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke="#2f3349" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklfplfi6n)" pathTo="M 333.0652035925124 177.62047944450381L 333.0652035925124 210.1606392593384Q 333.0652035925124 220.1606392593384 343.0652035925124 220.1606392593384L 336.7245086775886 220.1606392593384Q 346.7245086775886 220.1606392593384 346.7245086775886 210.1606392593384L 346.7245086775886 210.1606392593384L 346.7245086775886 177.62047944450381Q 346.7245086775886 167.62047944450381 336.7245086775886 167.62047944450381L 343.0652035925124 167.62047944450381Q 333.0652035925124 167.62047944450381 333.0652035925124 177.62047944450381z" pathFrom="M 333.0652035925124 177.62047944450381L 333.0652035925124 177.62047944450381L 346.7245086775886 177.62047944450381L 346.7245086775886 177.62047944450381L 346.7245086775886 177.62047944450381L 346.7245086775886 177.62047944450381L 346.7245086775886 177.62047944450381L 333.0652035925124 177.62047944450381" cy="200.1606392593384" cx="375.78451774385246" j="7" val="-100" barHeight="-52.5401598148346" barWidth="19.659305085076227"></path><path id="SvgjsPath1444" d="M 378.78451774385246 177.62047944450381L 378.78451774385246 252.19276711120608Q 378.78451774385246 262.1927671112061 388.78451774385246 262.1927671112061L 382.44382282892866 262.1927671112061Q 392.44382282892866 262.1927671112061 392.44382282892866 252.19276711120608L 392.44382282892866 252.19276711120608L 392.44382282892866 177.62047944450381Q 392.44382282892866 167.62047944450381 382.44382282892866 167.62047944450381L 388.78451774385246 167.62047944450381Q 378.78451774385246 167.62047944450381 378.78451774385246 177.62047944450381z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke="#2f3349" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklfplfi6n)" pathTo="M 378.78451774385246 177.62047944450381L 378.78451774385246 252.19276711120608Q 378.78451774385246 262.1927671112061 388.78451774385246 262.1927671112061L 382.44382282892866 262.1927671112061Q 392.44382282892866 262.1927671112061 392.44382282892866 252.19276711120608L 392.44382282892866 252.19276711120608L 392.44382282892866 177.62047944450381Q 392.44382282892866 167.62047944450381 382.44382282892866 167.62047944450381L 388.78451774385246 167.62047944450381Q 378.78451774385246 167.62047944450381 378.78451774385246 177.62047944450381z" pathFrom="M 378.78451774385246 177.62047944450381L 378.78451774385246 177.62047944450381L 392.44382282892866 177.62047944450381L 392.44382282892866 177.62047944450381L 392.44382282892866 177.62047944450381L 392.44382282892866 177.62047944450381L 392.44382282892866 177.62047944450381L 378.78451774385246 177.62047944450381" cy="242.19276711120608" cx="421.50383189519255" j="8" val="-180" barHeight="-94.57228766670228" barWidth="19.659305085076227"></path></g><g id="SvgjsG1424" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1435" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1499" x1="0" y1="0" x2="411.47382736206055" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1500" x1="0" y1="0" x2="411.47382736206055" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1501" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1502" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1503" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1474" class="apexcharts-yaxis" rel="0" transform="translate(9.526172637939453, 0)"><g id="SvgjsG1475" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1476" font-family="Public Sans" x="20" y="73.5" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7983bb" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1477">300</tspan><title>300</title></text><text id="SvgjsText1478" font-family="Public Sans" x="20" y="126.0401598148346" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7983bb" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1479">200</tspan><title>200</title></text><text id="SvgjsText1480" font-family="Public Sans" x="20" y="178.5803196296692" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7983bb" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1481">100</tspan><title>100</title></text><text id="SvgjsText1482" font-family="Public Sans" x="20" y="231.1204794445038" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7983bb" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1483">0</tspan><title>0</title></text><text id="SvgjsText1484" font-family="Public Sans" x="20" y="283.6606392593384" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7983bb" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1485">-100</tspan><title>-100</title></text><text id="SvgjsText1486" font-family="Public Sans" x="20" y="336.200799074173" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#7983bb" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1487">-200</tspan><title>-200</title></text></g></g><g id="SvgjsG1412" class="apexcharts-annotations"></g></svg></div></div>
              <div class="resize-triggers"><div class="expand-trigger"><div style="width: 478px; height: 367px;"></div></div><div class="contract-trigger"></div></div></div>
            <div class="col-md-4">
              <div class="text-center mt-4">
                <div class="dropdown">
                  <button class="btn btn-sm btn-outline-primary dropdown-toggle waves-effect" type="button" id="budgetId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <script>
                      document.write(new Date().getFullYear())

                    </script>2023
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="budgetId">
                    <a class="dropdown-item prev-year1" href="javascript:void(0);">
                      <script>
                        document.write(new Date().getFullYear() - 1)

                      </script>2022
                    </a>
                    <a class="dropdown-item prev-year2" href="javascript:void(0);">
                      <script>
                        document.write(new Date().getFullYear() - 2)

                      </script>2021
                    </a>
                    <a class="dropdown-item prev-year3" href="javascript:void(0);">
                      <script>
                        document.write(new Date().getFullYear() - 3)

                      </script>2020
                    </a>
                  </div>
                </div>
              </div>
              <h3 class="text-center pt-4 mb-0">$25,825</h3>
              <p class="mb-4 text-center"><span class="fw-semibold">Budget: </span>56,800</p>
              <div class="px-3" style="position: relative;">
                <div id="budgetChart" style="min-height: 115px;"><div id="apexchartsxxhnmhe" class="apexcharts-canvas apexchartsxxhnmhe apexcharts-theme-light" style="width: 206px; height: 100px;"><svg id="SvgjsSvg1504" width="206" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1506" class="apexcharts-inner apexcharts-graphical" transform="translate(25, 0)"><defs id="SvgjsDefs1505"><clipPath id="gridRectMaskxxhnmhe"><rect id="SvgjsRect1511" width="177" height="102" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskxxhnmhe"></clipPath><clipPath id="nonForecastMaskxxhnmhe"></clipPath><clipPath id="gridRectMarkerMaskxxhnmhe"><rect id="SvgjsRect1512" width="175" height="104" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1510" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1522" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1523" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1536" class="apexcharts-grid"><g id="SvgjsG1537" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1539" x1="0" y1="0" x2="171" y2="0" stroke="#434968" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1540" x1="0" y1="25" x2="171" y2="25" stroke="#434968" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1541" x1="0" y1="50" x2="171" y2="50" stroke="#434968" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1542" x1="0" y1="75" x2="171" y2="75" stroke="#434968" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1543" x1="0" y1="100" x2="171" y2="100" stroke="#434968" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1538" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1545" x1="0" y1="100" x2="171" y2="100" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1544" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1513" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1514" class="apexcharts-series" seriesName="LastxMonth" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1517" d="M 0 75C 5.985 75 11.115000000000002 87.5 17.1 87.5C 23.085 87.5 28.215000000000003 62.5 34.2 62.5C 40.185 62.5 45.315000000000005 80 51.300000000000004 80C 57.285000000000004 80 62.415000000000006 70 68.4 70C 74.385 70 79.515 93.75 85.5 93.75C 91.485 93.75 96.61500000000001 50 102.60000000000001 50C 108.58500000000001 50 113.715 71.25 119.7 71.25C 125.685 71.25 130.815 65 136.8 65C 142.785 65 147.91500000000002 93.75 153.9 93.75C 159.885 93.75 165.01500000000001 62.5 171 62.5" fill="none" fill-opacity="1" stroke="rgba(67,73,104,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="5" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskxxhnmhe)" pathTo="M 0 75C 5.985 75 11.115000000000002 87.5 17.1 87.5C 23.085 87.5 28.215000000000003 62.5 34.2 62.5C 40.185 62.5 45.315000000000005 80 51.300000000000004 80C 57.285000000000004 80 62.415000000000006 70 68.4 70C 74.385 70 79.515 93.75 85.5 93.75C 91.485 93.75 96.61500000000001 50 102.60000000000001 50C 108.58500000000001 50 113.715 71.25 119.7 71.25C 125.685 71.25 130.815 65 136.8 65C 142.785 65 147.91500000000002 93.75 153.9 93.75C 159.885 93.75 165.01500000000001 62.5 171 62.5" pathFrom="M -1 100L -1 100L 17.1 100L 34.2 100L 51.300000000000004 100L 68.4 100L 85.5 100L 102.60000000000001 100L 119.7 100L 136.8 100L 153.9 100L 171 100"></path><g id="SvgjsG1515" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1518" class="apexcharts-series" seriesName="ThisxMonth" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1521" d="M 0 37.5C 5.985 37.5 11.115000000000002 50 17.1 50C 23.085 50 28.215000000000003 25 34.2 25C 40.185 25 45.315000000000005 42.5 51.300000000000004 42.5C 57.285000000000004 42.5 62.415000000000006 32.5 68.4 32.5C 74.385 32.5 79.515 56.25 85.5 56.25C 91.485 56.25 96.61500000000001 12.5 102.60000000000001 12.5C 108.58500000000001 12.5 113.715 33.75 119.7 33.75C 125.685 33.75 130.815 27.5 136.8 27.5C 142.785 27.5 147.91500000000002 56.25 153.9 56.25C 159.885 56.25 165.01500000000001 25 171 25" fill="none" fill-opacity="1" stroke="rgba(115,103,240,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="1" clip-path="url(#gridRectMaskxxhnmhe)" pathTo="M 0 37.5C 5.985 37.5 11.115000000000002 50 17.1 50C 23.085 50 28.215000000000003 25 34.2 25C 40.185 25 45.315000000000005 42.5 51.300000000000004 42.5C 57.285000000000004 42.5 62.415000000000006 32.5 68.4 32.5C 74.385 32.5 79.515 56.25 85.5 56.25C 91.485 56.25 96.61500000000001 12.5 102.60000000000001 12.5C 108.58500000000001 12.5 113.715 33.75 119.7 33.75C 125.685 33.75 130.815 27.5 136.8 27.5C 142.785 27.5 147.91500000000002 56.25 153.9 56.25C 159.885 56.25 165.01500000000001 25 171 25" pathFrom="M -1 100L -1 100L 17.1 100L 34.2 100L 51.300000000000004 100L 68.4 100L 85.5 100L 102.60000000000001 100L 119.7 100L 136.8 100L 153.9 100L 171 100"></path><g id="SvgjsG1519" class="apexcharts-series-markers-wrap" data:realIndex="1"></g></g><g id="SvgjsG1516" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1520" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1546" x1="0" y1="0" x2="171" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1547" x1="0" y1="0" x2="171" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1548" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1549" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1550" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1509" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1535" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1507" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 50px;"></div></div></div>
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 239px; height: 116px;"></div></div><div class="contract-trigger"></div></div></div>
              <div class="text-center mt-4">
                <button type="button" class="btn btn-primary waves-effect waves-light">Increase Button</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
