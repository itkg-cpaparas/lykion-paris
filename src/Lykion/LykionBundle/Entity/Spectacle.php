<?php

namespace Lykion\LykionBundle\Entity;

use Lykion\LykionBundle\Model\Spectacle as BaseSpectacle;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Lykion\LykionBundle\Repository\SpectacleRepository")
 * @ORM\Table(name="lyk_spectacle")
 */
class Spectacle extends BaseSpectacle {

	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
  
    /**
     * Title
     * 
     * @var string 
     * @ORM\Column(type="string", length=255)
     */
    protected $title;

    /**
     * Description
     * 
     * @var string 
     * @ORM\Column(type="text")
     */
    protected $description;
    
    /**
     * Nombre de danseurs
     * 
     * @var string 
     * @ORM\Column(type="text")
     */
    protected $nbrdanseurs;

    /**
    * Date et heure du spectacle
    *
    * 
    * @ORM\Column(name="date", type="datetime")
    */
    protected $date;

    /**
     * Lieu du spéctacle
     * 
     * @var string 
     * @ORM\Column(type="text")
     */
    protected $lieu;

    /**
     * Galerie photo
     * 
     * @var string 
     * @ORM\Column(type="text")
     */
    protected $photos;
}