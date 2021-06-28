<?php

namespace App\Entity;

class UserRepository extends ModelRepository
{

    public function save(array $userData): bool
    {
        $user = $this->makeUser($userData);

        $sql = "INSERT INTO users (
                   name, prod_server_access, prod_data_access, 
                   dev_server_access, dev_data_access,
                   test_server_access, test_data_access, original_settings) 
                   VALUES (
                     :name, 
                     :prod_server_access, :prod_data_access, 
                     :dev_server_access, :dev_data_access,
                     :test_server_access, :test_data_access,
                     :original_settings)";

        $stmt = $this->getPdo()->prepare($sql);

        $stmt->execute([
            'name'               => $user->name,
            'prod_server_access' => $user->prod_server_access,
            'prod_data_access'   => $user->prod_data_access,
            'dev_server_access'  => $user->dev_server_access,
            'dev_data_access'    => $user->dev_data_access,
            'test_server_access' => $user->test_server_access,
            'test_data_access'   => $user->test_data_access,
            'original_settings'  => $user->original_settings
        ]);

        return $stmt->rowCount() === 1;
    }


    public function makeUser(array $userData): User
    {
        $user = new User();
        $user->hydrate($userData);
        $user->original_settings = serialize($user);

        return $user;
    }


    public function findById(int $id): ?User
    {
        $stmt = $this->getPdo()->prepare('SELECT * FROM users WHERE id = :id');

        $stmt->execute(['id' => $id]);

        $userArray = $stmt->fetchAll(\PDO::FETCH_CLASS, User::class);

        if (!count($userArray) === 1) {
            return null;
        }

        return $userArray[0];
    }














}