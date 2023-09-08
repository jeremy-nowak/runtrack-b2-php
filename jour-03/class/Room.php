<?php

class Room{

    private ?int $id;
    private ?string $name;
    private ?int $capacity;
    private ?int $floor_id;

    function __construct(int $id= null, $name=null, $capacity=null, $floor_id=null){

        $this -> id = $id;
        $this -> name = $name;
        $this -> capacity = $capacity;
        $this -> floor_id = $floor_id;

    }


    public function getId(): ?int{
        return $this -> id;
    }
    public function setId(int $id) {
        $this -> id = $id;
   }
// ---------------------------------------------
    public function getName(): ?string{
        return $this -> name;
    }
    public function setName(string $name) {
        $this -> name = $name;
   }
//    ---------------------------------------------

    public function getCapacity(): ?int{
        return $this -> capacity;
    }
    public function setCapacity(int $capacity) {
        $this -> capacity = $capacity;
   }
// ---------------------------------------------
    public function getFloorId(): ?int{
        return $this -> floor_id;
    }   
    public function setFloorId(int $floor_id) {
        $this -> floor_id = $floor_id;
}
// ---------------------------------------------




}




?>