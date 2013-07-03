<?php

namespace Lykion\LykionBundle\Controller;

use Lykion\LykionBundle\Model\Page;
use Lykion\LykionBundle\Entity\Spectacle;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
* Class SpectacleController
*
*/
class SpectacleController extends Controller
{
	public function newAction(Request $request)
	{
		$spectacle = new Spectacle();
        $spectacle->setTitle("Cargèse 2013");
        $spectacle->setDescription('Spéctacle pour fêter Pâques');

        $form = $this->createFormBuilder($spectacle)
                    ->add('title','text')
                    ->add('description','text')
                    ->add('save','submit')
                    ->getForm();
        return $this->render('LykionLykionBundle:Spectacle:new.html.twig',
            array('form'=> $form->createView(),));
	}
}