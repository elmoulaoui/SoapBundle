<?php

namespace SoapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $soapService = $this->get('bytel_soap_weather');
        
        $params = array();
        
        $informations = $soapService->getWeatherInformation($params);
        
        $informations = $soapService->getWeatherInformation($params);
        
        return $this->render('SoapBundle:Default:index.html.twig', array('informations' => $informations));
    }
}
