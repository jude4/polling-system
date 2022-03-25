<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class VoteCastingController extends Controller
{
    public function index()
    {
        return Inertia::render('VoteCasting/Index', [
            'candidates' => User::where('role_id', 1)->with('votes')->latest()->get(),

        ]);
    }

    public function show($id)
    {
        return Inertia::render('VoteCasting/Show', [
            'candidate' =>  User::with('votes')->findOrFail($id)
        ]);
    }
}