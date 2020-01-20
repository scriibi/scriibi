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

        //checks if teacher is available
        $teacherExists = DB::table('teachers')->select('teachers.*')->where('teacher_Email', '=', $profile['email'])->first();

        //creates teacher entry regardless
        $teacher = teachers::firstOrCreate(['sub' => $profile['sub']],['name' => $profile['name'] ?? '', 'teacher_Email' => $profile['email'] ?? '']);

        //creates class, class-teacher, teacher-scriibi-level and teacher-school relationships if this is the first time logging in!
        if(!$teacherExists){
            CustomUserRepository::someFunction($teacher);
        }

        return $teacher;
    }

    protected function someFunction($teacher){

        //insert a new record in teachers-scriibi-levels according to auth0 metadata(level)
            DB::table('teachers_scriibi_levels')->insert(
                ['teachers_user_Id' => $teacher->user_Id,
                'scriibi_levels_scriibi_Level_Id' => 3]);
        //insert a new record in schools-teachers according to auth0 metadata(school)
            DB::table('school_teachers')->insert(
                ['teachers_user_Id' => $teacher->user_Id,  'schools_school_Id' => 1]);

        //insert a new record in classes according with default values
            $classId = DB::table('classes')->insertGetId(
                ['class_Name' => $teacher->name.'_'.date("Y-m-d"),
                'schools_school_Id' => 1]);

        //associate that class with the logged in user
            DB::table('classes_teachers')->insert(
                ['classes_teachers_classes_class_Id' => $classId,
                'teachers_user_Id' => $teacher->user_Id]);

        //similuate array of positions from auth0metadata
            $auth0positions = array(1,2);

            //check if array length is greater than 1
                foreach($auth0positions as $pos){
                    DB::table('teachers_positions')->insert(
                        ['teachers_user_Id' => $teacher->user_Id,
                         'positions_position_Id' => $pos]);
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
        return new Auth0User( $user->getAttributes(), $userinfo['accessToken'] );
    }
}
