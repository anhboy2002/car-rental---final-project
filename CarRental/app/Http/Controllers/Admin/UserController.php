<?php

namespace App\Http\Controllers\Admin;

use App\Models\Checkout;
use App\Models\Reports;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getIndex() {
        $user = User::all();

        return view('admin.users.list', ['users' => $user]);
    }

    public function getReportIndex() {
        $reports = Reports::all();

        return view('admin.report', ['reports' => $reports]);
    }

    public function blockUser($id) {
        $user = User::where('id', $id)->first();
        $user->status = 0;
        $user->save();

        return redirect()->route('admin.user.index')->with('thongbao','Đã khóa thành công tài khoản');
    }

    public function acceptUser($id) {
        $user = User::where('id', $id)->first();
        $user->status = 1;
        $user->save();

        return redirect()->route('admin.user.index')->with('thongbao','Đã mở khóa thành công tài khoản');
    }

    public function rejectTrip($id) {
        $trip = Checkout::where('id', $id)->first();
        $trip->status_ck = 0;
        $trip->status_1 = 0;
        $trip->status_2 = 0;
        $trip->save();

        return redirect()->route('admin.index')->with('thongbao','Đã hủy chuyến');
    }

    public function deleteUser($id) {
        $user = User::where('id', $id)->first();
        foreach ($user->cars as $car) {
            $car->photos()->delete();
            $car->delete();
        }
        $user->trip()->delete();
        $user->delete();

        return redirect()->route('admin.user.index')->with('thongbao','Đã xóa thành công user');
    }
}
