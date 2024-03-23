<?php

namespace App\Repository;

use App\Entity\Subrazas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Subrazas>
 *
 * @method Subrazas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Subrazas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Subrazas[]    findAll()
 * @method Subrazas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubrazasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Subrazas::class);
    }

    //    /**
    //     * @return Subrazas[] Returns an array of Subrazas objects
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

    //    public function findOneBySomeField($value): ?Subrazas
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
