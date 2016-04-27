<?php
class Connect{
    public  $connect;
    public  $hostname="localhost";
    public  $username="root";
    public  $password="";
    public  $dbname="icampus";
    public  $sqlStudent;
    public  $resultStudent;
    public function __construct(){
       //$connect=$this->connect;
       $hostname=$this->hostname;
       $username=$this->username;
       $password=$this->password;
       $dbname=$this->dbname;
       $errorMessage=$this->errorMessage;
       $this->connect=mysql_connect($hostname,$username,$password);
        if($this->connect){
            $dbSelect=mysql_select_db($this->dbname);
        }
        else{
            $this->errorMessage="Connection Failed".mysql_error();
            return false;
        }
    }
    public function liststudents(){
        $sqlStudent="SELECT * FROM students;";
        $resultStudent=mysql_query($sqlStudent);
        $fetchStudent=mysql_fetch_array($resultStudent,MYSQL_ASSOC);
        return $fetchStudent;
    }
    public function __destruct(){
        mysql_close($this->connect);
    }
}
$obj=new Connect();
$list=$obj->liststudents();
echo "<pre>";print_r($list);exit;
?>