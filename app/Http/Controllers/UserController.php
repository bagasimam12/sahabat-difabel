<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user-management', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (is_null($request->password)) {
            User::updateOrCreate(
                [
                    'id' => $request->id
                ],
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'role' => $request->role,
                ]
            );
        } else {
            User::updateOrCreate(
                [
                    'id' => $request->id
                ],
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'role' => $request->role,
                    'password' => $request->password,
                ]
            );
        }

        return redirect(route('manageuser.index'))->with('success', 'Berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect(route('manageuser.index'))->with('success', 'Berhasil Menghapus data');
    }
}
