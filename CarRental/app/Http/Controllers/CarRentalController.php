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

    public function markNotificationSingle($id) {
        try {
            $notification = auth()->user()->notifications()->findOrFail($id);
            $notification->markAsRead();
            return response()->json([
                'status' => 1,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 0,
            ]);
        }
    }

    public function markNotificationAll(){
        try {
            $notifications = auth()->user()->notifications()->get();
            foreach ($notifications as $notification){
                $notification->markAsRead();
            }
            return response()->json([
                'status' => 1,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 0,
            ]);
        }
    }
}
