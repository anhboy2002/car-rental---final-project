<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Feedback;

class CarRentalController extends Controller
{
    public function index() {
        $feedbacks = Feedback::where('rate', 5)->get();
        $categories = Category::where('id_parent', 0)->get();

        return view('user.index', ['feedbacks' => $feedbacks,
                                         'categories' =>$categories
                                        ]);
    }
}
