<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcel;
use Illuminate\Support\Facades\Auth;

class ParcelController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $parcels = Parcel::where('sender', $user->id)
            ->orWhere('reciever', $user->id)
            ->get();

        return view('parcels.index', compact('parcels'));
    }
}
