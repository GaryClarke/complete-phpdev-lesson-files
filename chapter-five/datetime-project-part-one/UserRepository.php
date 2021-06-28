<?php

namespace App\Models;

class UserRepository extends ModelRepository
{
    // CREATE, READ, UPDATE, DELETE (CRUD)

    /**************************************** Create ****************************************/

    public function save(array $userData): bool
    {
        $sql = "INSERT INTO users (name, email, user_timezone) VALUES (:name, :email, :user_timezone)";
        $stmt = $this->getPdo()->prepare($sql);
        $stmt->execute([
            'name'          => $userData['name'],
            'email'         => $userData['email'],
            'user_timezone' => $userData['user_timezone'],
        ]);

        return $stmt->rowCount() === 1;
    }

    /**************************************** Read ****************************************/

    public function findAll()
    {
        $users = $this->getPdo()->query('SELECT * FROM users')->fetchAll(\PDO::FETCH_CLASS, User::class);

        return $users;
    }

    public function findById(int $id): ?User
    {
        $stmt = $this->getPdo()->prepare('SELECT * FROM users WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $userArray = $stmt->fetch(\PDO::FETCH_ASSOC);

        if (!$userArray) {
            return null;
        }

        // make a user object using the $userArray
        return $this->makeUser($userArray);
    }

    /**************************************** Update ****************************************/

    /**************************************** Delete ****************************************/

    /**************************************** Utility ****************************************/

    private function makeUser(array $userData): User
    {
        $user = new User();
        $user->setId($userData['id']);
        $user->setName($userData['name']);
        $user->setEmail($userData['email']);
        $user->setCreatedAt(date_create($userData['created_at']));

        return $user;
    }


}