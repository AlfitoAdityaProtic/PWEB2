<!DOCTYPE html>
<html>
<body>

<?php
// __CLASS__
class Fruits {
  public function myValue(){
    return __CLASS__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();

// __FUNCTION__
function myValue(){
    return __FUNCTION__;
  }
  echo myValue();

// __LINE__
echo __LINE__;

// __METHOD__
class Fruits2 {
    public function myValue(){
      return __METHOD__;
    }
  }
  $kiwi = new Fruits2();
  echo $kiwi->myValue();

   // __TRAIT__
   trait message1 {
    public function msg1() {
      echo __TRAIT__; 
    }
  }
  
  class Welcome {
    use message1;
  }
  
  $obj = new Welcome();
  $obj->msg1();


// __NAMESPACE__
//   namespace myArea;

// function myValue(){
//     return __NAMESPACE__;
// }
//   echo myValue();
?>
</body>
</html>