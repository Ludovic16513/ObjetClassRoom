<?php
/**
 * Class Batiment
 */

class Batiment
{

    private $windowNumber;
    private $doorNumber;
    private $garageBool;
    private $occupyBool;
    private $floorNumber;
    protected $gardenBool;
    private $typeChauffage = array('electrique', 'gaz');



    public function __construct($window, $floor, $doorNumber, $chauffage, bool $jardin, bool $occupy,  bool $garage)
    {

        $this->setWindow($window);
        $this->setDoor($doorNumber);
        $this->setFloor($floor);
        $this->setChauffage($chauffage);

        $this->setGarden($jardin);
        $this->gardenBool;

        $this->setOccupy($occupy);
        $this->occupyBool;

        $this->setGarage($garage);
        $this->garageBool;
    }

    public function setChauffage($type)
    {
        $i = 0;
        while ($i < count($this->typeChauffage)) {
            $i++;
            if ($type == $this->typeChauffage[$i])
            {
                $this->typeChauffage = $type;
            }
            else{
                $this->typeChauffage = 'Aucune installation';
            }
        }

    }

    public function setGarage(bool $type){
        if ($type)
            $this->garageBool = 'Oui';
        else
            $this->garageBool = 'Non';
    }

    public function setOccupy(bool $type){
        if ($type)
            $this->occupyBool = 'Oui';
        else
            $this->occupyBool = 'Non';
    }

    public function setGarden(bool $type){
        if ($type)
            $this->gardenBool = 'Oui';
        else
            $this->gardenBool = 'Non';
    }

    public function setWindow($number){
        $this->windowNumber = $number;
    }

    public function getWindow(){
        return $this->windowNumber;
    }

    public function setDoor($number){
        $this->doorNumber = $number;
    }

    public function getdoor(){
        return $this->doorNumber;
    }

    public function setFloor($number){
        $this->floorNumber = $number;
    }

    public function getFloor(){
        return $this->floorNumber;
    }

    public function __destruct()
    {
       echo "detruit";
    }

}

$bat = new batiment(10,10,10,10,true,false,false,false);

print_r($bat);







/**
 *
 * Class Maison
 */
class Maison extends Batiment
{
    /**
     * Maison constructor.
     * @param $window
     * @param $porte
     * @param $floor
     * @param $doorNumber
     * @param bool $chauffage
     * @param bool $jardin
     */

    private $room;

    public function __construct($room, $window, $porte, $floor, $doorNumber, $chauffage, bool $jardin, bool $occupy, bool $garage)
    {
        parent::__construct($window, $porte, $floor, $doorNumber, $chauffage, $jardin, $occupy, $garage);
        $this->setRoom($room);
    }

    public function setRoom($number)
    {
        $this->RoomNumber = $number;
    }

    public function getRoom()
    {
        return $this->room;
    }
}
$maison = new Maison(10,10,10,10,true,true,true,true, true);

print_r($maison);