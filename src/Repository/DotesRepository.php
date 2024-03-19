<?php

namespace App\Repository;

use App\Entity\Dotes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dotes>
 *
 * @method Dotes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dotes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dotes[]    findAll()
 * @method Dotes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DotesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dotes::class);
    }

    //    /**
    //     * @return Dotes[] Returns an array of Dotes objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('d')
    //            ->andWhere('d.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('d.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Dotes
    //    {
    //        return $this->createQueryBuilder('d')
    //            ->andWhere('d.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
