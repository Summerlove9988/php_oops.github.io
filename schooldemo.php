<?php

abstract class teacher_info
{
    protected $name, $sex, $phone, $email;

    protected abstract function set_details($name, $sex, $phone, $email);
}

class teacher extends teacher_info
{
    function set_details($name, $sex, $phone, $email)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->phone = $phone;
        $this->email = $email;
    }

    function get_details()
    {
        echo $this->name . "<br>";
        echo $this->sex . "<br>";
        echo $this->phone . "<br>";
        echo $this->email . "<br>";
    }
}

$a = new teacher();
$a->set_details('Ajay', 'Male', '9875', 'aj@mail.com');
$a->get_details();

?>
