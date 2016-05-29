<?php

namespace UserBundle\Schema;

use AppBundle\Entity;

class Schema
{
    private $entityManager;

    public function __construct(\Doctrine\ORM\EntityManager $em)
    {
        $this->entityManager = $em;
    }


    /**
     * @return Entity\User[]|array
     */
    public function findAllUsers()
    {
        return $this->entityManager->getRepository('AppBundle:User')->findAll();

    }

}