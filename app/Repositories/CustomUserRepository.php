<?php
// app/Repositories/CustomUserRepository.php

namespace App\Repositories;

use App\teachers;
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

        //checks if teacher exists
        $teacherExists = teachers::where('teacher_Email', '=', $profile['email'])->first();

        //$profile = array("sub"=>"auth0|5e1e7d91a994a40dd400bb09","nickname"=>"michael.tonini","name" => "Michael Tonini","picture" => "https://s.gravatar.com/avatar/56e96fe3c3330d899f3c1dfaa17436fb?s=480&r=pg&d=https%3A%2F%2Fcdn.auth0.com%2Favatars%2Fmi.png","updated_at" => "2020-01-29T07:57:59.854Z","email" => "michael.tonini@icloud.com","email_verified" => false, "https://scriibi.com/school" => 1,"https://scriibi.com/level" =>137,"https://scriibi.com/positions" => [1,2]);

        if($teacherExists == null){
            //transaction to insert new teacher into all relevant tables.
            DB::beginTransaction();

                            //creates teacher entry using auth0 metadata
                $teacher = teachers::firstOrCreate(['sub' => $profile['sub']],['name' => $profile['name'] ?? '', 'teacher_Email' => $profile['email'] ?? '']);

            try{
                //insert a new record in teachers-scriibi-levels according to auth0 metadata(level)
                    DB::table('teachers_scriibi_levels')->insert(
                        ['teachers_user_Id' => $teacher->user_Id,
                        'scriibi_levels_scriibi_Level_Id' => $profile['https://scriibi.com/level']]);

                //insert a new record in schools-teachers according to auth0 metadata(school)
                    DB::table('school_teachers')->insert(
                        ['teachers_user_Id' => $teacher->user_Id,  'schools_school_Id' => $profile['https://scriibi.com/school']]);

                //insert a new record in classes according with default values
                    $classId = DB::table('classes')->insertGetId(
                        ['class_Name' => $teacher->name.'_'.date("Y-m-d"),
                        'schools_school_Id' => $profile['https://scriibi.com/school']]);

                //associate that class with the logged in user
                    DB::table('classes_teachers')->insert(
                        ['classes_teachers_classes_class_Id' => $classId,
                        'teachers_user_Id' => $teacher->user_Id]);

                //insert teacher into relevant positions into teacher_positions according to metadata.
                    foreach($profile['https://scriibi.com/positions'] as $pos){
                        DB::table('teachers_positions')->insert(
                            ['teachers_user_Id' => $teacher->user_Id,
                                'positions_position_Id' => $pos]);}
                // If we reach here, then
                // data is valid and working.
                // Commit the queries!
                DB::commit();

                return $teacher;

            } catch (\Exception $e){
                DB::rollback();
                \Redirect::to('/')->withErrors($e->getMessage());
            }
        }
        else{
            return $teacherExists;
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


