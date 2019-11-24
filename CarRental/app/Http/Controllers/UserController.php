<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\Category;
use App\Models\Checkout;
use App\Models\Favorite;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getLogin() {
        $categories = Category::where('id_parent', 0)->get();

        return view('user.register', ['categories' =>$categories]);
    }

    public function postLogin(LoginUserRequest $request) {
        $login = [
            'email' => $request->emailLogin,
            'password' => $request->passwordLogin,
        ];
        if (Auth::attempt($login)) {

            return redirect()->route('index');
        } else {

            return redirect()->back()->with('status', 'Login fail!');
        }
    }

    public function postLoginModal(LoginUserRequest $request) {
        $login = [
            'email' => $request->emailLogin,
            'password' => $request->passwordLogin,
        ];
        if (Auth::attempt($login)) {

            return redirect()->back();
        } else {

            return redirect()->back()->with('status', 'Login fail!');
        }
    }

    public function postRegister(RegisterUserRequest $request) {
        $avatar = 'noiavatar.png';
        $filenameWithExt = $avatar->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $avatar->getClientOriginalExtension();
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;

        $user = User::create([
            'user_name' => $request->userName,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'avatar' => $fileNameToStore,
            'phone' => '',
            'is_admin'=> 0,
            'status' => 1
        ]);
        $avatar->storeAs('public/uploads/profile', $fileNameToStore);
        Auth::login($user);

        return redirect()->route('index');
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('index');
    }

    public function indexMyFavoriteCar() {
        $favorites = Favorite::where('user_id', \auth()->id())->get();
        $categories = Category::where('id_parent', 0)->get();

        return view('user.favorite', [
                                            'favorites' => $favorites,
                                            'categories' =>$categories
            ]);
    }

    public function myFavoriteCar($id) {
        $favorite = Favorite::where([
            'user_id' => \auth()->id(),
            'car_id' => $id
        ]);

        if ($favorite->exists()) {
            $favorite->delete();
            return response()->json([
                'message' => 'Đã hủy yêu thích',
                'status' => '0',
            ]);
        }
        $favorite = Favorite::create([
            'user_id' => \auth()->id(),
            'car_id' => $id
        ]);

        return response()->json([
            'message' => 'Đã yêu thích xe',
            'status' => '1',
        ]);
    }

    public function removeFavoriteCar($id) {
        $favorite = Favorite::where([
            'user_id' => \auth()->id(),
            'car_id' => $id
        ]);
        $favorite->delete();

        return response()->json([
            'status' => '0',
        ]);
    }

    public function profileIndex() {
        $user = User::where('id', \auth()->id())->first();
        $cars = $user->cars;
        $categories = Category::where('id_parent', 0)->get();

        return view('user.profile', ['user' => $user,
                                           'cars' => $cars,
                                           'categories' =>$categories
            ]);
    }

    public function changePassword(Request $request) {
        $user = User::where('id', \auth()->id())->first();
        $user->password = bcrypt($request->password_new);
        $user->save();

        return redirect()->route('myProflie');
    }

    public function changeAvatar(Request $request) {
        $user = User::where('id', \auth()->id())->first();
        $avatar = $request->avatar;

        $filenameWithExt = $avatar->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $avatar->getClientOriginalExtension();
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        $avatar->storeAs('public/uploads/profile', $fileNameToStore);

        $user->avatar = $fileNameToStore;
        $user->save();

        return redirect()->route('myProflie');
    }

    public function editProfile(Request $request) {

        $user = User::where('id', \auth()->id())->update([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect()->route('myProflie');
    }

    public function myWalletIndex(Request $request) {
//        if($request->month == '') {
//            $month = Carbon::now()->format('M-Y');
//        } else {
//            $month = $request->month;
//        }
        $user = new User();
        $trip = new Checkout();
        $trips = Checkout::where(
            'user_id_1', \auth()->id()

        )->get();
        $countTripSuccess= Checkout::where([
                                            'user_id_1'=>auth()->id(),
                                            'status_ck' => '4'
                                            ]

        )->count();
        $ratingUser = $user->rating(\auth()->id());
        $categories = Category::where('id_parent', 0)->get();

        return view('user.mywallet', [
                                            'categories' =>$categories,
                                            'trips' =>$trips,
                                            'totalPrice' => $trip->totalPrice($trips),
                                            'countTripSuccess' => $countTripSuccess,
                                            'ratingUser' => $ratingUser
                                        ]);
    }
}
