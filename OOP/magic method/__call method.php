<?php

// class test
// {

//     private $fname;
//     private $lname;
//     private function setName($firstname, $lastname)
//     {
//         $this->fname = $firstname;
//         $this->lname = $lastname;
//     }

//     public function __call($method,$args){

//         echo "sorry this method private or non exists\n";
//         print_r($args);
//     }
// }


// $obj = new test();

// $obj->setName("ashik","ahmed");
?>


<?php

class person
{

    private $fname;
    private $lname;
    private function setName($firstname, $lastname)
    {
        $this->fname = $firstname;
        $this->lname = $lastname;
    }

    public function getName()
    {
        return $this->fname . " " . $this->lname;
    }

    public function __call($method, $args)
    {
        if (method_exists($this, $method)) {

            call_user_func_array([$this, $method], $args); // this method work like this $this->method($args)  here $args is array of parameter
        } else {
            echo "sorry dear this method: $method does not exists into\n";
            print_r($this);

        }
    }
}


$obj2 = new person();

$obj2->setName("ashik", "ahmed");
echo $obj2->getName();

?>


