<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    /**
     * @Route("/", name="home")
     */
    public function indexAction() {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction() {
        return $this->render('default/about.html.twig');
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blogAction() {
        return $this->render('default/blog.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction() {

        return $this->render('default/contact.html.twig');
    }

}
