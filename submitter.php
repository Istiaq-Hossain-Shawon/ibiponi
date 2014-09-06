<?php 

	session_start();
	require("webconfig.php");	

	if(isset($_POST['btnRegistration'])){
		$ret = array("success"=>0,"message"=>"Invalid !");
		$Email = $_POST['Email'];
		$Password	=	$_POST['Password'];
		$date	=	time();
		try{
			$q = mysql_query("insert into customer 
							(cust_Email, cust_AccessDate)
							values('$Email','$date')
						");
			if($q){
				$ret['success']=1;
			}
			
			$qtemp = mysql_fetch_assoc(mysql_query("select max(cust_Id) as mx from customer"));
			$CustID=$qtemp['mx'];
			
			$q = mysql_query("insert into customerlogin 
							(cust_Id, custlog_Password, custlog_ChangeDate)
							values('$CustID','$Password','$date')
						");
			if($q){
				$ret['success']=1;
			}
		}
		catch(Exception $e) {
			$ret['message'] = $e;
		}
		echo json_encode($ret);
	}	//Registration
	
	if(isset($_POST['btnLogin'])){
		$ret = array("success"=>0,"message"=>"Invalid !");
		$Email = $_POST['email'];
		$Password	=	$_POST['password'];
		$date	=	time();
		try{
			if($q = mysql_query("SELECT * FROM customer NATURIAL JOIN customerlogin WHERE cust_Email = '$Email' AND custlog_Password = '$Password'"))
			{
				$q = mysql_fetch_assoc($q);
				$ret['success']=1;
				$_SESSION['log']=1;
				if($q['cust_Name']!=""){
					$_SESSION['custName']=$q['cust_Name'];  
				}
				else
					$_SESSION['custName']="Anonymous User";
					
				$_SESSION['custID']=$q['cust_Id'];
			}
		}
		catch(Exception $e) {
			$ret['message'] = $e;
		}
		echo json_encode($ret);
	}	//Login
	
	if(isset($_POST['Logout'])){
		try{
			session_destroy();
			$ret['success']=1;
		}
		catch(Exception $e) {
			$ret['message'] = $e;
		}
		echo json_encode($ret);
	}	//Logout	
	
	if(isset($_POST['btnChangePassword'])){  //$_SESSION['custId']
		$ret = array("success"=>0,"message"=>"Invalid Change Password!");
		if($_POST['password']==$_POST['ConformPassword']){					
			$CustID = $_SESSION['custId'];
			$oldPassword = $_POST['oldPassword'];
			$Password	=	$_POST['password'];
			$date	=	time();
			if($q = mysql_query("SELECT custlog_Password FROM customer NATURIAL JOIN customerlogin WHERE customerlogin.cust_Id = '$CustID'")){
				$q = mysql_fetch_assoc($q);
				if($q['custlog_Password']==$oldPassword){
						if($q = mysql_query("UPDATE customerlogin SET custlog_Password = '$Password', custlog_ChangeDate = '$date' WHERE cust_Id = '$CustID' ")){
							$ret['success']=1;
							$ret['message'] = "Sucessfully Change Password.";
						}
				}
				else
					$ret['message'] = "Old Password did not match.";
			}			
		}
		echo json_encode($ret);	
		
	}	//Change Password	
	
?>