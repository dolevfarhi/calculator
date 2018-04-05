<?php
class Calculator{
 
    public $num1;
    public $num2;
    public $num3; 
    public $func;

    public function __construct(){
        $this->test();
    }

    public function test (){

        if(isset($_GET['num1'])) $num1= (int)$_GET['num1'];
        else if (isset($_POST['num1'])) $num1= (int)$_POST['num1'];
        elseif (isset($post_vars['num1'])) $num1= (int)$post_vars['num1'];   
        else $num1 = 0;  
         
        if(isset($_GET['num2'])) $num2= (int)$_GET['num2'];
        else if (isset($_POST['num2'])) $num2= (int)$_POST['num2'];
         elseif (isset($post_vars['num2'])) $num2= (int)$post_vars['num2']; 
        else $num2 = 0; 

        if(isset($_GET['num3'])) $num3= (int)$_GET['num3'];
        else if (isset($_POST['num3'])) $num3= (int)$_POST['num3'];
         elseif (isset($post_vars['num3'])) $num3= (int)$post_vars['num3']; 
        else $num3 = 0; 

        if(isset($_GET['func'])) $func= $_GET['func'];
        else if (isset($_POST['func'])) $func= $_POST['func'];
        elseif (isset($post_vars['func'])) $func= $post_vars['func']; 
        else $func = 0;

        $this->func($func , $num1, $num2 ,$num3);

    }

    public function func($func, $num1 , $num2 , $num3){

        if ( $func == "sum"){
            $retVal= $num1 + $num2 + $num3;
            $array= array('retVal' =>$retVal);
            header('Content-Type: application/json');
            echo json_encode($array);
        }

        if ($func == "mult"){
            $retVal= $num1 * $num2 * $num3;
            $array= array('retVal' =>$retVal);
            header('Content-Type: application/json');
            echo json_encode($array);
        }


        if ($func == "avg"){
            $retVal= ($num1 + $num2 + $num3)/3;
            $array= array('retVal' =>$retVal);
            header('Content-Type: application/json');
            echo json_encode($array);
        }
    }
}     


$Calculator = new Calculator;
?>        