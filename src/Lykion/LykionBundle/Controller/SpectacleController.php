<?php

namespace Lykion\LykionBundle\Controller;

use Lykion\LykionBundle\Model\Page;
use Lykion\LykionBundle\Entity\Spectacle;
use Lykion\LykionBundle\Form\Type\SpectacleType;
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
		$form = $this->get('form.factory')->create(new SpectacleType());

        $request = $this->get('request');
        return $this->render('LykionLykionBundle:Spectacle:new.html.twig',
            array('form'=> $form->createView(),));
	}
}