<!-- Problem Stmt10 : Demonstrate use of instanceof  Operator  -->

<?php
    class student{
        public function Hello(){
            echo"Hello student";
        }
    }

    $s1 = new student();

    if($s1 instanceof student){
        //here escape character is used to prevent interpretation as PHP variable
        echo "\$s1 is an instance of student class";
    }
    else{
        echo "\$s1 is not an instance of student class";
    }

?>