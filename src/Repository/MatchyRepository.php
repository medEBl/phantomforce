<?php

namespace App\Repository;

use App\Entity\Matchy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Matchy>
 *
 * @method Matchy|null find($id, $lockMode = null, $lockVersion = null)
 * @method Matchy|null findOneBy(array $criteria, array $orderBy = null)
 * @method Matchy[]    findAll()
 * @method Matchy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatchyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Matchy::class);
    }
    public function findAllWithTeams(): array
{
    return $this->createQueryBuilder('m')
        ->leftJoin('m.team1', 't1')
        ->leftJoin('m.team2', 't2')
        ->leftJoin('m.winnerTeam', 'w')
        ->addSelect('t1', 't2', 'w')
        ->orderBy('m.matchDate', 'DESC')
        ->getQuery()
        ->getResult();
}

//    /**
//     * @return Matchy[] Returns an array of Matchy objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Matchy
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
