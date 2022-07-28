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
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'adress' => ['required', 'string', 'max:1000'],
            'postal' => ['required', 'string', 'max:10'],
            'cui' => ['required', 'string', 'max:20'],
            'caen' => ['required', 'string', 'max:300'],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'adress' => $input['adress'],
            'postal' => $input['postal'],
            'cui' => $input['cui'],
            'caen' => $input['caen'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
