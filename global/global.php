<?php
session_start();
    function conexao(){
    return new PDO("mysql:host=127.0.0.1:3307;dbname=mercadin", "root", "usbw");
  }