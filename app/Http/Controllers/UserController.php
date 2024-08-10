<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    public function editProfile($id)
    {
        $user = User::where('id', $id)->first();
        $person = Person::where('user_id', $user->id)->first();

        return view('app.users.index', compact('user', 'person'));
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $person = Person::where('user_id', $user->id)->first();

        $userRequest = $request->input('user');
        $user->update($userRequest);

        $personRequest = $request->input('person');
        $person->update($personRequest);

        return redirect()->route('users.edit-profile', $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
