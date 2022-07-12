<?php
namespace app1\test1;

class ResponseProcessing
{

private ?string $color=null;
private ?string $backgroundcolor=null;
private ?int $size=null;

    
    public function SetColor(?string $tmp): void
    {
    $this->color=$tmp;
    }
    
    public function SetBackgroundcolor(?string $tmp): void
    {
    $this->backgroundcolor=$tmp;
    }
    
    public function SetSize(?int $tmp): void
    {
    $this->size=$tmp;
    }
    
    public function GetHtml(array $tmp): string
    {
    
    $t=null;
    
    if (!is_null($this->color)){$t.='color:'.$this->color.';';}
    if (!is_null($this->backgroundcolor)){$t.='background-color:'.$this->backgroundcolor.';';}
    if (!is_null($this->size)){$t.='font-size:'.$this->size.'px;';}
    
    //if exist style
    if (!is_null($t)){$t=" style=\"$t\"";}
    
        //create html
        $t="<span$t>";
        
        //htmlspecialchars value array
        array_walk($tmp, function(&$item1){$item2=htmlspecialchars($item1,ENT_QUOTES);});
        $t.=$this->Processing($tmp,'<br />');
        
        $t.='</span>';
    
    return $t;
    
    }
    
    public function GetPlain(array $tmp): string
    {
    
    $tmp=$this->Processing($tmp,"\r\n");

    return $tmp;
    
    }
    
    private function Processing(array $tmp, string $separation): string
    {
    
    //$t=null;    
    //foreach($tmp as $value){
    //$t.="$value";
    ////if exist next element
    //if (next($tmp)==true) $t.=$separation;
    //}
    //return $t;
    
    //array to string
    return implode($separation,$tmp);
    
    }
    
}






?>
