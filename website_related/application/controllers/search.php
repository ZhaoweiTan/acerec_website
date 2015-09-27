<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/4
 * Time: 13:20
 */


class search extends CI_Controller{
    public  function index()
    {
        $keywordajax = $_GET["q"];


        $mysqli = new mysqli("localhost", "acemap", "xwang8", "acemap");
        //$mysqli = new mysqli("localhost", "root", "", "acemap");
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }

        //$res = $mysqli->query("SELECT * FROM author WHERE Name LIKE \"%" . urlencode($keyword2) ."%\"");
        $result2 = $mysqli->query("SELECT * FROM conference WHERE  Shortname LIKE \"" . $keywordajax ."%\""." LIMIT 5");
        $result3 = $mysqli->query("SELECT * FROM author WHERE Name LIKE \"" . $keywordajax ."%\" LIMIT 5");

        $sendBack = '';

        for ($row_no =  $result2->num_rows-1; $row_no >= 0; $row_no--) {
            $result2->data_seek($row_no);
            $row = $result2->fetch_assoc();
            $sendBack = $sendBack. "{label:'" . $row['ShortName'] . "',title:'" . $row['FullName'] . "',category:'Conference'};";
        }

        for ($row_no = $result3->num_rows-1; $row_no >=0; $row_no--) {
            $result3->data_seek($row_no);
            $row = $result3->fetch_assoc();
            $sendBack = $sendBack. "{label:'" . $row['Name'] . "',title:'" . $row['Homepage'] . "',category:'Author'};";
        }


        echo $sendBack;


    }
}