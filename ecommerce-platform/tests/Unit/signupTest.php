<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use DatabaseTransactions;
    use WithoutMiddleware;

    public function testSignupRequest() //Creates fake data array
    {
        $userData = [
            'username' => 'johnDoe',
            'firstname' => 'John',
            'lastname' => 'Doe',
            'age' => 22,
            'address' => 'Birmingham Road',
            'telephone' => '07567434213',
            'password' => 'password',
        ];

        $response = $this->postSignupRequest($userData);

        $response->assertRedirect('/');

        $this->assertUserInDatabase($userData);

        $this->assertUserHasRole($userData, 0);

        $this->assertUserPasswordIsHashed($userData['password']);
    }

    private function postSignupRequest(array $userData) //post sign up request with data given from $userData
    {
        return $this->post(route('signupRequest'), $userData);
    }

    private function assertUserInDatabase(array $userData) //Check if the user exist in database from $userData
    {
        $this->assertDatabaseHas('users', [
            'username' => $userData['username'],
            'firstname' => $userData['firstname'],
            'lastname' => $userData['lastname'],
            'age' => $userData['age'],
            'address' => $userData['address'],
            'telephone' => $userData['telephone'],
            'role' => $userData['role'] ?? 0,
        ]);
    }

    private function assertUserHasRole(array $userData, int $role) //Checks if the signed up user has the expected role
    {
        $user = Auth::user();
        $this->assertEquals($role, $user->role);
    }

    private function assertUserPasswordIsHashed(string $password) //checks if the signed up user's password is hashed
    {
        $user = Auth::user();
        $this->assertTrue(Hash::check($password, $user->password));
    }
}


