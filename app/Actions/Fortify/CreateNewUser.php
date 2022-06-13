<?php

namespace App\Actions\Fortify;

use App\Mail\Welcome;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Mail;

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $role_id = (User::all()->count() == 0) ? '3' : '2';

        $User = User::create([

            'name' => $input['name'],
            'email' => $input['email'],
            'role_id'=> $role_id,
            'password' => Hash::make($input['password']),
        ]);
        ##Mail::to($User)->send(new Welcome($User));
        return $User;
    }
}