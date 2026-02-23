<?php

namespace App\Command;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:setup-user-table',
    description: 'Creates the user table and adds dummy data',
)]
class SetupUserTableCommand extends Command
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $conn = $this->entityManager->getConnection();

        $sql = "CREATE TABLE IF NOT EXISTS `user` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `username` varchar(50) NOT NULL,
          `email` varchar(180) NOT NULL,
          `password` varchar(255) NOT NULL,
          `roles` longtext NOT NULL,
          `full_name` varchar(100) DEFAULT NULL,
          `country` varchar(30) DEFAULT NULL,
          `birth_date` date DEFAULT NULL,
          `achievement_points` int(11) DEFAULT 0,
          `badges` longtext DEFAULT NULL,
          `is_active` tinyint(1) DEFAULT 1,
          `created_at` datetime NOT NULL,
          `last_login_at` datetime DEFAULT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `username` (`username`),
          UNIQUE KEY `email` (`email`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

        try {
            $conn->executeStatement($sql);
            $io->success("Table 'user' created or already exists.");

            // Add dummy users if empty
            $count = $conn->fetchOne("SELECT COUNT(*) FROM `user` ");
            if ($count == 0) {
                $conn->executeStatement(
                    "INSERT INTO `user` (username, email, password, roles, created_at) VALUES (?, ?, ?, ?, ?)",
                    ['player1', 'player1@example.com', 'password', '["ROLE_USER"]', date('Y-m-d H:i:s')]
                );
                $conn->executeStatement(
                    "INSERT INTO `user` (username, email, password, roles, created_at) VALUES (?, ?, ?, ?, ?)",
                    ['player2', 'player2@example.com', 'password', '["ROLE_USER"]', date('Y-m-d H:i:s')]
                );
                $io->success("Dummy users added.");
            }

            return Command::SUCCESS;
        } catch (\Exception $e) {
            $io->error("Error: " . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
