<?php

namespace App\Repository;

use App\Entity\TestUrl;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TestUrl>
 *
 * @method TestUrl|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestUrl|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestUrl[]    findAll()
 * @method TestUrl[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestUrlRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestUrl::class);
    }

//    /**
//     * @return TestUrl[] Returns an array of TestUrl objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TestUrl
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
