<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class UserController extends Controller
{

	public function listAction(){
		return new Response('<html><head></head><body>'.mt_rand(0,10).'</body></html>');
	}

}
