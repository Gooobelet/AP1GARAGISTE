<?php

namespace App\Repository;

use App\Entity\UTILISATEUR;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UTILISATEUR>
 *
 * @method UTILISATEUR|null find($id, $lockMode = null, $lockVersion = null)
 * @method UTILISATEUR|null findOneBy(array $criteria, array $orderBy = null)
 * @method UTILISATEUR[]    findAll()
 * @method UTILISATEUR[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UTILISATEURRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UTILISATEUR::class);
    }

    public function add(UTILISATEUR $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(UTILISATEUR $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return UTILISATEUR[] Returns an array of UTILISATEUR objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UTILISATEUR
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
