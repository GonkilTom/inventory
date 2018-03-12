<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{


    public function index()
    {
        return view('users.index');
    }

    public function create()
    {
         return view('users.create_user');
    }

    public function store(UserRequest $request)
    {
        // $this->db->create_user($request->all()); //saves user

        //this validation has been done in the userRequest file

        // $this->validate($request,[
        //   'email' => 'required',
        //   'username' => 'required',
        //   'password' => 'required',
        //   'last_name' => 'required',
        //   'first_name' => 'required',
        //   'phone_number' => 'required'
        // ]);

          $user = new User;
          $user->email = $request->input('email');
          $user->username = $request->input('username');
          $user->password = bcrypt($request->input('password'));
          $user->last_name = $request->input('last_name');
          $user->first_name = $request->input('first_name');
          $user->phone_number = $request->input('phone_number');
          $user->home_address = $request->input('home_address');
          $user->save();

        return redirect('/display_users')->with('success' , 'User Created');
     }

     public function show($id)
     {
       //
     }

     public function edit($id)
     {
        $user = User::findOrFail($id);
        // return view::make('users.edit_user')->with('username', $id);
         return view('users.edit_user' , compact('user'));
     }
     public function update(Request $request, $id)
     {
        $this->validate($request, [
          'email' => 'required',
          'username' => 'required',
          'last_name' => 'required',
          'first_name' => 'required',
          'phone_number' => 'required'
        ]);

        $user = User::findOrFail($id);
        $user->email = $request->email;
        $user->username = $request->username;
        $user->last_name = $request->last_name;
        $user->first_name = $request->first_name;
        $user->home_address = $request->home_address;
        $user->phone_number = $request->phone_number;
        // $user->email = Request::input('email');
        $user->save();

        return redirect('/display_users')->with('success' , 'User Updated!');
     }

     public function destroy($id)
     {
        $user = User::findOrFail($id);
        $user->delete();

        return  redirect('/display_users')->with('success' , 'User Deleted');
     }



     public function display_users()
     {
       // $users = User::where('admin',1)->get();//returns a view conaining all users that are admin in the dashboardfolder.
       // $users = User::all();
       // dd($users);
       $users = User::paginate(10);
       return view('users.list_users', compact('users'));
     }


}





// namespace App\Http\Controllers;
// use App\User;
// use Illuminate\Http\Request;
// use App\Http\Services\DbService;
// use App\Http\Requests\UserRequest;
//
// class UsersController extends Controller
// {
//     private $db;
//
//     public function __construct(DbService $db)
//     {
//         $this->db = $db;
//     }
//
//     public function index()
//     {
//         return view('users.index');
//     }
//
//     public function store(UserRequest $request)
//     {
//         $this->db->create_user($request->all()); //saves user
//         return redirect('/display_users')->with('success' , 'User Created');
//      }
//
//      public function create()
//      {
//           return view('users.create_user');
//      }
//
//      public function show($id)
//      {
//        //
//      }
//
//      public function edit($username)
//      {
//         // $user = User::findOrFail($username);
//         // return view::make('users.edit_user')->with('username', $username);
//      }
//      public function update(Request $request, $username)
//      {
//         $this->validate($request,[
//           'first_name' => 'required',
//           'last_name' => 'required',
//           'username' => 'required',
//           'phone_number' => 'required',
//           'email' => 'required'
//         ]);
//
//         $user = $this->db->get_user($username);
//         $user->first_name = $request->first_name;
//         $user->last_name = $request->last_name;
//         $user->username = $request->username;
//         $user->phone_number = $request->phone_number;
//         $user->home_address = $request->home_address;
//         $user->email = $request->email;
//         // $user->email = Request::input('email');
//         $user->save();
//
//         return redirect('/display_users')->with('success' , 'User Updated!');
//      }
//
//      public function destroy($id)
//      {
//         //
//      }
//
//     //  public function users_layout()
//     //  {
//     //       return view('users.index');
//     // }
//
//      public function display_users()
//      {
//        // $users = User::where('admin',1)->get();//returns a view conaining all users that are admin in the dashboardfolder.
//        // $users = User::all();
//        // dd($users);
//        $users = User::paginate(7);
//        return view('users.list_users', compact('users'));
//      }
//
//      public function edit_users($username)
//      {
//        //dd($username); to kill operation like the die().
//        $user = $this->db->get_user($username);
//        //if the array is empty, display page not found.
//        if (empty($user))
//        {
//            abort(404);
//        }
//
//        // dd($username);
//        return view('users.edit_user', compact('user'));
//      }
// }
