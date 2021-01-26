<?php

namespace App\Services;

use Exception;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserService
{
    /**
     * @var UserRepositoryInterface
     */
    protected $userRepositoryInterface;

    public function __construct(UserRepositoryInterface $userRepoInt)
    {
        $this->userRepositoryInterface = $userRepoInt;
    }

    /**
     * Return all the memberships of a specified user
     * @param $id
     * @return array
     */
    public function getUserMemberships($id): array
    {
        try
        {
            return $this->userRepositoryInterface->getUserMemberships($id);
        }
        catch (Exception $e)
        {
            return [];
        }
    }
}
?>
