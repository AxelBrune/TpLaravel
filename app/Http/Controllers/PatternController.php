<?php

namespace App\Http\Controllers;

use App\Models\Concession;
use App\Models\Facade;
use App\Models\FactureLine;
use App\Models\FirstObserver;
use App\Models\IterableArray;
use App\Models\SecondObserver;
use Illuminate\Http\Request;
use App\Models\Singleton;
use App\Models\Sujet;
use App\Models\Usine;

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
}
