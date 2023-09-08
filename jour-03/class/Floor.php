<?php

class Floor{

    private ?int $id;
    private ?string $name;
    private ?int $level;

    function __construct(int $id= null, $name=null, $level=null){

        $this -> id = $id;
        $this -> name = $name;
        $this -> level = $level;

    }


    public function getId(): ?int{
        return $this -> id;
    }
    
    public function setId(int $id) {
         $this -> id = $id;
    }

    public function getName(): ?string{
        return $this -> name;
    }

    public function setName(string $name) {
         $this -> name = $name;
    }

    public function getLevel(): ?int{
        return $this -> level;
    }

    public function setLevel(int $level) {
         $this -> level = $level;
    }







}





?>