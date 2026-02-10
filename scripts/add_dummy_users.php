<?php
require 'vendor/autoload.php';

use App\Kernel;

$kernel = new Kernel('dev', true);
$kernel->boot();
$container = $kernel->getContainer();
$em = $container->get('doctrine.orm.entity_manager');
$conn = $em->getConnection();

$users = [
    ['testuser1', 'test1@example.com', 'password123', '["ROLE_USER"]', '2024-01-01 10:00:00'],
    ['testuser2', 'test2@example.com', 'password123', '["ROLE_USER"]', '2024-01-01 10:00:00'],
];

foreach ($users as $user) {
    try {
        $conn->executeStatement(
            "INSERT INTO `user` (username, email, password, roles, created_at) VALUES (?, ?, ?, ?, ?)",
            $user
        );
        echo "User {$user[0]} added.\n";
    } catch (\Exception $e) {
        echo "Error adding {$user[0]}: " . $e->getMessage() . "\n";
    }
}
