<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class VoteCastingController extends Controller
{
    public function index()
    {
        return Inertia::render('VoteCasting/Index');
    }

    public function show()
    {
        return Inertia::render('VoteCasting/Show');
    }
}