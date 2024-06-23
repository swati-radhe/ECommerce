<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
public function getRegister(){
    return view('register');
}
public function postRegister(Request $request){
    $input=$request->all();
    // dd($input);

    try{
        $rules = [
            'fname' => 'required|alpha|max:30',
            'lname' => 'required|alpha|max:20',
            // 'phone' => 'required|numeric|digits:10',
            'mobile_phone' => [
                'required',
                'regex:/^[9876](?!.*(.)\1{4})[0-9]{9}$/',
            ],
            'email' => 'required|email|unique:users|max:50',
            'type' => 'required|alpha|max:20',
            'password' => 'required|min:8',
            'c_password' => 'required|same:password',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            dd($validator);

            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->input());
        } else {
            $user = new User;
            $user->fname = $input['fname'];
            $user->lname = $input['lname'];
            $user->mobile_phone = $input['mobile_phone'];
            $user->email = $input['email'];
            $user->status = 'active';
            $user->type = $input['type'];
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect('/Login');
        }
    }catch(Exception $e){
        return response()->json([
            'status' => 400,
            'code' => 'failed'
        ], 400);
    }
}

}
