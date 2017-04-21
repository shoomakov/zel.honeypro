<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
  public function strpos_recursive($haystack, $needle, $offset = 0, &$results = array()) {
    $offset = strpos($haystack, $needle, $offset);
    if($offset === false) {
      return $results;
    } else {
      $results[] = $offset;
      return $this->strpos_recursive($haystack, $needle, ($offset + 1), $results);
    }
  }

  public function check_exist($fileName, $search) {
    $string = file_get_contents($fileName);
    $found = $this->strpos_recursive($string, $search); // put email in search

    //var_dump($found);
    if($found) {
      foreach($found as $pos) {
        return true;
      }
    } else {
      return false;
    }
  }

  public function put() {
    if($_POST){

      $fileName = '../storage/newslatter.txt'; //set 777 permision for this file.
      $error = false;

      $email = $_POST['email'];

      if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
          $error = true;

      //If all ok, save emali adress in file
      if($error == false){
        if ($this->check_exist($fileName, $email) == true) {
          echo "STRING EXISTS";
        } else {
          $file = fopen($fileName, "a");
          fwrite($file, "$email,");
          fclose($file);
          echo 'OK';
        }
      }
    }
  }

}
