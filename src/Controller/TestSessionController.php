<?php


namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class TestSessionController
{
    /**
     * @Route("/sessionTest")
     */
    public function sessionTest(SessionInterface $session)
    {
        $session->set('attribute-name', 'attribute-value');

        return new Response('session test successful');
    }
}