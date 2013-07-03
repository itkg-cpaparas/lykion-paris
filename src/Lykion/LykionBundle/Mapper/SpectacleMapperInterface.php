<?php

namespace Lykion\LykionBundle\Mapper;

use Lykion\LykionBundle\Model\Spectacle

interface SpectacleMapperInterface
{
    public function create(Spectacle $spectacle);
    public function update(Spectacle $spectacle);
    public function remove(Spectacle $spectacle);
}