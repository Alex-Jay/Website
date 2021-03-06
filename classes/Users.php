<?php
/**
 * Description of users
 *
 * @author Jordan
 */
class Users 
{
    private $id, $user_name, $user_password, $user_email, $reg_date;
    
    function __construct($id, $user_name, $user_password, $user_email, $reg_date) 
    {
        $this->id = $id;
        $this->user_name = $user_name;
        $this->user_password = $user_password;
        $this->user_email = $user_email;
        $this->reg_date = $reg_date;
    }
    
    function getId() 
    {
        return $this->id;
    }

    function getUser_name() 
    {
        return $this->user_name;
    }

    function getUser_password() 
    {
        return $this->user_password;
    }

    function getUser_email() 
    {
        return $this->user_email;
    }

    function getReg_date() 
    {
        return $this->reg_date;
    }

    function setId($id) 
    {
        $this->id = $id;
    }

    function setUser_name($user_name) 
    {
        $this->user_name = $user_name;
    }

    function setUser_password($user_password) 
    {
        $this->user_password = $user_password;
    }

    function setUser_email($user_email) 
    {
        $this->user_email = $user_email;
    }

    function setReg_date($reg_date) 
    {
        $this->reg_date = $reg_date;
    }

    public function __toString()
    {
        return "ID: $this->id + "
                . "\nName: $this->user_name +"
                . "\nPassword: $this->user_name +"
                . "\nUser Email: $this->user_email +"
                . "\nReg Date: $this->reg_date + \n";
    }


            
}
