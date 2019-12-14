<?php

namespace weDeves\Product;
class Product{
    public $Id = "";
    public $Name = "";
    public $Slug = "";
    public $Description = "";
    public $Price = "";
    public $data = [];
    public $con = "";

    public function __construct(){
    	session_start();
        $this->con = mysqli_connect("localhost", "root", "","test");

    }

    public function prepare($data = ''){
        if(array_key_exists('Name',$data)){
            $this->Name = $data['Name'];
        }
        if(array_key_exists('Slug',$data)){
            $this->Slug = $data['Slug'];
        }
        if(array_key_exists('Description',$data)){
            $this->Description = $data['Description'];
        }
        if(array_key_exists('Price',$data)){
            $this->Price = $data['Price'];
        }
        if(array_key_exists('Id',$data)){
            $this->Id = $data['Id'];
        }
        return $this;
    }

    public function store(){
		$st = $this->con->prepare("insert into products (Name, Slug, Description, Price) values(?,?,?,?)");

		 $st->bind_param("ssss", $this->Name, $this->Slug , $this->Description, $this->Price);
		
		if($st->execute()){
                $_SESSION['msg'] = '<h3><font color="green">'."Successfully Added...".'</font></h3>';
                header("location: index.php");
            }else{
                $_SESSION['msg'] = '<h3><font color="red">'."Error While Added...".'</font></h3>';
                header("location: index.php");
            }

         return $this;
    }

    public function index(){

    	$st=$this->con->prepare("SELECT * FROM products");
		$st->execute();
		$rs=$st->get_result();
		 while ($row=$rs->fetch_assoc()) {
		 	$this->data[]= $row;
		 }

		 return $this->data;
    }

    public function edit(){
    	$st = $this->con->prepare("SELECT * FROM products WHERE Id =?");
    	 $st->bind_param("d", $this->Id);
        $st->execute();
		$rs=$st->get_result();
		 $row=$rs->fetch_assoc();
		 return $row;
		 // return $this;
    }

    public function update(){
    	$st1 = $this->con->prepare("UPDATE  products SET Name=?, Slug=?, Description=?, Price=?  WHERE Id=?");

		 $st1->bind_param("ssssi", $this->Name, $this->Slug , $this->Description, $this->Price, $this->Id);
		
		if($st1->execute()){
                $_SESSION['msg'] = '<h3><font color="green">'."Successfully Updated...".'</font></h3>';
                header("location: index.php");
            }else{
                $_SESSION['msg'] = '<h3><font color="red">'."Error While Update...".'</font></h3>';
                header("location: index.php");
            }

    }

    public function delete(){
    	$st2 = $this->con->prepare("DELETE FROM  products  WHERE Id=?");
    	$st2->bind_param("i", $this->Id);
        
        if($st2->execute()){
                $_SESSION['msg'] = '<h3><font color="green">'."Successfully Deleted...".'</font></h3>';
                header("location: index.php");
            }else{
                $_SESSION['msg'] = '<h3><font color="red">'."Error While Delete...".'</font></h3>';
                header("location: index.php");
            }

        
    }
}
?>