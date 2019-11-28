<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Checkout;
use App\Models\Reports;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Charts\TripChart;

class AdminController extends Controller
{
    public function getLogin() {

        return view('admin.login');
    }

    public function postLogin(Request $request) {
        $login = [
            'email' => $request->emailLogin,
            'password' => $request->passwordLogin,
        ];
        if (Auth::attempt($login)) {

            return redirect()->route('admin.index');
        } else {

            return redirect()->back()->with('status', 'Login fail!');
        }
    }

    public function logout() {
        Auth::logout();

        return view('admin.login');
    }

    public function getIndex() {
        $totalUser = User::all()->count();
        $totalCar = Car::all()->count();
        $totalReport = Reports::all()->count();
        $totalReportActive = Reports::where('status', 1)->count();
        $totalCarActive = Car::where('status', 1)->count();
        $chart = new TripChart();

        $petCategories = DB::table('checkouts')
            ->select(DB::raw('count(id) as data'),DB::raw('DATE_FORMAT(created_at, \'%D\') as dates'))->where(DB::raw("(DATE_FORMAT(created_at, '%Y'))"), date('Y'))
            ->groupBy('dates')
            ->orderBy('dates','desc')
            ->get();

        $labels = $petCategories->pluck('dates');
        $values = $petCategories->pluck('data');

        $chart->labels($labels);
        $chart->dataset('Chuyến trong tháng ', 'bar', $values);

        return view('admin.index', [
            'totalUser' => $totalUser,
            'totalCar' => $totalCar,
            'totalCarActive' => $totalCarActive,
            'totalReport' => $totalReport,
            'chart' => $chart
        ]);
    }
}
