<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return view('admin.clients', compact('clients'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image',
        ]);

        $client = Client::create($validatedData);

        if ($request->hasFile('photo')) {
            $client->photo = $request->file('photo')->store('clients', 'public');
            $client->save();
        }

        return redirect()->route('admin.clients')->with('success', 'Client created successfully.');
    }

    public function destroy($id)
    {
        $client=Client::find($id);
        $client->delete();

        return redirect()->route('admin.clients')->with('success', 'Client deleted successfully.');
    }
}