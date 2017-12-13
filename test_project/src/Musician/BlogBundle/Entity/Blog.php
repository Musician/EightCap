<?php

namespace Musician\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blog
 *
 * @ORM\Table(name="posts")
 * @ORM\Entity(repositoryClass="Musician\BlogBundle\Entity\BlogRepository")
 */
class Blog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

     /**
     * @var string
     *
     * @ORM\Column(name="title", type="string")
     */
    private $title;
     
    public function getTitle()
    {
        return $this->title;
    }

     /**
     * @var text
     *
     * @ORM\Column(name="short_text", type="text")
     */
    private $shortText;
     
    public function getShortText()
    {
        return $this->shortText;
    }  
    
     /**
     * @var text
     *
     * @ORM\Column(name="long_text", type="text")
     */
    private $long_text;
     
    public function getLongText()
    {
        return $this->long_text;
    }  
     
     /**
     * @var string
     *
     * @ORM\Column(name="author", type="string")
     */
    private $author;
     
    public function getAuthor()
    {
        return $this->author;
    }  
    
     /**
     * @var bool
     *
     * @ORM\Column(name="active", type="integer")
     */
    private $active;
     
    public function getActive()
    {
        return $this->active;
    }  

     /**
     * @var date
     *
     * @ORM\Column(name="created", type="string")
     */
    private $created;
     
    public function getCreated()
    {
        return $this->created;
    }  
    
}
