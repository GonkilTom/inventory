<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Services\DbService;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    private $db;

    public function __construct(DbService $db)
    {
        $this->db = $db;
    }

    public function index()
    {
        return view('users.index');
    }

    public function store(UserRequest $request)
    {
        $this->db->create_user($request->all()); //saves user
        return redirect('/userslayout')->with('success' , 'User Created');
     }

     public function create()
     {
          return view('users.create_user');
     }

     public function show($id)
     {
       //
     }

     public function edit($id)
     {
        // return view::make('users.edit_user')
          // ->with('');
     }
     public function update(Request $request, $username)
     {
        $this->validate($request,[
          'first_name' => 'required',
          'last_name' => 'required',
          'username' => 'required',
          'phone_number' => 'required',
          'home_address' => 'required',
          'email' => 'required'
        ]);
        $user = User::find($username);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->username = $request->input('username');
        $user->phone_number = $request->input('phone_number');
        $user->home_address = $request->input('home_address');
        $user->email = $request->input('email');
        $user->save();

        return redirect('/display')->with('success' , 'User Updated!');
     }

     public function destroy($id)
     {
        //
     }

    //  public function users_layout()
    //  {
    //       return view('users.index');
    // }

     public function display_users()
     {
       // $users = User::where('admin',1)->get();//returns a view conaining all users that are admin in the dashboardfolder.
       // $users = User::all();
       // dd($users);
       $users = User::paginate(7);
       return view('users.list_users', compact('users'));
     }

     public function edit_users($username)
     {
       //dd($username); to kill operation like the die().
       $user = $this->db->get_user($username);
       //if the array is empty, display page not found.
       if (empty($user))
       {
           abort(404);
       }

       // dd($username);
       return view('users.edit_user', compact('user'));
     }
}
