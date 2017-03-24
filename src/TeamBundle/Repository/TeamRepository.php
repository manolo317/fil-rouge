<?php

namespace TeamBundle\Repository;

/**
 * TeamRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TeamRepository extends \Doctrine\ORM\EntityRepository
{
    public function getTeamsByCategory($category)
    {
        return $this
            ->createQueryBuilder('t')
            ->where('t.category = :category')// tri des résultats
            ->setParameter('category', $category)
            ->getQuery()
            ->getResult();
    }
}