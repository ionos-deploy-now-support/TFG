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

    public function FindUniqueAutores(){
        return $this->createQueryBuilder('a')
        ->select('a.Autor')
        ->andWhere('a.Autor IS NOT NULL')
        ->andWhere('a.Validado = 1')
        ->groupBy('a.Autor')
        ->getQuery()
        ->getResult();
    }

    
    
    public function FindFilter(Subclases $formulario){
       $qb = $this->createQueryBuilder('a')
                  ->select('a');


               
        if ($formulario->getNombre() != null){
            $qb = $qb->andWhere('a.Nombre LIKE :nombre')
            ->setParameter('nombre' , '%' .  $formulario->getNombre() . '%');
        }
        
        if ($formulario->getRequisitos() != null){
            $qb = $qb->andWhere('a.Requisitos LIKE :requisitos')
               ->setParameter('requisitos' , '%' .  $formulario->getRequisitos() . '%');
        }

       if ($formulario->getClaseId() != null){
            $qb = $qb->andWhere('a.clase_id = :clase')
               ->setParameter('clase' ,   $formulario->getClaseId());
        }
        
        if ($formulario->getAutor() != null){
            $qb = $qb->andWhere('a.Autor = :autor')
               ->setParameter('autor' ,  $formulario->getAutor()  );
               
        } 
           
       $qb = $qb->andWhere('a.Validado = 1')
        ->getQuery()
        ->getResult();
        return $qb;
       
       
        
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
