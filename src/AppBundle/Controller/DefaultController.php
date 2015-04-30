<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Category;
use AppBundle\Entity\Product;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template("AppBundle:Default:index.html.twig")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('AppBundle:Category')->findAll();
        
        if (empty($categories)) {
            $category = new Category();
            $category->setName("Entrées");
            $em->persist($category);
            
            $product1 = new Product();
            $product1->setCategory($category);
            $product1->setName("Salade 1");
            $product1->setDescription("Description de la salade 1");
            $product1->setPrice(500);
            $em->persist($product1);
            
            $product2 = new Product();
            $product2->setCategory($category);
            $product2->setName("Salade 2");
            $product2->setDescription("Description de la salade 2");
            $product2->setPrice(600);
            $em->persist($product2);
            
            $category->addProduct($product1);
            $category->addProduct($product2);
            
            $em->flush();

            $categories[] = $category;
        }
        
        return array(
            'categories' => $categories,
        );
    }
}
