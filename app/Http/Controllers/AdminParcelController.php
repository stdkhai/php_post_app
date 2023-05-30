<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcel;
use Illuminate\Foundation\Auth\User;

class AdminParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parcels = Parcel::all();
        $senders = [];
        $recievers = [];

        foreach ($parcels as $parcel) {
            $sender = User::findOrFail($parcel->sender);
            $reciever = User::findOrFail($parcel->reciever);
            $senders[$parcel->id] = $sender;
            $recievers[$parcel->id] = $reciever;
        }

        return view('admin.parcels.index', compact('parcels', 'senders', 'recievers'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('admin.parcels.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'sender' => 'required',
            'reciever' => 'required',
            'description' => 'required',
            'from_address' => 'required',
            'to_address' => 'required',
        ]);
        $data['location'] = $data['from_address'];
        Parcel::create($data);

        return redirect()->route('admin.parcels.index')
            ->with('success', 'Посилка успішно створена.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $parcel = Parcel::findOrFail($id);
        $sender = User::findOrFail($parcel->sender);
        $reciever = User::findOrFail($parcel->reciever);

        return view('admin.parcels.show', compact('parcel','sender','reciever'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $parcel = Parcel::findOrFail($id);
        $users = User::all();
        return view('admin.parcels.edit', compact('parcel', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'sender' => 'required',
            'reciever' => 'required',
            'description' => 'required',
            'from_address' => 'required',
            'to_address' => 'required',
            'location' => 'required',
        ]);
        $parcel = Parcel::findOrFail($id);
        $parcel->update($request->all());
        $parcel->save();

        return redirect()->route('admin.parcels.index')
            ->with('success', 'Посилка успішно оновлена.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $parcel = Parcel::findOrFail($id);

        $parcel->delete();

        return redirect()->route('admin.parcels.index')
            ->with('success', 'Посилка успішно видалена.');
    }
}
