<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
      return view('admin.profile.show');
    }

    public function update(Request $request): \Illuminate\Http\RedirectResponse
    {
      $user = auth()->user();
      $user->update($request->all());
      return back()->with('success', 'Profile updated successfully.');
    }
}
