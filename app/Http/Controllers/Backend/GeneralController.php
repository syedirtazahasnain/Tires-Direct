<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        switch (auth()->user()->role) {
            case 'customer':
                // return redirect()->route('dashboard');
                return view('dashboard');
                break;

            case 'admin':
                // return redirect()->route('admin.dashboard');
//                return view('admin-dashboard');
                return view('dashboard.admin.dashboard');
                break;

            default:
            return redirect()->route('login');
                break;
        }

    }
}
