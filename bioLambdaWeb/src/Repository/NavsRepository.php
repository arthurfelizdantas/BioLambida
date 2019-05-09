<?php

namespace App\Repository;

use App\Entity\Navs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Navs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Navs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Navs[]    findAll()
 * @method Navs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NavsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Navs::class);
    }

    // /**
    //  * @return Navs[] Returns an array of Navs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Navs
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
