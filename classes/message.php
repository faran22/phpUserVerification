<?php
namespace app1\test1;

class message
{

private static array $messages=[
'Sex is empty'=>array(
    '\validation Sex'
    ),
    
'The e-mail address is incorrect'=>array(
    '\validation E-mail'
    ),
    
'House is empty'=>array(
    '\validation House'
    ),
    
'Postal code is empty'=>array(
    '\validation Postal code'
    ),
    
'City is empty'=>array(
    '\validation City'
    ),
    
'Country is empty'=>array(
    '\validation Country'
    ),
    
'Street is empty'=>array(
    '\validation Street'
    ),
    
'State is empty'=>array(
    '\validation State'
    ),
    
'is empty'=>array(
    '\validation Name',
    '\validation Street'
    ),

'Company name or Name,Surnama empty'=>array(
'\validation Verification $message1'
),

'Country or state is wrong'=>array(
'\validation Verification $message2'
),

'Success'=>array(
'\validation Verification $message3'
)

];

    public static function message_display(string $tmp): ?string
    {
        return self::get($tmp);
    }
    
    public static function message_error(string $tmp): string
    {
    
        if (is_null(self::get($tmp))){return 'empty';}
        return self::get($tmp);
        
    }
    
    /* get message */
    private static function get(string $tmp): ?string
    {
        //delete namespace
        $tmp=substr($tmp, strlen(__NAMESPACE__));
    
        foreach(self::$messages as $key=>$value){
        if (in_array($tmp, $value)) {return $key;}
        }
        
        return null;
    
    }


}

?>
