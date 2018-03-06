<?php

// namespace App\Http\Services;
//
// use App\User;
//
// class DbService
// {
//
//     public function __construct()
//     {
//
//     }
//
//     public function create_user($data = [])
//     {
//         User::create([
//             // 'admin' => $data['admin'],
//             'email' => $data['email'],
//             'username' => $data['username'],
//             'last_name' => $data['last_name'],
//             'first_name' => $data['first_name'],
//             'password' => bcrypt($data['password']),
//             'home_address' => $data['home_address'],
//             'phone_number' => $data['phone_number']
//         ]);
//     }
//
//     public function get_user($username)
//     {
//         $user = User::where('username', $username)
//                 // ->first(0)
//                 ->get()
//                 ->toArray(); // for security pupose, checkmating unathourised entry of usernames.
//
//         return $user;
//       }
// }
?>
