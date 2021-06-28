<?php

namespace App\Models;

class UserRepository
{

    private $pdo;

    private function getPdo(): \PDO
    {
        if ($this->pdo === null) {

            $options = [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            ];

            try {
                $this->pdo = new \PDO("mysql:host=127.0.0.1;dbname=pdo-demo;charset=utf8mb4", 'root', '', $options);

            } catch (\PDOException $PDOException) {

                throw new \PDOException($PDOException->getMessage(), (int) $PDOException->getCode());
            }
        }

        return $this->pdo;
    }

    public function save(array $userData): bool
    {
        $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
        $stmt = $this->getPdo()->prepare($sql);
        $stmt->execute(['name' => $userData['name'], 'email' => $userData['email']]);

        return $stmt->rowCount() === 1;
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