<?php
namespace app1\test1;

class validation Implements InterfaceResponse
{

/* customer data */
private array $array1=['Sex','Name','Surname','E-mail','Company name','Street','House','Flat','Postal code','City','State','Country'];

/* Verification array */
private array $response;

/* object response */
private $objResponse;

    public function __construct()
    {
    $this->objResponse=new ResponseProcessing();
    
    //array_filter($this->array1, function($v, $k) {echo "$v $k";}, ARRAY_FILTER_USE_BOTH);
    array_filter($this->array1, function($v){
    
    //delete first element
    array_shift($this->array1);
    
    //create array element
    $this->array1[$v]=array(
    'message'=>message::message_error(get_class().' '.$v),
    'value'=>null
    );
    
    });
    
    }
    
    public function SexAdd(string $tmp): bool
    {
    $tmp=$this->process($tmp);
    
    $this->array1['Sex']['value']=null;
    $this->array1['Sex']['message']=null;
    
    if (!($tmp=='male' || $tmp=='female')){
    $this->array1['Sex']['message']=message::message_error(get_class().' Sex');
    return false;
    }
    
    $this->array1['Sex']['value']=$tmp;
    return true;
    }    
    
    public function NameAdd(string $tmp): bool
    {
    $tmp=$this->process($tmp);
    
    $this->array1['Name']['value']=null;
    $this->array1['Name']['message']=null;
    
    if (strlen($tmp)<2 || strlen($tmp)>100 || !preg_match("/^[a-z-ąćęłńóśżźĄĆĘŁŃÓŚŻŹ' ]*$/i",$tmp)){
    $this->array1['Name']['message']=message::message_error(get_class().' Name');
    return false;
    }
    
    $this->array1['Name']['value']=$tmp;
    return true;
    }
    
    public function SurnameAdd(string $tmp): bool
    {
    $tmp=$this->process($tmp);
    
    $this->array1['Surname']['value']=null;
    $this->array1['Surname']['message']=null;
    
    if (strlen($tmp)<2 || strlen($tmp)>100 || !preg_match("/^[a-z-ąćęłńóśżźĄĆĘŁŃÓŚŻŹ' ]*$/i",$tmp)){
    $this->array1['Surname']['message']=message::message_error(get_class().' Surname');
    return false;
    }
    
    $this->array1['Surname']['value']=$tmp;
    return true;
    }    
    
    public function EmailAdd(string $tmp): bool
    {
    $tmp=$this->process($tmp);
    
    $this->array1['E-mail']['value']=null;
    $this->array1['E-mail']['message']=null;
    
    if (!filter_var($tmp, FILTER_VALIDATE_EMAIL)){
    $this->array1['E-mail']['message']=message::message_error(get_class().' E-mail');
    return false;
    }
    
    $this->array1['E-mail']['value']=$tmp;
    return true;
    }
    
    public function CompanynameAdd(string $tmp): bool
    {
    $tmp=$this->process($tmp);
    
    $this->array1['Company name']['value']=null;
    $this->array1['Company name']['message']=null;
    
    if (strlen($tmp)<2 || strlen($tmp)>100 || !preg_match("/^[[:punct:]0-9a-ząćęłńóśżźĄĆĘŁŃÓŚŻŹ ]*$/i",$tmp)){
    $this->array1['Company name']['message']=message::message_error(get_class().' Company name');
    return false;
    }
    
    $this->array1['Company name']['value']=$tmp;
    return true;
    }
    
    public function StreetAdd(string $tmp): bool
    {
    $tmp=$this->process($tmp);
    
    $this->array1['Street']['value']=null;
    $this->array1['Street']['message']=null;
    
    if (strlen($tmp)<2 || strlen($tmp)>200 || !preg_match("/^[0-9a-z-ąćęłńóśżźĄĆĘŁŃÓŚŻŹ' ]*$/i",$tmp)){
    $this->array1['Street']['message']=message::message_error(get_class().' Street');
    return false;
    }
    
    $this->array1['Street']['value']=$tmp;
    return true;
    }
    
    public function HouseAdd(string $tmp): bool
    {
    $tmp=$this->process($tmp);
    
    $this->array1['House']['value']=null;
    $this->array1['House']['message']=null;
    
    if (strlen($tmp)<1 || strlen($tmp)>50 || !preg_match("/^[0-9a-z-ąćęłńóśżźĄĆĘŁŃÓŚŻŹ\/ ]*$/i",$tmp)){
    $this->array1['House']['message']=message::message_error(get_class().' House');
    return false;
    }
    
    $this->array1['House']['value']=$tmp;
    return true;
    }
    
    public function FlatAdd(string $tmp): bool
    {
    $tmp=$this->process($tmp);
    
    $this->array1['Flat']['value']=null;
    $this->array1['Flat']['message']=null;
    
    if (strlen($tmp)<1 || strlen($tmp)>50 || !preg_match("/^[0-9a-z-ąćęłńóśżźĄĆĘŁŃÓŚŻŹ\/ ]*$/i",$tmp)){
    $this->array1['Flat']['message']=message::message_error(get_class().' Flat');
    return false;
    }
    
    $this->array1['Flat']['value']=$tmp;
    return true;
    }
    
    public function PostalcodeAdd(string $tmp): bool
    {
    $tmp=$this->process($tmp);
    
    $this->array1['Postal code']['value']=null;
    $this->array1['Postal code']['message']=null;
    
    if (strlen($tmp)<2 || strlen($tmp)>50 || !preg_match("/^[0-9a-z-ąćęłńóśżźĄĆĘŁŃÓŚŻŹ ]*$/i",$tmp)){
    $this->array1['Postal code']['message']=message::message_error(get_class().' Postal code');
    return false;
    }
    
    $this->array1['Postal code']['value']=$tmp;
    return true;
    }
    
    public function CityAdd(string $tmp): bool
    {
    $tmp=$this->process($tmp);
    
    $this->array1['City']['value']=null;
    $this->array1['City']['message']=null;
    
    if (strlen($tmp)<2 || strlen($tmp)>100 || !preg_match("/^[0-9a-z-ąćęłńóśżźĄĆĘŁŃÓŚŻŹ ]*$/i",$tmp)){
    $this->array1['City']['message']=message::message_error(get_class().' City');
    return false;
    }
    
    $this->array1['City']['value']=$tmp;
    return true;
    }
    
    public function StateAdd(string $tmp): bool
    {
    $tmp=$this->process($tmp);
    
    $this->array1['State']['value']=null;
    $this->array1['State']['message']=null;
    
    if (strlen($tmp)<2 || strlen($tmp)>100 || !preg_match("/^[0-9a-z-ąćęłńóśżźĄĆĘŁŃÓŚŻŹ' ]*$/i",$tmp)){
    $this->array1['State']['message']=message::message_error(get_class().' State');
    return false;
    }
    
    $this->array1['State']['value']=$tmp;
    return true;
    }
    
    public function CountryAdd(string $tmp): bool
    {
    $tmp=$this->process($tmp);
    
    $this->array1['Country']['value']=null;
    $this->array1['Country']['message']=null;
    
    //if (strlen($tmp)<2 || strlen($tmp)>50 || !preg_match("/^[0-9a-z-' ]*$/i",$tmp)){
    if (strlen($tmp)<2 || strlen($tmp)>50 || !preg_match("/^[0-9a-z-ąćęłńóśżźĄĆĘŁŃÓŚŻŹ' ]*$/i",$tmp)){
    $this->array1['Country']['message']=message::message_error(get_class().' Country');
    return false;
    }
    
    $this->array1['Country']['value']=$tmp;
    return true;
    }
    
    public function SexGet(): string
    {
    return $this->array1['Sex']['value'];
    }
    
    public function NameGet(): ?string
    {
    return $this->array1['Name']['value'];
    }
    
    public function SurnameGet(): ?string
    {
    return $this->array1['Surname']['value'];
    }
    
    public function EmailGet(): string
    {
    return $this->array1['E-mail']['value'];
    }
    
    public function CompanynameGet(): ?string
    {
    return $this->array1['Company name']['value'];
    }
    
    public function StreetGet(): ?string
    {
    return $this->array1['Street']['value'];
    }
    
    public function HouseGet(): string
    {
    return $this->array1['House']['value'];
    }
    
    public function FlatGet(): ?string
    {
    return $this->array1['Flat']['value'];
    }
    
    public function PostalcodeGet(): string
    {
    return $this->array1['Postal code']['value'];
    }
    
    public function CityGet(): string
    {
    return $this->array1['City']['value'];
    }
    
    public function StateGet(): ?string
    {
    return $this->array1['State']['value'];
    }
    
    public function CountryGet(): string
    {
    return $this->array1['Country']['value'];
    }
    
    public function Verification(): bool
    {
    
    $this->response=array();
    
    //Sex
    if (is_null($this->array1['Sex']['value'])){array_push($this->response, $this->array1['Sex']['message']);}
    
    //E-mail
    if (is_null($this->array1['E-mail']['value'])){array_push($this->response, $this->array1['E-mail']['message']);}
    
    //Street
    //if (is_null($this->array1['Street']['value'])){array_push($this->response, $this->array1['Street']['message']);}
    
    //House
    if (is_null($this->array1['House']['value'])){array_push($this->response, $this->array1['House']['message']);}
    
    //Postal code
    if (is_null($this->array1['Postal code']['value'])){array_push($this->response, $this->array1['Postal code']['message']);}
    
    //City
    if (is_null($this->array1['City']['value'])){array_push($this->response, $this->array1['City']['message']);}
    
    //Country
    if (is_null($this->array1['Country']['value'])){array_push($this->response, $this->array1['Country']['message']);}
    
    //if empty company name     and  Name or Surname
    if (is_null($this->array1['Company name']['value']) && (is_null($this->array1['Name']['value']) || is_null($this->array1['Surname']['value']))){
    array_push($this->response, message::message_display(get_class().' '.__FUNCTION__.' $message1'));
    }
    
    //if Country USA then exist state   or  Country outside
    ///if ( ($this->array1['Country']['value']=='usa' && is_null($this->array1['State']['value'])) || ($this->array1['Country']['value']!='usa' && !is_null($this->array1['State']['value'])) ){
    //array_push($this->response, message::message_display(get_class().' '.__FUNCTION__.' $message2'));
    //}
    if (is_null($this->array1['State']['value'])){array_push($this->response, $this->array1['State']['message']);}
    
    //if correct
    if (count($this->response)==0){
    array_push($this->response, message::message_display(get_class().' '.__FUNCTION__.' $message3'));
    return true;
    }
    
    return false;
    }

    
    public function Response(?string $color, ?string $backgroundcolor, ?int $size): string
    {
    
    //return $this->objResponse->GetPlain($this->response);
    
    $this->objResponse->SetColor($color);
    $this->objResponse->SetBackgroundcolor($backgroundcolor);
    $this->objResponse->SetSize($size);
    return $this->objResponse->GetHtml($this->response);
    
    }
    
    private function process(string $tmp): string
    {
    
    //if new data clear verification/error array
    if (!empty($this->response)){$this->response=array();}
    
    return trim(preg_replace('/[ ]+/', ' ', $tmp));
    
    }
    
}






//echo('<pre>');print_r(get_declared_classes());echo('</pre>');



?>
