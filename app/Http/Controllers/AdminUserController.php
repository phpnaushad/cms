<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = AdminUser::all();        
        return view('backend.admin.index', compact('users')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //return View::make('pages.add_user');
         return view('backend.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $request->validate([
            'txtUserName'=>'required',
            'txtEmail'=>'required',            
            'txtPassword' => 'required|min:4',
            'txtCnfrmPassword' => 'required|min:4'
        ]);

        $user = new AdminUser([
            'name' => $request->get('txtUserName'),
            'email' => $request->get('txtEmail'),
            'password' => $request->get('txtPassword'),
            'status' => '1'
        ]);
        $user->save();
         return redirect('admin')->with('success', 'admin user created successfully!');      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */                           
    public function show()
    {
        $users = AdminUser::all();
        return view('backend.admin.index', compact('users')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //echo "heloo edit fuction";
       $user = AdminUser::find($id);
       return view('backend.admin.edit', compact('user'));     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'txtUserName'=>'required',
            'txtEmail'=>'required',
            'txtPassword' => 'required|min:4',
            'txtCnfrmPassword' => 'required|min:4'
        ]);

        $user = AdminUser::find($id);
        $user->name =  $request->get('txtUserName');
        $user->email = $request->get('txtEmail');
        $user->password = $request->get('txtPassword');
        $user->status = '1';
        $user->save();
         return redirect('admin')->with('success', 'admin user updated successfully!');     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = AdminUser::find($id);
        $user->delete();
        return redirect('admin')->with('success', 'user deleted!');
    }
}
