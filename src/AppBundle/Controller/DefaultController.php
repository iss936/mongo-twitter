<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/main-twitter", name="main_twitter")
     */
    public function mainTwitterAction(Request $request)
    {
            
           /* $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
            $db = $m->selectDB('twitterdb');
            $collection = new MongoCollection($db, 'twitter_search');
          
            var_dump($collection);
            die();*/

            $worldPlayer = file_get_contents($this->getParameter('kernel.root_dir')."/world_player.json");
        // replace this example code with whatever you need
        return $this->render('default/main_twitter.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'worldPlayer' => $worldPlayer
        ]);
    }


    /**
     * @Route("/benzema-hours", name="benzema")
     */
    public function benzemaAction(Request $request)
    {
        
        $datajsons = file_get_contents($this->container->getParameter('kernel.root_dir') . '/../web/json/benzema_hours.json');
        $tab = json_decode($datajsons, true);
        
        $totals = "";

        foreach ($tab as $oneTab => $value) {

            foreach ($value as $key => $val) {
                if ($key == "total") {
                    $totals = $totals.$val.',';
                }
            }
        }
        rtrim($totals, ',');
        $totals = substr($totals, 0, -1);
 
        return $this->render('default/benzema_hours.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'datajsons' => $datajsons,
            'totals' => $totals
        ]);
    }

    private function callApi() {
        
    }
}
