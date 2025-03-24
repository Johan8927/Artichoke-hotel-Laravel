<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\landingPage\Controller;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;


/**
 * Description of UserController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class UserController extends Controller
{
       /**
     * Display a listing of User
     *
     * @return View|Factory
     */
    public function index(Request $request): Factory|View
    {
          $builder = User::query();
        return view('pages.users.index', [
		'users' => $builder->paginate(10),
]);
    }

   /**
     * Display the specified User.
     *
     * @return View|Factory
     */
    public function show(User $user)
    {

        return view('pages.users.show', [
		'user' => $user,
]);
    }

   /**
     * Show the form for creating a new User.
     *
     * @return View|Factory
     */
    public function create(): Factory|View
    {

        return view('pages.users.create', [
		'user' => new User,
]);
    }

    /**
     * Store a newly created User in storage.
     *
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
          $user = new User;
		$user->fill($request->all())->save();

         return redirect()->route('users.show',$user->id)->with('message','User successfully store');
    }

   /**
     * Show the form for editing the specified User.
     *
     * @return View|Factory
     */
    public function edit(User $user)
    {

        return view('pages.users.edit', [
		'user' => $user,
]);
    }

    /**
     * Update the specified User in storage.
     *
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        $this->authorize('update', $user);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return back()->with('status', 'profile-updated');
    }
    /**
     * Remove the specified User from storage.
     *
     * @return RedirectResponse
     */
    public function destroy(User $user): RedirectResponse
    {
          $user->delete();
         return redirect()->route('users.index',$user->id)->with('message','User successfully destroy');
    }

}
