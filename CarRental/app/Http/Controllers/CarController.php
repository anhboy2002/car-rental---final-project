<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Checkout;
use App\Models\Feedback;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CarController extends Controller
{
    public function createCar(Request $request) {
        $carName = $this->getCarName($request->selectCarCategoryChildren, $request->selectCarYear);
        $json_featured= json_encode($request->featured,JSON_FORCE_OBJECT);
        $car = Car::create([
            'user_id' => auth()->user()->id,
            'car_category_id' => $request->selectCarCategoryParent,
            'year' => $request->selectCarYear,
            'description' => $request->carDescription,
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
        if($avatar != null) {
            $filenameWithExt = $avatar->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $avatar->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $avatar->storeAs('public/uploads/profile', $fileNameToStore);

            $user->avatar = $fileNameToStore;
        }
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
                    $file = 'app/public/uploads/car_photos/' . $photo_old->feature;
                    if (file_exists(storage_path($file))) {
                        unlink(storage_path($file));
                    }
                }
                Photo::where('car_id', $car->id)->delete();
            }

            $photos = $request->file('photoCar');
            foreach ($photos as $image) {
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
        $user = User::where('id', auth()->id())->first();
        $categoriesHeader = Category::where('id_parent', 0)->get();

        return view('user.list-your-car', [
            'categoriesPage' => $categories,
            'user' => $user,
            'categories' =>$categoriesHeader
        ]);
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
        $categories = Category::where('id_parent', 0)->get();

        return view('user.list--car', [
                                            'cars' => $cars,
                                            'categories' =>$categories
                                            ]);
    }

    public function carSingle($id) {
        $car = Car::where('id', $id)->first();
        $count = count($car->feedbacks);
        $feedbacks = $car->feedbacks ;
        $categories = Category::where('id_parent', 0)->get();

        return view('user.car-listing-details', [
                        'car' => $car,
                        'countReview' => $count,
                        'feedbacks' => $feedbacks,
                        'categories' =>$categories
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
        $feedback->ratingCar($id);

        return response()->json([
            'user_name' => auth()->user()->user_name,
            'avatar' => auth()->user()->avatar,
            'feedback' => $feedback,
        ]);
    }

    public function feedbackEndTrip($id , $rating, Request $request)
    {
        $content = $request->input('content');
        $trip = Checkout::where('id', $id)->first();
        if($trip->status_ck == 4 ) {
            $feedback = new Feedback([
                'car_id' => $trip->car_id,
                'user_id' => $trip->user_id_2,
                'comment' => $content,
                'rate' => (double) $rating,
            ]);
            $feedback->save();
            $point = $feedback->ratingCar( $trip->car_id);

            return response()->json([
                'status' => "0" ]);
        }

        return response()->json([
            'status' => "1" ]);
    }

    public function carSettingIndex($id)
    {
        $car = Car::where('id', $id)->first();
        $trips = Checkout::where('car_id', $id)->get();
        $categories = Category::where('id_parent', 0)->get();

        return view('user.manage-car-detail', [
            'car' => $car,
            'trips' => $trips,
            'categories' =>$categories
        ]);
    }

    public function carSettingUpdate(Request $request, $id)
    {
        $json_featured= json_encode($request->featured,JSON_FORCE_OBJECT);
        $car = Car::where('id', $id)->update([
            'location_name' => $request->carLocation,
            'description' => $request->description,
            'featured' => $json_featured
        ]);

        return redirect()->route('carSetting', ['id'=> $id]);
    }
    public function changeStatusHideCar($id)
    {
        $car = Car::where('id', $id)->first();
        $statusOld = $car->status;
        if($car->status == 3) {
            $car->status = 1;
            $car->save();

            return response()->json([
                'status' => '0',
                'message' => 'Xe của bạn đang hoạt động',
            ]);
        }
        $car->status = 3;
        $car->save();

        return response()->json([
            'status' => '1',
            'message' => 'Xe của bạn đang bị tạm ngưng',
        ]);
    }

    public function updateImageCar(Request $request, $id)
    {
        $car = Car::where('id', $id)->first();
        $this->storePhotosCar($request, $car, false);

        return redirect()->route('carSetting', ['id'=> $id]);
    }


}
