<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class registerResult extends CI_Controller{
    public function index(){
        $head_data=array(
            'title'=>'Result of Registration'
        );
        $this->load->view('ext/header',$head_data);
        //Register Result

        if(isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['password-confirm'])&&isset($_POST['diploma'])&&isset($_POST['name'])){
            $account=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $confirmPassword=$_POST['password-confirm'];
            $name=$_POST['name'];
            $diploma=$_POST['diploma'];

            if($password!=$confirmPassword){
                $_SESSION['reg_status']=0;//The password is not confirmed.
            }
            else{
                $this->load->database();
                $query = $this->db->query("SELECT * FROM users WHERE account='$account'");
                if ($query->result()) {
                    $_SESSION['reg_status']=1;//There exists this account

                }
                else {

                    $this->db->query("INSERT INTO users (account,password,name,diploma) VALUES ('$account','$password','$name','$diploma')");

                    $_SESSION['reg_status']=2;//registered successfully.
                    $_SESSION['log_status']=2;//logged successfully
                    $_SESSION['username']=$account;
                }
            }
        }
        else{
            $_SESSION['reg_status']=3;//There are some compulsory information not filled.
        }

        /*************Separate*****Line******************/

        //index


        $this->load->view('registerResult',$head_data);
        $this->load->view('ext/footer',$head_data);

    }

}