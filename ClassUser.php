<?php
//NOT USING
  class User {
    private $name;
    private $username;
    private $password;

    function __construct($name, $username, $password) {
      $this->name = $name;
      $this->username = $username;
      $this->password = $password;
    }
    function get_name() {
      return $this->name;
    }
    function get_username() {
      return $this->username;
    }
    function get_password() {
      return $this->password;
    }
  }
?>