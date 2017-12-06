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
        //   ->with('');
     }
     public function update(Request $request, $id)
     {
        //
     }

     public function destroy($id)
     {
        //
     }

     public function users_layout()
     {
          return view('users.users_layout');
    }

     public function display_users()
     {
       // $users = User::where('admin',1)->get();//returns a view conaining all users that are admin in the dashboardfolder.
       $users = User::all();
       return view('users.users_list', compact('users'));
     }

     public function edit_users($username)
     {
       //dd($username); to kill operation like the die().
       $user = $this->db->get_user($username);
       //if the array is empty, displa page not found.
       if (empty($user))
       {
           abort(404);
       }

       // dd($username);

     }
}
