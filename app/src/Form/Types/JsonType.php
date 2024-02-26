<?php 
namespace App\Form\Types;
use Symfony\Component\Form\DataTransformerInterface;

class JsonType implements DataTransformerInterface{
 
public function reverseTransform($value):array {

  
    if(empty($value)){
       
        return [];
    }
    return explode(",",$value);
}

public function transform($value):string {

    if(empty($value)){
        return "";
    }
    return implode(",",$value);
}

}