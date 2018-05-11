<?php

namespace App\Controller;

use App\Form\ApplicationType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormController extends Controller
{
    /**
     * @Route("/form", name="form")
     */
    public function index()
    {
        $form = $this->createForm(ApplicationType::class);
//        $form->add('submit', SubmitType::class);
        return $this->render('form/index.html.twig', ['form' => $form->createView()]);
    }
    /**
     * @Route("/form-updated", name="form")
     */
    public function form2()
    {
        $form = $this->createForm(ApplicationType::class);
//        $form->add('submit', SubmitType::class);
        return $this->render('form/form2.html.twig', ['form' => $form->createView()]);
    }
}
