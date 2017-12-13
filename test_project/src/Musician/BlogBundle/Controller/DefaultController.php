<?php

namespace Musician\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;



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
        $entities = $em->getRepository('MusicianBlogBundle:Blog')->findBy(['active'=>1]);
        
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

    /**
     * @Route("/deletePost/{id}", name="deletePost", requirements={"id"})
     * @Template()
     * @Method({"DELETE"})
     */    
    public function deletePostAction( $id = 0 )
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MusicianBlogBundle:Blog')->find($id);
        
        $entity->setActive(0);
                
        $em->persist($entity);
        $em->flush();  // When done, remove comment!
        
        $response = new Response(json_encode(array("deleted" => $id)));

        $response->headers->set('Content-Type', 'application/json');
        return $response; 
    } 
}
