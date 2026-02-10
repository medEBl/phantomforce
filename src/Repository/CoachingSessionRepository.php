<?php

namespace App\Repository;

use App\Entity\CoachingSession;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class CoachingSessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CoachingSession::class);
    }

    /**
     * Sessions dont la date est entre maintenant et X jours
     * @param int $days
     * @return CoachingSession[]
     */
    public function findUpcomingSessions(int $days = 1): array
    {
        $now = new \DateTime();
        $future = new \DateTime("+$days days");

        return $this->createQueryBuilder('c')
            ->andWhere('c.session_date BETWEEN :now AND :future')
            ->setParameter('now', $now)
            ->setParameter('future', $future)
            ->orderBy('c.session_date', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
