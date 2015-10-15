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
        $q = $_GET["q"];

        $result2=$this->db->query('SELECT * FROM conference WHERE Shortname LIKE ? limit 5',array('%'.$q.'%'));
        $result2=$result2->result_array();
        $result3=$this->db->query('SELECT * FROM author WHERE Name LIKE ? LIMIT 5',array('%'.$q.'%'));
        $result3=$result3->result_array();

        $sendBack = '';

        foreach($result2 as $row){
            $sendBack = $sendBack. "{label:'" . $row['ShortName'] .
                "',title:'" . $row['FullName'] .
                "',category:'Conference'};";
        }

        foreach ($result3 as $row){
            $sendBack = $sendBack. "{label:'" . $row['Name'] .
                "',title:'" . $row['Homepage'] .
                "',category:'Author'};";
        }

        echo $sendBack;


    }
}