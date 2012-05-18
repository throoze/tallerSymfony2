<?php

namespace USB\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of AuthController
 *
 * @author victor
 */
class AuthController extends Controller {

  public function indexAction() {
    return new Response('Hello world!');
  }

  public function loginAction() {
    $request = $this->getRequest();
    $session = $request->getSession();

    // get the login error if there is one
    if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
      $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
    } else {
      $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
      $session->remove(SecurityContext::AUTHENTICATION_ERROR);
    }

    return $this->render(
               'USBAuthBundle:Auth:loginForm.html.twig', array(
                 'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                 'error'         => $error,
               )
           );
  }
}

?>