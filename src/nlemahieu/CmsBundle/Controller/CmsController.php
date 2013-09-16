<?php

namespace nlemahieu\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CmsController extends Controller
{
    public function indexAction()
    {
        return $this->render('nlemahieuCmsBundle:Cms:index.html.twig');
    }
}
