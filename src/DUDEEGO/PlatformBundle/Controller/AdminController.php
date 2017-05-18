<?php

// src/DUDEEGO/PlatformBundle/Controller/AdvertController.php

namespace DUDEEGO\PlatformBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class adminController extends Controller
{
	public function adminPanelAction(Request $request)
	{ 
		return $this->render('DUDEEGOPlatformBundle:Admin:adminPanel.html.twig');		
	}
}