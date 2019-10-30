<?php

//require the preference file
//use the namespace

//get instance of the Preference class
$pref = Preference::getInstance();

//set name and age properties
$pref->setProperty('name', 'Francis');
$pref->setProperty('age', '23');

//display the name property
echo $pref->getProperty('name'); //Francis

//delete this instance
unset($pref);

//create a new instance
$pref2 = Preference::getInstance();

//display the name
echo $pref2->getProperty('name'); //Francis