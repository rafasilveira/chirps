<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ChirpController extends Controller
{
  //
  /**
   * Display a listing of the response
   */
  public function index(): View
  {
    return view('chirps', [

    ]);
  }
}
