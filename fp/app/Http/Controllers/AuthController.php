<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class AuthController extends Controller
{
  public function registerValidation(Request $request){
      $validation = Validator::make($request->all(), [
        'name' => 'required',
        'password'=> 'required'
        'email' => 'required|string|email|max:255|unique:users',

      ]);

      if ($validation->fails()) {
          return response()->json($validation->errors());
      }

      User::create([
          'name' => $request->input('name'),
          'password' => bcrypt($request->input('password'))
          'email' => $request->input('email'),

      ]);

      return response([
          'status' => 'success',
          'data' => User::first(),
      ], 200);
  }


  public function login(Request $request){
      $validation = Validator::make($request->all(), [
          'email' => 'required|string|email|max:255',
          'password'=> 'required'
      ]);
      if ($validation->fails()) {
          return response()->json($validation->errors());
      }
      $credentials = $request->only('email', 'password');
      try {
          if (! $token = JWTAuth::attempt($credentials)) {
              return response()->json(['error' => 'invalid_credentials'], 401);
          }
      } catch (JWTException $error) {
          return response()->json(['error' => 'could_not_create_token'], 500);
      }
      return response([
          'status' => 'success',
          'token' => $token,
      ]);
  }


  public function logout(){
      try {
          JWTAuth::invalidate();

          return response([
              'status' => 'success',
              'msg' => 'Logged out'
          ], 200);
      }catch (JWTException $e){

          return response([
              'status' => 'fail',
              'msg' => 'Failed to Log Out'
          ], 500);
      }
  }

}
