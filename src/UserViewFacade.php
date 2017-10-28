<?php

namespace Letscodehu;


class UserViewFacade
{
    private $userService;

    /**
     * UserViewFacade constructor.
     * @param $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @param $id
     * @return UserProfileView
     */
    public function showProfile($id) {
        return $this->userService->showProfile($id);
    }

}