<?php

namespace USB\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use USB\AuthBundle\Entity\User;
use USB\AuthBundle\Form\Type\RegistrationType;

/**
 * Description of AccountController
 *
 * @author victor
 */
class AccountController extends Controller {

  public function indexAction() {
    return new Response('Hello world!');
  }

  public function registerAction() {
    $user = new User();

    $form = $this->createForm(new RegistrationType() , $user);

    if ($this->getRequest()->getMethod() == 'POST') {
        $form->bindRequest($this->getRequest());

        if ($form->isValid()) {
            $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($user);

            $password = $encoder->encodePassword($user->getPassword(), $user->getSalt());
            $user->setPassword($password);

            $repo = $this->getDoctrine()->getRepository('USBAuthBundle:Role');
            $role = $repo->findOneByRole('ROLE_USER');
            $user->addRole($role);

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($user);
            $em->flush();

            // TODO: Loguear despues de inscribirse

            return $this->redirect($this->generateUrl('homepage'));
        }
    }

    return $this->render('USBAuthBundle:Register:register.html.twig', array(
                          'form' => $form->createView(),
            ));
  }

}

?>