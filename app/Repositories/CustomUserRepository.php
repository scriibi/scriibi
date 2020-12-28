<?php
// app/Repositories/CustomUserRepository.php

namespace App\Repositories;

use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Exception;

use Auth0\Login\Auth0User;
use Auth0\Login\Auth0JWTUser;
use Auth0\Login\Repository\Auth0UserRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class CustomUserRepository extends Auth0UserRepository
{

    /**
     * Get an existing user or create a new one
     *
     * @param array $profile - Auth0 profile
     *
     * @return teachers
     */
   protected function upsertUser( $profile ) {
        try{
            return User::where('email', '=', $profile['email'])->first();
        }
        catch(\Exception $e){
            if($e){
                return null;
            }
        }
    }

    /**
     * Authenticate a user with a decoded ID Token
     *
     * @param object $jwt
     *
     * @return Auth0JWTUser
     */
    public function getUserByDecodedJWT( $jwt ) {
        $user = $this->upsertUser( (array) $jwt );
        return new Auth0JWTUser( $user->getAttributes() );
    }

    /**
     * Get a User from the database using Auth0 profile information
     *
     * @param array $userinfo
     *
     * @return Auth0User
     */
    public function getUserByUserInfo( $userinfo ) {
        $user = $this->upsertUser( $userinfo['profile'] );

        if($user === null){
            //this to forget cookies "laravel_session"
            \Cookie::queue(
                \Cookie::forget('laravel_session')
            );

            \Cookie::queue(
                \Cookie::forget('XSRF-TOKEN')
            );
            abort('403', 'There\'s an issue with your credentials. Please contact info@scriibi.com');
        }
        return new Auth0User( $user->getAttributes(), $userinfo['accessToken'] );
    }
}


