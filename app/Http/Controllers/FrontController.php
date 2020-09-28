<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class FrontController extends Controller
{
  /**
   * @return Application|Factory|View
   */
  public function index()
  {
    return view('welcome');
  }

  /**
   * @return RedirectResponse
   */
  public function setBackground()
  {
    $color = Session::get('gbColor');
    if ($color == 'dark') {
      Session::put('gbColor', 'light');
    } else {
      Session::put('gbColor', 'dark');
    }
    return redirect()->back();
  }
}
