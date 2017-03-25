<?php

namespace EventBundle\Repository;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends \Doctrine\ORM\EntityRepository
{
    public function getPostByTitle($title)
    {
        return $this
        ->createQueryBuilder('p')
        ->where('p.title = :title')
        ->SetParameter('title',$title)
        ->getQuery()
        ->getResult();
    }
}
