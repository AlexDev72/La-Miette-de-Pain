<?php

namespace App\Repository;

use App\Entity\Viennoiserie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Viennoiserie>
 *
 * @method Viennoiserie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Viennoiserie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Viennoiserie[]    findAll()
 * @method Viennoiserie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ViennoiserieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Viennoiserie::class);
    }

    public function add(Viennoiserie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Viennoiserie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Viennoiserie[] Returns an array of Viennoiserie objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Viennoiserie
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
