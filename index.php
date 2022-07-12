<?php


namespace app1\test1;

spl_autoload_register(function ($class_name) {
    $class_name=explode('\\',$class_name);
    $class_name=end($class_name);
    include './classes/'.$class_name . '.php';
});




$obiekt=new validation();
$obiekt->SexAdd('male');
$obiekt->NameAdd('Jan');
$obiekt->SurnameAdd('Brzechwa');
$obiekt->EmailAdd('email@email.pl');
$obiekt->CompanynameAdd('');
$obiekt->StreetAdd('Ulica');
$obiekt->HouseAdd('1');
$obiekt->FlatAdd('2');
$obiekt->PostalcodeAdd('00-000');
$obiekt->CityAdd('Kielce');
$obiekt->StateAdd('Świętokrzyskie');
$obiekt->CountryAdd('Polska');
if ($obiekt->Verification()===true){


echo $obiekt->Response('green','white',12).'<br />';

echo '<strong>Sex</strong> '.htmlspecialchars($obiekt->SexGet(), ENT_QUOTES)."<br \>";
if (!is_null($obiekt->NameGet())){echo '<strong>Name</strong> '.htmlspecialchars($obiekt->NameGet(), ENT_QUOTES)."<br \>";}
if (!is_null($obiekt->SurnameGet())){echo '<strong>Surname</strong> '.htmlspecialchars($obiekt->SurnameGet(), ENT_QUOTES)."<br \>";}
echo '<strong>E-mail</strong> '.htmlspecialchars($obiekt->EmailGet(), ENT_QUOTES)."<br \>";
if (!is_null($obiekt->CompanynameGet())){echo '<strong>Company</strong> '.htmlspecialchars($obiekt->CompanynameGet(), ENT_QUOTES)."<br \>";}
if (!is_null($obiekt->StreetGet())){echo '<strong>Street</strong> '.htmlspecialchars($obiekt->StreetGet(), ENT_QUOTES)."<br \>";}
echo '<strong>House</strong> '.htmlspecialchars($obiekt->HouseGet(), ENT_QUOTES)."<br \>";
if (!is_null($obiekt->FlatGet())){echo '<strong>Flat</strong> '.htmlspecialchars($obiekt->FlatGet(), ENT_QUOTES)."<br \>";}
echo '<strong>Postalcode</strong> '.htmlspecialchars($obiekt->PostalcodeGet(), ENT_QUOTES)."<br \>";
echo '<strong>City</strong> '.htmlspecialchars($obiekt->CityGet(), ENT_QUOTES)."<br \>";
if (!is_null($obiekt->StateGet())){echo '<strong>State</strong> '.htmlspecialchars($obiekt->StateGet(), ENT_QUOTES)."<br \>";}
echo '<strong>Country</strong> '.htmlspecialchars($obiekt->CountryGet(), ENT_QUOTES)."<br \>";


}else{

echo $obiekt->Response('red','white',null);

}












?>
