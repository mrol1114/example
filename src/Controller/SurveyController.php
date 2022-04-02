<?php

namespace App\Controller;

use App\Module\Greetings\PersonGreetings;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SurveyController extends AbstractController
{
    public function saveSurvey(Request $request): Response
    {
        $greetings = new PersonGreetings();

        $name = $request->get('name');
        $preparedName = $greetings->prepareAppeal($name);
        return $this->render('greetings.html.twig', ['name' => $preparedName]);
    }
}