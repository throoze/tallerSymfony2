<?php

namespace USB\AuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Role\RoleInterface;

/**
 * @ORM\Entity(repositoryClass="USB\AuthBundle\Repository\RoleRepository")
 * @ORM\Table(name="Role")
 */
class Role implements RoleInterface {

  /**
   * @ORM\Id()
   * @ORM\Column(name="id", type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @ORM\Column(name="name", type="string", length=30)
   * @Assert\MaxLength(
   *     limit=30,
   *     message="El nombre del rol es muy largo, debe tener máximo {{ limit }} caracteres."
   * )
   */
  protected $name;

  /**
   * @ORM\Column(name="role", type="string", length=20, unique=true)
   * @Assert\MaxLength(
   *     limit=20,
   *     message="El nombre del rol es muy largo, debe tener máximo {{ limit }} caracteres."
   * )
   */
  protected $role;

  /**
   * @ORM\ManyToMany(targetEntity="User", mappedBy="roles", cascade={"ALL"})
   */
  protected $users;

  /** @see RoleInterface */
  public function getRole() {
    return $this->role;
  }

}