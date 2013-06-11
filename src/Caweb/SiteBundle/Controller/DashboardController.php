<?php

namespace Caweb\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DashboardController extends Controller
{
    /**
     * Affiche la page d'accueil de l'interface d'administration
     * 
     * @Template("CawebSiteBundle:Dashboard:dashboard.html.twig")
     */
    public function dashboardAction()
    {
        return array(
            
        );
    }
}
