<?php 
require_once("config.php");
use PHPUnit\Framework\TestCase; 
  
class test extends TestCase
{ 
    public function testPositiveTestcaseForAssertEquals() 
    { 
        $connect = mysqli_connect("localhost","root","","chobiwala");
        $query = "SELECT * FROM single_photo_sold";
        $result = mysqli_query($connect,$query);
        $actual = mysqli_num_rows($result);
  
        // Assert function to test whether testArray contains 
        // same number of elements as expectedCount 
        $expectedCount = 4; 
  
        $this->assertEquals( 
            $expectedCount, 
            $actual, "pic order contains 4 elements"
        ); 
    } 
} 
  
?> 