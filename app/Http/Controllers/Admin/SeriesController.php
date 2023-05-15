<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SeriesService;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
       public SeriesService $seriesService;
      public function __construct(SeriesService $seriesService)
      {
          $this->seriesService = $seriesService;
      }
      public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
      {
          $topSeries = $this->seriesService->getTopSeries();
          $series = $this->seriesService->getSeries();
          return view('content.pages.pages-page3', compact('series','topSeries'));
      }

      public function show(string $id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
      {
          $series = $this->seriesService->getSeriesById($id);
        return view('content.pages.pages-page3-show', compact('series'));
      }

      public function SeriesDatatable()
      {
        return $this->seriesService->datatable();
      }


}
