<?php
/**
 * Created by PhpStorm.
 * User: mverh
 * Date: 5-2-2019
 * Time: 12:51
 */
class Customer
{
    public $FirstName;
    public $LastName;
    public $Postcode;
    public $StreetName;
    public $HouseNumber;
    public $City;
    public $Country;
    public $PhoneNumber;
    public $Email;

    public $LastSale;
    public $NewsLetter;
}

class Car{
    public $Brand;
    public $Type;
    public $Color;
    public $NumberPlate;
    public $APK;
}

$Customer1 = new Customer();
$Customer1->FirstName = 'Henk';
$Customer1->LastName = 'Verschoor';
$Customer1->Postcode = '0000 AA';
$Customer1->StreetName = 'StormStraat';
$Customer1->HouseNumber = '11';
$Customer1->City = 'Rotterdam';
$Customer1->Country = 'Nederland';
$Customer1->PhoneNumber = '06 12345678';
$Customer1->Email = 'h.verschoor@gmail.com';

$Customer1->LastSale = '01-01-2019';
$Customer1->NewsLetter = 'Yes';

$Car1 = new Car();
$Car1->Brand = 'Audi';
$Car1->Type = 'R8';
$Car1->Color = 'Antraciet Grijs';
$Car1->NumberPlate = '11-AA-11';
$Car1->APK = '01-01-2023';

var_dump($Customer1, $Car1);

$Customer2 = new Customer();
$Customer2->FirstName = 'Klaas';
$Customer2->LastName = 'Visser';
$Customer2->Postcode = '1111 BB';
$Customer2->StreetName = 'Watermolen';
$Customer2->HouseNumber = '22';
$Customer2->City = 'Ridderkerk';
$Customer2->Country = 'Nederland';
$Customer2->PhoneNumber = '06 87654321';
$Customer2->Email = 'k.visser@gmail.com';

$Customer2->LastSale = '02-02-2019';
$Customer2->NewsLetter = 'No';

$Car2 = new Car();
$Car2->Brand = 'Nissan';
$Car2->Type = 'Cube';
$Car2->Color = 'Creme Wit';
$Car2->NumberPlate = '22-BB-22';
$Car2->APK = '02-02-2023';

var_dump($Customer2, $Car2);
?>


<?php
echo '<br />';
echo 'Voornaam: ' . $Customer1->FirstName . '<br />' ;
echo 'Achternaam: ' . $Customer1->LastName . '<br />' ;
echo 'Postcode: ' . $Customer1->Postcode . '<br />' ;
echo 'Straatnaam: ' . $Customer1->StreetName . '<br />' ;
echo 'Huisnummer: ' . $Customer1->HouseNumber . '<br />' ;
echo 'Stad: ' . $Customer1->City . '<br />' ;
echo 'Land: ' . $Customer1->Country . '<br />' ;
echo 'Telefoonnummer: ' . $Customer1->PhoneNumber . '<br />' ;
echo 'E-mail Adres: ' . $Customer1->Email . '<br />' ;


echo 'Merk: ' . $Car1->Brand . '<br />' ;
echo 'Model: ' . $Car1->Type . '<br />' ;
echo 'Kleur: ' . $Car1->Color . '<br />' ;
echo 'Kenteken: ' . $Car1->NumberPlate . '<br />' ;

echo '<hr />';

echo 'Voornaam: ' . $Customer2->FirstName . '<br />' ;
echo 'Achternaam: ' . $Customer2->LastName . '<br />' ;
echo 'Postcode: ' . $Customer2->Postcode . '<br />' ;
echo 'Straatnaam: ' . $Customer2->StreetName . '<br />' ;
echo 'Huisnummer: ' . $Customer2->HouseNumber . '<br />' ;
echo 'Stad: ' . $Customer2->City . '<br />' ;
echo 'Land: ' . $Customer2->Country . '<br />' ;
echo 'Telefoonnummer: ' . $Customer2->PhoneNumber . '<br />' ;
echo 'E-mail Adres: ' . $Customer2->Email . '<br />' ;

echo 'Merk: ' . $Car2->Brand . '<br />' ;
echo 'Model: ' . $Car2->Type . '<br />' ;
echo 'Kleur: ' . $Car2->Color . '<br />' ;
echo 'Kenteken: ' . $Car2->NumberPlate . '<br />' ;

?>
