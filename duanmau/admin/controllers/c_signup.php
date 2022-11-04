<?php

class c_signup {
    public function __construct()
    {
    }
    public function c_signup() {
        include ("models/m_signup.php");
        $m_signup = new m_signup();
        $m_signup = $m_signup->read_signup();

        $view = "views/signup/v_signup.php";
        include ("templates/layout.php");
    }
}