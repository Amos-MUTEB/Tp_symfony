<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CardTemplateRepository;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

     /**
     * @Route("/templates", name="templates")
     */
    public function templates()
    {
      return $this->render('index/templates.html.twig');
    }

    
    /**
     * @Route("/templates", name="templates")
     */
    public function produit(CardTemplateRepository $templateRepository)
    {
        $templates = $templateRepository->findAll();
        return $this->render('index/templates.html.twig', [
            'templates' => $templates,
            'controller_name' => 'TemplatesController',
        ]);
    }
}
