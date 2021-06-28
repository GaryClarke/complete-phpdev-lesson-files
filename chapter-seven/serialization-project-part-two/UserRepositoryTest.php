<?php

class UserRepositoryTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function a_user_can_be_retrieved_from_the_database()
    {
        $userRepo = new \App\Entity\UserRepository();

        $user = $userRepo->findById(1);

        $this->assertInstanceOf(\App\Entity\User::class, $user);
        $this->assertSame(0, $user->prod_server_access);
    }
}