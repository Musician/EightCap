<?php

namespace Musician\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/blog", name="blog")
     */
    public function indexAction()
    {
        return $this->render('MusicianBlogBundle:Default:index.html.twig');
        // return array("text"=>"Musician Blog");
        //return new \Symfony\Component\HttpFoundation\Response("Musician Blog");
    }
}