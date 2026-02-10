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
        return $this->findWithAdvancedSearch([
            'query' => $query,
            'sort' => $sortField,
            'order' => $direction
        ]);
    }

    public function findWithAdvancedSearch(array $filters): array
    {
        $qb = $this->createQueryBuilder('t');

        if (!empty($filters['query'])) {
            $qb->andWhere('t.name LIKE :query OR t.game LIKE :query')
                ->setParameter('query', '%' . $filters['query'] . '%');
        }

        if (!empty($filters['game'])) {
            $qb->andWhere('t.game = :game')
                ->setParameter('game', $filters['game']);
        }

        if (!empty($filters['phase'])) {
            $qb->andWhere('t.phase = :phase')
                ->setParameter('phase', $filters['phase']);
        }

        if (isset($filters['isActive']) && $filters['isActive'] !== '') {
            $qb->andWhere('t.isActive = :isActive')
                ->setParameter('isActive', filter_var($filters['isActive'], FILTER_VALIDATE_BOOLEAN));
        }

        if (!empty($filters['minDate'])) {
            $qb->andWhere('t.startDate >= :minDate')
                ->setParameter('minDate', new \DateTimeImmutable($filters['minDate']));
        }

        if (!empty($filters['maxDate'])) {
            $qb->andWhere('t.endDate <= :maxDate')
                ->setParameter('maxDate', new \DateTimeImmutable($filters['maxDate']));
        }

        $sortField = $filters['sort'] ?? 'startDate';
        $direction = strtoupper($filters['order'] ?? 'DESC') === 'ASC' ? 'ASC' : 'DESC';

        $allowedSortFields = ['name', 'game', 'startDate', 'endDate', 'phase'];
        if (!in_array($sortField, $allowedSortFields)) {
            $sortField = 'startDate';
        }

        return $qb->orderBy('t.' . $sortField, $direction)
            ->getQuery()
            ->getResult();
    }
}
