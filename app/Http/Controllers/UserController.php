<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Sport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return redirect()->route('users.edit', Auth::user()->id);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $person = Person::where('user_id', $user->id)->first();
        $sports = Sport::get();

        return view('app.users.index', compact('user', 'person', 'sports'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $person = Person::where('user_id', $user->id)->first();

        $userRequest = $request->input('user');
        $user->update($userRequest);

        $personRequest = $request->input('person');
        $person->update($personRequest);

        $person->sports()->sync($request->input('personSports'));


        return redirect()->route('users.edit', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
