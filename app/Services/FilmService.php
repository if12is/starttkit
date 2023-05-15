<?php

namespace App\Services;

use App\Models\Film;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class FilmService
{
   function getFilms(): \Illuminate\Database\Eloquent\Collection
   {
    return Film::all();
   }

  public function getFilmById($id)
  {
    return Film::where('id', $id)->firstOrFail();
  }

  function datatable(): \Illuminate\Http\JsonResponse
  {
    $data = Film::all();
    return DataTables::of($data)

    ->addIndexColumn()
    ->addColumn('action', function($row){
      return ' <a href="' . route('films.show', $row->id) . '" class="btn btn-sm btn-primary">
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
  function getTopFilms(): \Illuminate\Database\Eloquent\Collection
  {
    return Film::orderBy('rating', 'desc')->take(5)->get();
  }
}
