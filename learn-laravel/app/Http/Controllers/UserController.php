<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\users;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use App\Rules\customName;
use App\Rules\customPassword;
use App\Rules\customPhone;
use App\Rules\customEmail;


class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            // -------- Validating user Registeration Form with custom validators -----
            'name' => ['required', new customName],
            'email' => ['required', new customEmail],
            'phone' => ['required', new customPhone],
            'pass' => ['required', new customPassword],
            'password_confirmation' => 'required|same:pass'
        ]);
        if (users::where('email', '=', $request['email'])->exists()) {
            Session::flash('message', 'A user already exists with this email.');
            return redirect()->back();
        } else {
            $users = new users;
            $users->name = $request['name'];
            $users->email = $request['email'];
            // $users->password = $request['pass'];
            $users->password = bcrypt($request['pass']);
            $users->name = $request['name'];
            $users->phone_no = $request['phone'];
            $users->save();
            return redirect('login')->withSuccess('Registration successfull! Login please.');
        }
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) { // auto checking the user with these credentials and also hashing the password first and then check it with the db's one
            $user = Auth::user();
            Session::put('id', $user->id);

            //--------- custom log for mantaining the user logged info--------
            // Log::channel('customlog')->info('This User logged in successfully with id:: ' . $user->id . ' -- with ip:: ' . $_SERVER['REMOTE_ADDR'] . '   --- At Time:: ' . Carbon::now());
            return redirect('index')->withSuccess('Signed in');
        }
        $user = Auth::user();
        return redirect("login")->withSuccess('Login details are not valid');
    }
    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        //----------- sending email with reset password link to reset password ------------------------
        Mail::send('email.forgetPassword', ['token' => $token], function ($message) use ($request) {
            // $message->from('john@johndoe.com', 'John Doe');
            // $message->sender('john@johndoe.com', 'John Doe');
            $message->to($request->email);
            // $message->cc('john@johndoe.com', 'John Doe');
            // $message->bcc('john@johndoe.com', 'John Doe');
            // $message->replyTo('john@johndoe.com', 'John Doe');
            $message->subject('Reset Password');
            $message->priority(3);
            $message->attach('pathToFile');
        });
        //----------------------- return user back to foorgot password page with message after sucessfull mail sent -------------------
        return redirect()->to(Route('forgetPassword'))->with('sucess', 'We have Send You An Email to Reset Your Password');
    }
}
