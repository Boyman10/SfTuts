<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Psr\Log\LoggerInterface;

/**
 * Created by Bill.
 * User: John
 * Date: 4/17/2018
 * Time: 9:02 PM
 * @link https://symfony.com/doc/current/page_creation.html
 */
class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     * @return Response
     */
    public function number()
    {
        $number = mt_rand(0, 100);

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }

    /**
     * @Route("/lucky/logger")
     */
    public function list(LoggerInterface $logger)
    {
        $logger->info('Look! I just used a logging service');
        return $this->render('lucky/number.html.twig', array(
            'number' => 0,
        ));
    }
}