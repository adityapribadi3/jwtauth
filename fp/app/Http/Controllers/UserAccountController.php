<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserAccount;

class UserAccountController extends Controller
{
  public function getUserAccount(){
  return UserAccount::all();
}

public function insertUserAccount(Request $request){
  try{
  $data = new UserAccount();
  $data['username'] = $request->input('username');
  $data['password'] = $request->input('password');
  $data['email'] = $request->input('email');
  $data['name'] = $request->input('name');
  $data['gender'] = $request->input('gender');
  $data['country'] = $request->input('country');
  $data['province'] = $request->input('province');
  $data['town'] = $request->input('town');
  $data['phone'] = $request->input('phone');
  $data['position'] = $request->input('position');
  $data['success_trans'] = $request->input('success_trans');
  $data->save();

  if($task==0){
    return response([
      'msg'=>'fail'
    ],400);
  }else{
    return response([
      'msg'=>'success',

    ],200);
  }
}catch(Exception $error){
  return response([
    'msg'=>'fail'
  ],400);
}
}

public function deleteUserAccount(Request $request){
try{
  UserAccount::where('id','=',$request->input('id'))->delete();

  if($task==0){
    return response([
      'msg'=>'fail'
    ],400);
  }else{
    return response([
      'msg'=>'success'
    ],200);
  }
}catch(Exception $error){
  return response([
    'msg'=>'fail'
  ],400);
}
}

public function updateUserAccount(Request $request){
try{
  UserAccount::where('id','=',$request->input('id'))
          ->update([
          'username' => $request->input('username'),
          'password' => $request->input('password'),
          'email' => $request->input('email'),
          'name' => $request->input('name'),
          'gender' => $request->input('gender'),
          'country' => $request->input('country'),
          'province' => $request->input('province'),
          'town' => $request->input('town'),
          'phone' => $request->input('phone'),
          'position' => $request->input('position'),
          'success_trans' => $request->input('success_trans')
                    ]);

          if($task==0){
            return response([
              'msg'=>'fail'
            ],400);
          }else{
            return response([
              'msg'=>'success'
            ],200);
          }
        }catch(Exception $error){
          return response([
            'msg'=>'fail'
          ],400);
        }
}
}
