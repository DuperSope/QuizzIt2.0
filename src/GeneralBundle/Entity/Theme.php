<?php

namespace GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Theme
 *
 * @ORM\Table(name="theme")
 * @ORM\Entity(repositoryClass="GeneralBundle\Repository\ThemeRepository")
 */
class Theme implements \JsonSerializable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=120)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Theme", mappedBy="parent",  cascade={"persist", "remove"})
     *
     */
    private $child;
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Theme", inversedBy="child", cascade={"remove"})
     * @ORM\JoinColumn(name="parent", referencedColumnName="id")
     */
    private $parent;

    /**
     * @var int
     *
     * @ORM\Column(name="nbQuizz", type="integer")
     */
    private $nbQuizz;
    
    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;
    
    


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Theme
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set parent
     *
     * @param string $parent
     *
     * @return Theme
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set nbQuizz
     *
     * @param integer $nbQuizz
     *
     * @return Theme
     */
    public function setNbQuizz($nbQuizz)
    {
        $this->nbQuizz = $nbQuizz;

        return $this;
    }

    /**
     * Get nbQuizz
     *
     * @return int
     */
    public function getNbQuizz()
    {
        return $this->nbQuizz;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Theme
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->child = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add child
     *
     * @param \GeneralBundle\Entity\Theme $child
     *
     * @return Theme
     */
    public function addChild(\GeneralBundle\Entity\Theme $child)
    {
        $this->child[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param \GeneralBundle\Entity\Theme $child
     */
    public function removeChild(\GeneralBundle\Entity\Theme $child)
    {
        $this->child->removeElement($child);
    }

    /**
     * Get child
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChild()
    {
        return $this->child;
    }
    
    public function __toString() {
        return $this->name;
    }
    
    
    public function jsonSerialize()
    {
        $vars = get_object_vars($this);

        return $vars;
    }
}
