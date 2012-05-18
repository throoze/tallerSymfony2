<?php
namespace USB\AuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\Role\RoleHierarchy;
use USB\AuthBundle\Entity\Role;

/**
 * USB\AuthBundle\Entity\User
 *
 * Representa a un usario del sistema
 *
 * @ORM\Entity(repositoryClass="USB\AuthBundle\Repository\UserRepository")
 * @ORM\Table(name="SfUser")
 * @UniqueEntity({"username"})
 */
class User implements AdvancedUserInterface {

  /**
   * @ORM\Id
   * @ORM\Column(name="id", type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @ORM\Column(name="username", type="string", length=100, unique=true)
   * @Assert\MaxLength(
   *     limit=100,
   *     message="El email es muy largo, debe tener máximo {{ limit }} caracteres.",
   *     groups={"registration"}
   * )
   * @Assert\MinLength(
   *     limit=3,
   *     message="El email es muy corto, debería tener al menos {{ limit }} caracteres.",
   *     groups={"registration"}
   * )
   * @Assert\Email(
   *     message="El email {{ value }} no es un email válido.",
   *     groups={"registration"}
   * )
   * @Assert\NotBlank(
   *     message="El username no debe estar en blanco.",
   *     groups={"registration"}
   * )
   */
  protected $username;

  /**
   * Encriptacion de clave autogenerada
   *
   * @ORM\Column(name="salt", type="string", length=32)
   * @Assert\MaxLength(
   *     limit=32,
   *     message="El salt es muy largo, debe tener máximo {{ limit }} caracteres."
   * )
   * @Assert\MinLength(
   *     limit=31,
   *     message="El salt es muy corto, debería tener al menos {{ limit }} caracteres."
   * )
   * @Assert\NotBlank(message="El salt no debe estar en blanco.")
   */
  protected $salt;

  /**
   * @ORM\Column(name="password", type="string", length=128)
   * @Assert\MaxLength(
   *     limit=128,
   *     message="La contraseña es muy larga, debe tener máximo {{ limit }} caracteres.",
   *     groups={"registration"}
   * )
   * @Assert\NotBlank(
   *     message="La contraseña no debe estar en blanco.",
   *     groups={"registration"}
   * )
   */
  protected $password;

  /**
   * @ORM\Column(name="is_active", type="boolean")
   * @Assert\NotBlank(message="isActive no debe estar en blanco.")
   */
  protected $isActive;

  /**
   * @ORM\Column(type="date")
   * @Assert\Date(message="{{ value }} no es una fecha válida.")
   */
  protected $birthday;

  /**
   * @ORM\Column(type="datetime")
   * @Assert\DateTime(message="La fecha de creación debe ser una fecha válida.")
   */
  protected $createdAt;

  /**
   * @ORM\Column(type="datetime")
   * @Assert\DateTime(message="La fecha de actualización debe ser una fecha válida.")
   */
  protected $updatedAt;

  // FOREIGN KEYS:

  /**
   * @ORM\ManyToMany(targetEntity="Role", inversedBy="users", cascade={"persist, remove"})
   */
  protected $roles;

  public function getRoles() {
    if (count($this->roles->toArray()) == 0) {
      $repo = $this->getDoctrine()->getRepository('ElCuadreAccountBundle:Role');
      $role = $repo->findOneByRole('ROLE_USER');
      return array($role);
    }
    return $this->roles->toArray();
  }

  public function eraseCredentials() {

  }

  public function getUsername() {
    return $this->username;
  }

  public function getSalt() {
    return $this->salt;
  }

  public function getPassword() {
    return $this->password;
  }

  public function isAccountNonExpired() {
    return true;
  }

  public function isAccountNonLocked() {
    return true;
  }

  public function isCredentialsNonExpired() {
    return true;
  }

  public function isEnabled() {
    return $this->isActive;
  }

  /**
   * The equality comparison should neither be done by referential equality
   * nor by comparing identities (i.e. getId() === getId()).
   *
   * However, you do not need to compare every attribute, but only those that
   * are relevant for assessing whether re-authentication is required.
   *
   * @param AdvancedUserInterface $user
   * @return Boolean
   */
  public function equals(UserInterface $user) {
    return ($user->getUsername() === $this->username);
  }
}