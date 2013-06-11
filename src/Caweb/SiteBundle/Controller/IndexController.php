<?php

namespace Caweb\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class IndexController extends Controller
{
    /**
     * Affiche la page d'accueil du site
     * 
     * @Template("CawebSiteBundle:Index:index.html.twig")
     */
    public function indexAction()
    {
        return array(
            
        );
    }
}
