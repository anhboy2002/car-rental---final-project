<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\Photo;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CarController extends Controller
{
    public function createCar(Request $request) {
        $carName = $this->getCarName($request->selectCarCategoryChildren, $request->selectCarYear);
        $json_featured= json_encode($request->featured,JSON_FORCE_OBJECT);
        $car = Car::create([
            'user_id' => auth()->user()->id,
            'car_category_id' => $request->selectCarCategoryChildren,
            'year' => $request->selectCarYear,
            'description' => $request->selectCarYear,
            'num_seat' => $request->numSeat,
            'rate' => 0,
            'status' => 0,
            'total_trip' => 0,
            'price' => $request->priceCar,
            'fuel_type' => '',
            'movement' => $request->moveCar,
            'plate_number' => $request->plateNumber,
            'lat' => $request->lat,
            'long' => $request->lng,
            'location_name' => $request->carLocation,
            'date_available_begin' => Carbon::now(),
            'featured' => $json_featured,
            'name' => $carName,
        ]);
        $user = auth()->user();

        $user->phone = $request->phone;
        $avatar =  $request->profilePhoto;

        $filenameWithExt = $avatar->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $avatar->getClientOriginalExtension();
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        $avatar->storeAs('public/uploads/profile', $fileNameToStore);

        $user->avatar = $fileNameToStore;
        $user->save();

        $this->storePhotosCar($request, $car, true);
        return redirect()->route('myCar');
    }

    public function getCarName($selectCarCategoryChildren, $selectCarYear) {
        $brandCarName = Category::where('id', $selectCarCategoryChildren)->first();
        $name = $brandCarName->parent->name . ' ' . $brandCarName->name . ' ' . $selectCarYear;
        return $name;
    }

    public function storePhotosCar($request, $car, $check)
    {

        if ($request->has('photoCar')) {
            if (!$check){
                $photos_old = $car->photos;
                foreach ($photos_old as $photo_old) {
                    $file = 'app/public/uploads/car_photos/' . $photo_old->url;
                    if (file_exists(storage_path($file))) {
                        unlink(storage_path($file));
                    }
                }
                Image::where('car_id', $car->id)->delete();
            }
            foreach ($request->file('photoCar') as $image) {
                $filenameWithExt = $image->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $image->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $image->storeAs('public/uploads/car_photos', $fileNameToStore);

                $image = new Photo([
                    'car_id' => $car->id,
                    'feature' => $fileNameToStore,
                ]);
                $image->save();
            }
        }
        elseif ($check){
            $fileNameToStore = 'noimage.png';
            $image = new Photo([
                'car_id' => $car->id,
                'feature' => $fileNameToStore,
            ]);
            $image->save();
        }

        return true;
    }

    public function getCreateCar() {
        $categories = Category::all();

        return view('user.list-your-car', compact('categories'));
    }

    public function getCategoryChildren($id) {
        try {
            $category = Category::where('id_parent', $id);
            dd($category);
        } catch (ModelNotFoundException $e) {
            echo $e->getMessage();
        }

        response()->json([
            'category' => $category,
        ]);
    }

    public function getMyCar() {
        $user_id = auth()->id();
        $cars = Car::where('user_id', $user_id)->get();
        return view('user.list--car', ['cars' => $cars]);
    }

    public function carSingle($id) {
        $car = Car::where('id', $id)->first();
        $count = count($car->feedbacks);
        $feedbacks = $car->feedbacks ;
        return view('user.car-listing-details', [
                        'car' => $car,
                        'countReview' => $count,
                        'feedbacks' => $feedbacks,
                        ]);
    }

    public function feedback($id , $rating, Request $request)
    {
        $content = $request->input('content');
        $feedback = new Feedback([
            'car_id' => $id,
            'user_id' => auth()->id(),
            'comment' => $content,
            'rate' => $rating,
        ]);
        $feedback->save();

        return response()->json([
            'user_name' => auth()->user()->user_name,
            'avatar' => auth()->user()->avatar,
            'feedback' => $feedback,
        ]);
    }
}
