<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        $usersCount = User::all()->count();
        $parcelsCount = Parcel::all()->count();
        return view('admin.dashboard',compact('usersCount',
        'parcelsCount'));
    }


}
