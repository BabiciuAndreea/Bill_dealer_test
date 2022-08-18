<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'address' => ['required', 'string', 'max:1000'],
            'phone' => ['required', 'string', 'max:10'],
            'cnp' => ['required', 'string', 'max:13'],
            'password' => $this->passwordRules(),
        ])->validate();

        $user = User::create([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'address' => $input['address'],
            'phone' => $input['phone'],
            'cnp' => $input['cnp'],
            'password' => Hash::make($input['password']),
        ]);

        if(request()->hasFile('avatar')){
            $avatar = request()->file('avatar')->getClientOriginalName();
            request()->file('avatar')->storeAs($avatar, '');
            $user->update(['avatar' => $avatar]);
        }

        return $user;
    }
}
