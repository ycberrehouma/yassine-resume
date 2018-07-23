<?php

namespace yassineBundle\Entity;

use Doctrine\ORM\contact as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="login")
 */
class Login
{


    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $password;

}
