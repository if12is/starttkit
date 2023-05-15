<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Services\FilmService;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
      public FilmService $FilmService;
      public function __construct(FilmService $FilmService)
      {
          $this->FilmService = $FilmService;
      }
      public function index()
      {
          $topMoves = $this->FilmService->getTopFilms();
          $films = $this->FilmService->getFilms();
          return view('content.pages.pages-page2', compact('films','topMoves'));
      }


      public function show(string $id)
      {
          $film = $this->FilmService->getFilmById($id);
        return view('content.pages.pages-page2-show', compact('film'));
      }

      public function FilmDatatable()
      {
        return $this->FilmService->datatable();
      }

}
