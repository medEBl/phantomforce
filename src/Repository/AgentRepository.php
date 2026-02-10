<?php

namespace App\Repository;

use App\Entity\Agent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Agent>
 */
class AgentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Agent::class);
    }

    public function searchAndSort(?string $q, ?string $sort, ?string $dir): array
    {
        $qb = $this->createQueryBuilder('a');

        // 🔎 Search (Recherche)
        if ($q) {
            // FIX: Changed 'nom/prenom' to 'pseudo' to match your Entity
            $qb->andWhere('a.pseudo LIKE :q OR a.game LIKE :q OR a.rank LIKE :q')
               ->setParameter('q', '%' . $q . '%');
        }

        // ✅ Whitelist allowed sort fields (Security)
        $allowedSort = [
            'id' => 'a.id',
            'pseudo' => 'a.pseudo', // Changed from nom/prenom
            'game' => 'a.game',
            'rank' => 'a.rank',
            'status' => 'a.status'
        ];

        // Default to ID if the sort parameter is invalid
        $sortField = $allowedSort[$sort] ?? 'a.id';
        
        // Default to ASC unless DESC is explicitly requested
        $direction = strtoupper($dir) === 'DESC' ? 'DESC' : 'ASC';

        // ↕️ Sort
        $qb->orderBy($sortField, $direction);

        return $qb->getQuery()->getResult();
    }
}