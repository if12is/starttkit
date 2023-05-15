<?php

namespace App\Services;

use App\Models\Series;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class SeriesService
{
      public function getSeries()
      {
          return Series::all();
      }

      public function getSeriesById($id)
      {
          return Series::where('id' , $id)->firstOrFail();
      }

      public function datatable(){
          $data = Series::all();
          return DataTables::of($data)
          ->addIndexColumn()
//            add column action view
          ->addColumn('action', function($row){
              return ' <a href="' . route('series.show', $row->id) . '" class="btn btn-sm btn-primary">
                <i class="fas fa-eye"></i>
                </a>
                ';
          })
            ->addColumn('photo', function($row){
              return  '<img src="'.asset($row->photo).'" width="30px" alt="'.$row->name.'" > ';
            })
          ->addColumn('storyline', function($row){
              return Str::limit($row->storyline, 50);
          })
          ->rawColumns(['action', 'photo', 'storyline'])
          ->make(true);
      }
     public function getTopSeries(){
          return Series::orderBy('rating', 'desc')->take(5)->get();
     }
}
