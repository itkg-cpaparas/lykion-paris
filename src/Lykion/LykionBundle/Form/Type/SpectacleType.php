<?php

namespace Lykion\LykionBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class SpectacleType
 *
 * Form for Spectacle
 * 
 */
class SpectacleType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('id', 'hidden');
        $builder->add('title', 'text');
        $builder->add('description','textarea');
        $builder->add('nbdanseurs','text');
        $builder->add('date','date',array('format' => 'dd/MM/yyyy'));
        $builder->add('lieu','text');
        $builder->add('photos','text');
        $builder->add('Enregistrer','submit');
    }

    public function getName()
    {
        return 'lykion_spectacle';
    }
}