<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req)
    {
       //  return $req->all();

       $user= User::where(['email'=> $req->email])
       ->where(['password'=> $req->password])->first();

       //return 'User:' . $user;
       
       if(!$user)
       {
           return redirect('/login')->with('notmatch','Username or password is not matched');

       }
       else
       {
           $req->session()->put('user',$user);
           return redirect('/?success=true');
       }
    }

    function register(Request $req)
    {
        // return $req->input();
        // try {
            DB::insert('INSERT INTO users
            (name, email, password, created_at) VALUES (?,?,?,?)',
            [$req->fullname,$req->email,$req->password, now()]);
            
        /*}
        catch (\Exception) {
            return "Failed to register";
        }
        */
        return redirect('/')->with('success','Succcessfully Register');
    }

    function getuser(Request $req)
    {
        $data= DB::table('users')
        //->join('table2','table2.id','=','users.id')
        ->where('id',$req->rid)
        ->first();

        return view('edituser',['user'=>$data]);
    }

    function edituser(Request $req)
    {
        //try{
            DB::table('users')->where('id', $req->rid)
            ->update(array(
            'name' => $req->fullname,
            'password' => $req->password,
            'email' => $req->email,
            //'updated_at' => now()
            'updated_at' => DB::raw('now()')
            ));

        /*}
        catch(\Exception) {
            return redirect('editmyuser?rid='. $req->rid.'&success=2');
        }
        */
        
        return redirect('editmyuser?rid='.$req->rid.'&success=1');
    }

    function listuser()
    {
        return view('listuser',['listofuser' => DB::table('users')->paginate(5)]);
    }

    function search(Request $req)
    {
        return view('listuser',['listofuser' => DB::table('users')
                ->select(DB::raw('id, name, email, password, created_at, updated_at'))
                ->where('email', 'like', '%' . $req->search . '%')
                ->orwhere('name', 'like', '%' . $req->search . '%')->paginate(5)]
         );
    }

    function deleteuser(Request $req)
    {
        //return $req->input();
        DB::table('users')->where('id', $req->rid)->delete();
        return redirect('/')->with('delete','Successfully Deleted');
    }

}


