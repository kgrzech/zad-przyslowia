<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /*
     * A
     */

    /*
     * B
     */
    /**
    * @Route("/bogatemu-to.html", name="bogatemu-to")
    */
    public function bogatemuToAction()
    {
        return $this->render('default/bogatemu-to.html.twig');
    }
    /*
     * C
     */

    /*
     * D
     */

    /*
     * E
     */
    
    
    /**
    * @Route("/bez-matki.html", name="bez matki")
    */
    public function bezmatkiAction()
    {
    return $this->render('default/bez-matki.html.twig');
    }
    
    
    /*
     * F
     */

    /*
     * G
     */

    /*
     * H
     */

    /*
     * I
     */
    
    /**
    * @Route("/im-dab-starszy.html", name="im-dab-starszy")
    */
    public function ImDabStarszyAction()
    {
    return $this->render('default/im-dab-starszy.html.twig');
    }   

    /*
     * J
     */

    /*
     * K
     */

    /*
     * L
     */

    /*
     * M
     */

    /*
     * N
     */

    /*
     * O
     */

    /*
     * P
     */

    /*
     * Q
     */

    /*
     * R
     */

    /*
     * S
     */

    /*
     * T
     */

    /*
     * U
     */

    /*
     * V
     */

    /**
     * @Route("/gdzie-sie-z-checia.html", name="gdzie-sie-z-checia")
     */
    public function gdzieSieZCheciaAction()
    {
        return $this->render('default/gdzie-sie-z-checia.html.twig');
    }

    /*
     * W
     */

    /*
     * X
     */

    /*
     * Y
     */

    /*
     * Z
     */


}
