<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;


class TchatController{

    /**
     * 
     * @return Response
     */
    public function indexAction(){
        return new Response('Bienvenu sur Job.com');
    }
}