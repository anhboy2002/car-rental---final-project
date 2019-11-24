<?php

namespace App\Http\Controllers;

use App\Models\Car;
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

    public function getCategoryIndex($id) {
        $categoriesHearder = Category::where('id_parent', 0)->get();
        $cars = Car::where('car_category_id', $id)->get();
        return view('user/category',[
                                            'categories' => $categoriesHearder,
                                            'cars' => $cars,
                                            ]);
    }
}
