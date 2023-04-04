<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    //
    public function dashboard()
    {
        // switch (Auth::user()->is_admin) {
        //     case true:
        //         return redirect(route('admin.dashboard'));
        //         break;
            
        //     default:
        //         return redirect(route('user.dashboard'));
        //         break;
        // }
        $checkouts = Checkout::with('Camp')->whereUserId(Auth::id())->get();
        return view('user.dashboard',[
            'checkouts' => $checkouts
        ]);
    }
}
