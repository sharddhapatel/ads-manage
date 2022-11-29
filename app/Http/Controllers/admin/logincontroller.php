<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\login;

use Illuminate\Support\Facades\Notification;
use App\Models\User;
use App\Notifications\Resetpassword;
use App\Notifications\NewUserPasswordCreate;
use Illuminate\Support\Facades\Hash;

class logincontroller extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function adminlogin(Request $request)
    {
        // if ($request->isMethod('get')) {
        //     return view('admin.login');
        // } else {
        //     $data = $request->all();

        //     $ans = DB::table('login')->insert(["email"=>$data['email'],"password"=>$data['password']]);

        //     return redirect()->back()->with("message", "Insert Sucessfully...");
        // }

        $data = $request->all();
        $email = $request->Input('email');
        $password = $request->Input('password');
        $same = DB::table('login')->where(['email' => $email, 'password' => $password])->count();
        $a = DB::table('login')->where('email', $email)->first();


        if (($email != " ") && ($password != " ")) {
            if ($same > 0) {
                Session::put('login_id', $a->id);
                Session::put('login_email', $a->email);

                return redirect('index')->with(['a' => $a]);
            } else {
                return redirect('login')->with('error', 'Email and Password has been wrong....');
            }
        } else {
            return redirect('login')->with('error', 'Email and Password Empty...');
        }
    }
    public function logout()
    {
        Session()->forget('login_id');
        return redirect('login');
    }
    public function forget()
    {
        return view('admin.forget');
    }
    public function resetlink(Request $request)
    {
        $data = $request->all();
        $remember_token = rand(100000, 999999);
        $email = $request->input('email');
        $same = DB::table('login')->where(['email' => $email])->count();

        $time = date('y-m-d H:i:s', time());
        if ($same > 0) {
            $reset = DB::table('login')->where(['email' => $email])->update(['remember_token' => $remember_token, 'updated_at' => $time]);

            $list = DB::table('login')->where(['email' => $email])->first();
            $users = login::where("email", $data['email'])->first();

            Notification::send($users, new ResetPassword($remember_token));
            return redirect('forget')->with(["message" => "Link send successfully...", "list" => $list]);
        } else {
            return redirect('forget')->with('error', "Email must be Rejestered First");
        }
    }

    public function reset(Request $request, $token)
    {
        $email = $request->input('email');
        $time = date('Y-m-d H:i:s', time());
        $query = DB::table('login')->where('remember_token', $token)->get();
        if (count($query) > 0) {
            DB::table('login')->where('remember_token', $token)->whereRaw('ABS(TIMESTAMPDIFF(MINUTE, "' . $query[0]->updated_at . '", ?)) >=1', [$time])->update(array("remember_token" => $token, 'updated_at' => $time));
        }
        $list = DB::table('login')->where(['remember_token' => $token])->first();
        if ($list) {
            return view('admin.resend')->with(["list" => $list, 'token' => $token]);
        } else {
            return redirect('forget')->with('error', 'Link Expire plese Resend The Link');
        }
    }

    public function resendpassword(Request $request)
    {
        $data = $request->all();
        $npass = $request->input('npassword');
        $cpass = $request->input('cpassword');
        $id = $request->input('id');

        $time = date('Y-m-d H:i:s', time());
        $list = DB::table('login')->where('id', $data['id'])->first();

        if ($npass != '' && $cpass != '') {
            if ($npass == $cpass) {
                $b = DB::table('login')->where('id', $id)->update(["password" => $npass, 'updated_at' => $time]);
                return redirect('login')->with(['data' => $data, 'id' => $id]);
            } else {
                return redirect()->back()->with("error", "New Password and Confirm Password not same");
            }
        } else {
            return redirect()->back()->with("error", "Plese Fill all Fields");
        }
    }
}
