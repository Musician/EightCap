<?php

namespace Musician\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/blog", name="blog")
     * @Template()
     */
    public function indexAction()
    {
        //return $this->render('MusicianBlogBundle:Default:index.html.twig');
         return array("text"=>"Musician Test Blog");
        //return new \Symfony\Component\HttpFoundation\Response("Musician Blog");
    }

    /**
     * @Route("/blog/all", name="all")
     * @Template()
     */
    public function viewAllPostsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('MusicianBlogBundle:Blog')->findAll();
        
        return array(
            'entities' => $entities,
        );
    }    

    /**
     * @Route("/blog/new", name="new")
     * @Template()
     */
    public function newPostFormAction()
    {
        //return $this->render('MusicianBlogBundle:Default:index.html.twig');
         return array("text"=>"Musician Test Blog");
        //return new \Symfony\Component\HttpFoundation\Response("Musician Blog");
    }       
}
