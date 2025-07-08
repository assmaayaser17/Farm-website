<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\PasswordOtp;
use Illuminate\Support\Carbon;

class ForgotPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    // عرض الفورم
    public function showLinkRequestForm()
    {
        return view('auth.passwords.forgotpassword');
    }

    // إرسال OTP للإيميل
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);

        $otp = rand(100000, 999999);

        // احذف الأكواد القديمة لهذا الإيميل
        PasswordOtp::where('email', $request->email)->delete();

        // خزّن الـ OTP في قاعدة البيانات
        PasswordOtp::create([
            'email' => $request->email,
            'otp' => $otp,
            'expires_at' => Carbon::now()->addMinutes(10),
        ]);

        // ابعت OTP في إيميل بسيط
        Mail::raw("رمز التحقق الخاص بك هو: $otp", function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('رمز إعادة تعيين كلمة المرور');
        });

        return redirect()->route('auth.password.forgotpassword')->with('email', $request->email);
    }
}



// namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

// class ForgotPasswordController extends Controller
// {
//     /*
//     |--------------------------------------------------------------------------
//     | Password Reset Controller
//     |--------------------------------------------------------------------------
//     |
//     | This controller is responsible for handling password reset emails and
//     | includes a trait which assists in sending these notifications from
//     | your application to your users. Feel free to explore this trait.
//     |
//     */

//     use SendsPasswordResetEmails;
// }
