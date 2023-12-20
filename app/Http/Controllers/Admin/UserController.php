<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|min:8',
            'confirmPassword' => 'required|same:password',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $user = new User;
        $user->username = $validatedData['username'];
        $user->password = Hash::make($validatedData['password']);

        if ($request->hasFile('picture')) {
            $filename = time() . '.' . $request->picture->extension();
            $request->picture->move(public_path('images'), $filename);
            $user->picture = $filename;
        } else {
            $user->picture = 'default.png'; // Set the default image
        }

        $user->save();

        // Flash a success message to the session
        session()->flash('success', 'User registered successfully');

        // Redirect to the login page
        return redirect('/sign-up');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user-edit', compact('user'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin-home')->with('success', 'User deleted successfully');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required',
        ]);

        $user = User::where('username', $validatedData['username'])->first();

        if (!$user) {
            Log::info('User not found: ' . $validatedData['username']);
            return back()->withErrors(['username' => 'Invalid username or password']);
        }

        if ($user->is_admin) {
            // Log the user out.
            Auth::logout();

            // Return an error message.
            return back()->withErrors(['username' => 'You are an admin. Please use the admin login page.']);
        }

        if (Hash::check($validatedData['password'], $user->password)) {
            Auth::login($user);

            return redirect('/home-page');
        }

        Log::info('Invalid password for user: ' . $validatedData['username']);

        return back()->withErrors(['username' => 'Invalid username or password']);
    }

    public function adminLogin(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required',
        ]);

        $user = User::where('username', $validatedData['username'])->first();

        if (!$user || !Hash::check($validatedData['password'], $user->password)) {
            Log::info('Invalid credentials: ' . $validatedData['username']);
            return back()->withErrors(['username' => 'Invalid username or password']);
        }

        if (!$user->is_admin) {
            Log::info('Regular user tried to log in as admin: ' . $validatedData['username']);
            return back()->withErrors(['username' => 'You are not an admin. Please use the regular login page.']);
        }

        Auth::login($user);
        return redirect('/admin-home');
    }
}
