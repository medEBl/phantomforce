<?php
// src/Repository/UserRepository.php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function searchByTerm(string $term, int $limit = 10): array
    {
        return $this->createQueryBuilder('u')
            ->where('u.email LIKE :term')
            ->orWhere('u.username LIKE :term')
            ->orWhere('u.fullName LIKE :term')
            ->setParameter('term', '%' . $term . '%')
            ->orderBy('u.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function getUserStatistics(): array
    {
        $qb = $this->createQueryBuilder('u');
        
        $stats = [
            'total' => (int) $qb->select('COUNT(u.id)')->getQuery()->getSingleScalarResult(),
            'active' => (int) $qb->select('COUNT(u.id)')
                ->where('u.isActive = true')
                ->getQuery()
                ->getSingleScalarResult(),
            'inactive' => (int) $qb->select('COUNT(u.id)')
                ->where('u.isActive = false')
                ->getQuery()
                ->getSingleScalarResult(),
        ];
        
        // Count by role
        $roleStats = $this->createQueryBuilder('u')
            ->select('u.role, COUNT(u.id) as count')
            ->groupBy('u.role')
            ->getQuery()
            ->getResult();
        
        $stats['by_role'] = [];
        foreach ($roleStats as $roleStat) {
            $stats['by_role'][$roleStat['role']] = (int) $roleStat['count'];
        }
        
        // Count by country
        $countryStats = $this->createQueryBuilder('u')
            ->select('u.country, COUNT(u.id) as count')
            ->groupBy('u.country')
            ->getQuery()
            ->getResult();
        
        $stats['by_country'] = [];
        foreach ($countryStats as $countryStat) {
            $stats['by_country'][$countryStat['country']] = (int) $countryStat['count'];
        }
        
        // Last 7 days registrations
        $lastWeek = new \DateTime('-7 days');
        $recentRegistrations = $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.createdAt >= :lastWeek')
            ->setParameter('lastWeek', $lastWeek)
            ->getQuery()
            ->getSingleScalarResult();
        
        $stats['recent_registrations'] = (int) $recentRegistrations;
        
        return $stats;
    }

    public function findWithFilters(array $filters = [], string $sortBy = 'createdAt', string $sortOrder = 'DESC'): array
    {
        $qb = $this->createQueryBuilder('u');
        
        if (!empty($filters['search'])) {
            $qb->andWhere('u.email LIKE :search OR u.username LIKE :search OR u.fullName LIKE :search')
                ->setParameter('search', '%' . $filters['search'] . '%');
        }
        
        if (!empty($filters['role']) && $filters['role'] !== 'all') {
            $qb->andWhere('u.role = :role')
                ->setParameter('role', $filters['role']);
        }
        
        if (isset($filters['isActive']) && $filters['isActive'] !== null) {
            $qb->andWhere('u.isActive = :isActive')
                ->setParameter('isActive', $filters['isActive']);
        }
        
        if (!empty($filters['country']) && $filters['country'] !== 'all') {
            $qb->andWhere('u.country = :country')
                ->setParameter('country', $filters['country']);
        }
        
        if (!empty($filters['startDate'])) {
            $qb->andWhere('u.createdAt >= :startDate')
                ->setParameter('startDate', new \DateTime($filters['startDate']));
        }
        
        if (!empty($filters['endDate'])) {
            $qb->andWhere('u.createdAt <= :endDate')
                ->setParameter('endDate', new \DateTime($filters['endDate']));
        }
        
        // Validate sort field
        $allowedSortFields = ['id', 'email', 'username', 'role', 'createdAt', 'achievementPoints'];
        $sortBy = in_array($sortBy, $allowedSortFields) ? 'u.' . $sortBy : 'u.createdAt';
        
        $qb->orderBy($sortBy, $sortOrder);
        
        return $qb->getQuery()->getResult();
    }

    public function getCountriesList(): array
    {
        $countries = $this->createQueryBuilder('u')
            ->select('DISTINCT u.country')
            ->orderBy('u.country', 'ASC')
            ->getQuery()
            ->getResult();
        
        return array_column($countries, 'country');
    }

    public function getRolesList(): array
    {
        $roles = $this->createQueryBuilder('u')
            ->select('DISTINCT u.role')
            ->orderBy('u.role', 'ASC')
            ->getQuery()
            ->getResult();
        
        return array_column($roles, 'role');
    }
}