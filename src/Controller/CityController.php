<?php

namespace App\Controller;

use App\Repository\CityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CityController extends AbstractController
{
    /**
     * @Route("/", name="citys")
     */
    public function index(CityRepository $cityRepository)
    {
        $citys = $cityRepository->findOrder();

        return $this->render('city/index.html.twig', [
            'citys' => $citys,
        ]);
    }

    /**
     * @Route("/citys_e_d", name="citys_e_d")
     */
    public function citys_e_d(CityRepository $cityRepository)
    {
        $citys = $cityRepository->findAll();

        return $this->render('city/index.html.twig', [
            'citys' => $citys,
        ]);
    }
}
