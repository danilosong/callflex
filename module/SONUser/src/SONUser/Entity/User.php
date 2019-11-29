<?php

namespace SONUser\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Math\Rand,
    Zend\Crypt\Key\Derivation\Pbkdf2;
use Zend\Stdlib\Hydrator;

/**
 * SonuserUsers
 *
 * @ORM\Table(name="sonuser_users")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="SONUser\Entity\UserRepository")
 */
class User {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    public function __construct(array $options = array()) {
        /*
          $hydrator = new Hydrator\ClassMethods;
          $hydrator->hydrate($options, $this);
         */

        (new Hydrator\ClassMethods)->hydrate($options, $this);

        $this->createdAt = new \DateTime("now");
        $this->updatedAt = new \DateTime("now");

        $this->salt = base64_encode(Rand::getBytes(8, true));
        $this->activationKey = md5($this->email . $this->salt);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function toArray() {
        return (new Hydrator\ClassMethods())->extract($this);
    }

}
