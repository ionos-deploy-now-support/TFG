<?php

namespace App\Repository;

use App\Entity\Subclases;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Subclases>
 *
 * @method Subclases|null find($id, $lockMode = null, $lockVersion = null)
 * @method Subclases|null findOneBy(array $criteria, array $orderBy = null)
 * @method Subclases[]    findAll()
 * @method Subclases[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubclasesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Subclases::class);
    }

    //    /**
    //     * @return Subclases[] Returns an array of Subclases objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Subclases
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
