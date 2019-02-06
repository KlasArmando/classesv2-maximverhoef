<?php
/**
 * Created by PhpStorm.
 * User: mverh
 * Date: 6-2-2019
 * Time: 09:41
 */
class Product{
    public $Name;
    public $Price;

    public function __construct( $Name, $Price)
    {
        $this->Name = $Name;
        $this->Price = $Price;
    }
}
class Customer{
    public $FirstName;
    public $LastName;
    public $Age;
    public $CustomerID;
    public function  __construct( $FirstName, $LastName,  $Age, $CustomerID)
    {
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->Age = $Age;
        $this->CustomerID = $CustomerID;
    }
}

$Product1 = new Product( 'Asus RTX 2080 Ti Turbo', '€ 1.280,00');
echo 'Product naam: ' . $Product1->Name . '<br />';
echo 'Prijs: ' . $Product1->Price . '<br />';
echo '<hr />';
$Customer1 = new Customer('Jan', 'Visser', '66', '1');
echo 'Voornaam: ' . $Customer1->FirstName . '<br />';
echo 'Achternaam: ' . $Customer1->LastName . '<br />';
echo 'Leeftijd: ' . $Customer1->Age . '<br />';
echo 'Klantnummer: ' . $Customer1->CustomerID . '<br />';

?>