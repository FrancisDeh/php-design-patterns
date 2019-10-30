<?php

//provide namespace here

class Preference {

    /**
     * Stores the preference properties ie theme: dark or light
     * @var array
     */
    private $props = [];

    /** 
     * Private instance of the Preference class
     * @var object
    */
    private static $instance;

    /**
     * Default constructor made private. Cannot be instantiated outside
     */
    private function __construct() {

    }

    /**
     * A static function that returns only one instance of the Preference class
     * @return object
     */
    public static function getInstance() {
        //if Preference class not been instantiated already, create an instance
        //and return
        if(empty(static::$instance)) {
            static::$instance = new Preference();
        }

        return static::$instance;
    }


    /**
     * Sets preference to array using unique key and a corresponding value
     * @param $key string
     * @param $value string
     * 
     */
    public function setProperty($key, $value) {
        $this->props[$key] = $value;
    }

    /**
     * Gets the value of a preference using the key
     * @param $key string
     * @return string
     */
    public function getProperty($key) {
        return $this->props[$key];
    }
}