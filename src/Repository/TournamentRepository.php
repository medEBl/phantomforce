<?php

namespace App\Repository;

use App\Entity\Tournament;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tournament>
 */
class TournamentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tournament::class);
    }

    public function searchAndSort(?string $query, string $sortField = 'startDate', string $direction = 'DESC'): array
    {
        $qb = $this->createQueryBuilder('t');

        if ($query) {
            $qb->andWhere('t.name LIKE :query OR t.game LIKE :query')
                ->setParameter('query', '%' . $query . '%');
        }

        $allowedFields = ['name', 'game', 'startDate', 'endDate'];
        if (!in_array($sortField, $allowedFields)) {
            $sortField = 'startDate';
        }

        $direction = strtoupper($direction) === 'ASC' ? 'ASC' : 'DESC';

        return $qb->orderBy('t.' . $sortField, $direction)
            ->getQuery()
            ->getResult();
    }
}
