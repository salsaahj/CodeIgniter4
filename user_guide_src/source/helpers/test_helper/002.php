<?php

public function testUserAccess()
{
    $user = fake('App\Models\UserModel');

    $this->assertTrue($this->userHasAccess($user));
}
