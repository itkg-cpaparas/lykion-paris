<?php

namespace Lykion\LykionBundle\Repository;

use Lykion\LykionBundle\Mapper\SpectacleMapperInterface;
use Lykion\LykionBundle\Model\Spectacle;
use Doctrine\ORM\EntityRepository;

class SpectacleRepository extends EntityRepository implements SpectacleMapperInterface
{
    public function create(Spectacle $spectacle)
    {
        $this->_em->persist($spectacle);
        $this->_em->flush();
        
        return $page;
    }
    
    public function update(Spectacle $spectacle)
    {
        $this->_em->persist($spectacle);
        $this->_em->flush();
        
        return $page;
    }
    public function remove(Spectacle $spectacle)
    {
        $this->_em->remove($spectacle);
        $this->_em->flush();
    }
}