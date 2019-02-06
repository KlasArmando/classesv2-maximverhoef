<?php
/**
 * Created by PhpStorm.
 * User: mverh
 * Date: 5-2-2019
 * Time: 12:38
 */
class Person{
    public $name;
    public $age;
}

$person1 = new Person();
$person1->name = 'Henk';
$person1->age = 22;

var_dump($person1);

$person2 = new Person();
$person2->name = 'Piet';
$person2->age = 18;

var_dump($person2);

?>