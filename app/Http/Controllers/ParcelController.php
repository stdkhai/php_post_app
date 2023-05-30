<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ParcelController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->role=="admin") {
            return redirect()->route('admin.dashboard');
        }
        $parcels = Parcel::where('sender', $user->id)
            ->orWhere('reciever', $user->id)
            ->get();

        return view('parcels.index', compact('parcels'));
    }
}
