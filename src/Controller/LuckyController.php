<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Created by Bill.
 * User: John
 * Date: 4/17/2018
 * Time: 9:02 PM
 */
class LuckyController
{
    /**
     * @Route("/lucky/number")
     * @return Response
     */
    public function number()
    {
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}