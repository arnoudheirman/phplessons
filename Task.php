<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 7/02/2017
 * Time: 10:00
 */
class Task
{

    public $description;
    protected $completed = false;

    /*public function __construct($description){
        //automaticly triggered on instantiation
        $this->description = $description;
    }*/

    public function complete(){
        $this->completed = true;
    }

    public function isComplete(){
        return $this->completed;
    }

}