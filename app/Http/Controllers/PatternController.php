<?php

namespace App\Http\Controllers;

use App\Models\Concession;
use App\Models\Context;
use App\Models\ErreurAcheminement;
use App\Models\ErreurConstruction;
use App\Models\Facade;
use App\Models\FactureLine;
use App\Models\FirstObserver;
use App\Models\IterableArray;
use App\Models\Noeud;
use App\Models\Feuille;
use App\Models\SecondObserver;
use Illuminate\Http\Request;
use App\Models\Singleton;
use App\Models\Sujet;
use App\Models\Usine;
use App\Models\Handler;
use App\Models\Livrée;

class PatternController extends Controller
{
    public static function showSingleton()
    {
        $a = Singleton::getInstance();
        $b = Singleton::getInstance();
        return view('singleton', ["firstElement" => $a, "secondElement" => $b]);
    }

    public function showFactory()
    {
        $firstCar = Usine::createCar('Opel');
        return view('factory', ["firstCar" => $firstCar]);
    }

    public function showFacade()
    {
        $facade = new Facade();
        $concession = $facade->commander('Renaud', 'Clio 2');
        $concession = $facade->commander('Opel', 'Corsa');
        return view('facade', ["voitures" => $concession->getCars() ]);
    }

    public function showIterator()
    {
        $concession = new Concession('Concession d\'itérateur');        
        for ($i=0;$i<6; $i++)
        {
            $car = Usine::createCar('Renaud');
            $car->setConcession($concession);
            $car->setModele('Clio '.$i);
            $car->setFacture(7000);
            $concession->addCar($car);
        }
        $iterable = new IterableArray($concession->getCars());
        return view('iterator', ["voitures" => $iterable->getIterator()]);
    }

    public function showObserver()
    {
        $fObserver = new FirstObserver();
        $sObserver = new SecondObserver();
        $subject = new Sujet();
        $subject->registerObserver($fObserver);
        $subject->registerObserver($sObserver);

        return view('observer', ["obs1"=>$fObserver, "obs2" => $sObserver, "sujet"=>$subject]);
    }

    public function showStrategy()
    {
        $concession = new Concession('Concession de Stratégie');

        $car1 = Usine::createCar('Renaud');
        $car1->setConcession($concession);
        $car1->setModele('Clio');
        $car1->setFacture(7000);
        $concession->addCar($car1);

        $car2 = Usine::createCar('Opel');
        $car2->setConcession($concession);
        $car2->setModele('Corsa');
        $car2->setFacture(13000);

        $line1 = new FactureLine($car1);
        $line2 = new FactureLine($car2);
        return view('strategy', ["line1" => $line1, "line2" => $line2]);
    }

    public function showTemplate()
    {
        $concession = new Concession('Concession de Template');

        $car1 = Usine::createCar('Renaud');
        $car1->setConcession($concession);
        $car1->setModele('Clio');
        $car1->setFacture(7000);
        $concession->addCar($car1);

        $car2 = Usine::createCar('Opel');
        $car2->setConcession($concession);
        $car2->setModele('Corsa');
        $car2->setFacture(13000);
        $concession->addCar($car2);

        return view('template', ["voitures" =>$concession->getCars()]);
    }

    public function showCommand()
    {
        return view('command');
    }

    public function showComposite()
    {
        $concession = new Concession('Concession de Composite');

        $car1 = Usine::createCar('Renaud');
        $car1->setConcession($concession);
        $car1->setModele('Clio');
        $car1->setFacture(1000);
        $concession->addCar($car1);


        $car2 = Usine::createCar('Opel');
        $car2->setConcession($concession);
        $car2->setModele('Corsa');
        $car2->setFacture(2000);
        $concession->addCar($car2);  

        $car3 = Usine::createCar('Opel');
        $car3->setConcession($concession);
        $car3->setModele('Corsa');
        $car3->setFacture(3000);
        $concession->addCar($car3); 

        $car4 = Usine::createCar('Opel');
        $car4->setConcession($concession);
        $car4->setModele('Corsa');
        $car4->setFacture(4000);
        $concession->addCar($car4); 

        $car5 = Usine::createCar('Renaud');
        $car5->setConcession($concession);
        $car5->setModele('Clio 2');
        $car5->setFacture(5000);
        $concession->addCar($car5); 

        $car6 = Usine::createCar('Renaud');
        $car6->setConcession($concession);
        $car6->setModele('Test');
        $car6->setFacture(6000);
        $concession->addCar($car6); 

        $noeud1 = new Noeud();
        $noeud2 = new Noeud();
        $noeud3 = new Noeud();
        $feuille1 = new Feuille($car4);
        $feuille2 = new Feuille($car5);
        $feuille3 = new Feuille($car6);

        $noeud1->addChild($noeud2);
        $noeud1->addChild($noeud3);
        $noeud2->addChild($feuille1->getCar());
        $noeud2->addChild($feuille2->getCar());
        $noeud3->addChild($feuille3->getCar());

        $feuille1->setParent($car2);
        $feuille2->setParent($car2);
        $feuille3->setParent($car3);

        return view('composite', 
        ["v1"=>$noeud1,"v2"=>$noeud2,"v3"=>$noeud3,
        "f1"=>$feuille1,"f2"=>$feuille2, "f3"=>$feuille3]);
    }

    public function showChain()
    {
        $handler = new Handler();
        $construction = new ErreurConstruction();
        $achemineùent = new ErreurAcheminement();
        $livrée = new Livrée();

        $handler->addReceiver($construction);
        $handler->addReceiver($achemineùent);
        $handler->addReceiver($livrée);
        return view('chain', ["handler"=>$handler]);
    }

    public function showState()
    {
        $context = new Context("demande"); 
        return view('state', ["context"=>$context]);
    }
}
