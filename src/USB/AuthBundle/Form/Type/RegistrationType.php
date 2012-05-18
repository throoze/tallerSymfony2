<?php

namespace USB\AuthBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

/**
 * Registration Form
 *
 * @author victor
 */
class RegistrationType extends AbstractType {
  public function buildForm(FormBuilder $builder, array $options) {
    $builder->add('username', 'text', array(
        'label'    => 'Username :',
        'required' => true,
    ));
    $builder->add('email', 'text', array(
        'label'    => 'E-mail :',
        'required' => true,
    ));
    $builder->add('password', 'password', array(
        'label'    => 'Password :',
        'required' => true,
    ));
    $builder->add('confirm_password', 'password', array(
        'label'         => 'Confirmar Password :',
        'property_path' => false,
        'required'      => false,
    ));
    $builder->add('birthday', 'date', array(
        'label'       => 'Fecha de Nacimiento :',
        'widget'      => 'choice',
        'format'      => 'dd MM yyyy',
        'empty_value' => array('year' => 'Año', 'month' => 'Mes', 'day' => 'Dia'),
        'required'    => true,
        'years'       => range(2008,1900),
    ));
  }

  public function getName() {
    return 'registration';
  }

  public function getDefaultOptions(array $options) {
    return array(
        'csrf_protection' => true,
        'csrf_field_name' => '_token',
        'data_class'      => 'USB\AuthBundle\Entity\User',
        // a unique key to help generate the secret token
        'intention'       => 'registration_form',
    );
  }
}

?>