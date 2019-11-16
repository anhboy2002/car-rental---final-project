<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class CarRentalController extends Controller
{
    public function index() {
        $feedbacks = Feedback::where('rate', 5)->get();
        return view('user.index', ['feedbacks' => $feedbacks]);
    }
}
