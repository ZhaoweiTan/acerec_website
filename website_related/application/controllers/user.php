<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(E_ALL);


class User extends CI_Controller {
    function __construct()
    {
        parent::__construct();

    }
	public function loginpage()
	{
        $head_data=array(
            'title'=>'Login | Academic Paper Recommendation',
            'nav_title'=>'5'
        );
		
		$this->load->view('ext/header',$head_data);
        $this->load->view('user/loginpage',$head_data);
        $this->load->view('ext/footer');

    }
    public function register()
    {
        $head_data=array(
            'title'=>'Sign In | Academic Paper Recommendation',
            'nav_title'=>'6'
        );

        $this->load->view('ext/header',$head_data);
        $this->load->view('user/register',$head_data);
        $this->load->view('ext/footer');

    }
    public function logresult(){
        $head_data=array(
            'title'=>'Login Result'
        );

        //LOGIN
        $account=$_POST['username'];
        $password=$_POST['password'];


        $query = $this->db->query("SELECT * FROM users WHERE account=?",array($account));
        $result=$query->result_array();
        $result=$result[0];

        if(!empty($result)){
            if($result['password']==$password){
                $_SESSION['log_status']=2;//Logged successfully!
                $_SESSION['username']=$account;
                $_SESSION['info']='<h1>Thank you!</h1><h1>You have been successfully logged in!</h1>';
            }
            else{
                $_SESSION['log_status']=1;
                $_SESSION['info']='<h1>sorry!</h1><h1>Your username or password is incorrect</h1>';
            }
        }
        else{
            $_SESSION['log_status']=0;
            $_SESSION['info']='<h1>sorry!</h1><h1>Your username or password is incorrect</h1>';
        }
        ///////////////////////////////

        //index

        $this->load->view('ext/header',$head_data);
        $this->load->view('user/logResult',$head_data);
        $this->load->view('ext/footer',$head_data);

    }

    public function registerresult(){
        $head_data=array(
            'title'=>'Result of Registration'
        );

        //Register Result

        if(isset($_POST['username'])
            &&isset($_POST['email'])
            &&isset($_POST['password'])
            &&isset($_POST['diploma'])
            &&isset($_POST['name'])
        ){
            $account=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $confirmPassword=$_POST['password-confirm'];
            $name=$_POST['name'];
            $diploma=$_POST['diploma'];
            $institution=$_POST['institution'];


            $query = $this->db->query("SELECT * FROM users WHERE account=?",array($account));
			$result = $query->result_array();
            if (!empty($result)) {
                $_SESSION['reg_status']=1;//There exists this account
                $_SESSION['info']='<h1>Sorry</h1><h2>There is the same account.</h2>';
            }
            else {
                $this->db->query("INSERT INTO users (account,password,name,diploma,email,institution) VALUES
                    (?,?,?,?,?,?)",array($account,$password,$name,$diploma,$email,$institution));

                $_SESSION['reg_status']=2;//registered successfully.
                $_SESSION['info']='<h1>Thank you</h1><h2>Welcome to Acemap! Please login.</h2>';
            }

        }
        else{
            $_SESSION['reg_status']=3;//There are some compulsory information not filled.
            $_SESSION['info']='<h1>Sorry</h1><h2>Some infomation is required.</h2>';
        }

        /*************Separate*****Line******************/

        //index

        $this->load->view('ext/header',$head_data);
        $this->load->view('/user/registerResult',$head_data);
        $this->load->view('ext/footer',$head_data);

    }
    public function logout(){
        $head_data=array(
            'title'=>'Logout',
            'nav_title'=>'5'
        );
        session_destroy();
        $this->load->view('ext/header',$head_data);
        $this->load->view('/user/logout',$head_data);
        $this->load->view('ext/footer',$head_data);

    }
}

