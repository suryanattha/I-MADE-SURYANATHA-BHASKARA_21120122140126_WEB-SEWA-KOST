<?php 
class Sewa{ 
 private string $name; 

 //method//
 public function getName(): string 
 { 
 return $this->name; 
 } 
 public function setName(string $name): void  { 
 $this->name = $name; 
 } 
}
