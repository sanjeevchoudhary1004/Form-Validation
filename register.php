<?php
extract($_POST);
if(isset($register))
{
 require_once "validate_input.php";
$conn = mysqli_connect("localhost", "root", ""); // Establishing connection with server..
$db = mysqli_select_db($conn ,"7ambn"); // Selecting Database.
$name=mysqli_real_escape_string($conn ,$_POST['name']) ;
$email=mysqli_real_escape_string($conn ,$_POST['email']) ;
$password=mysqli_real_escape_string($conn ,$_POST['password']) ;
$mobile=mysqli_real_escape_string($conn ,$_POST['mobile']) ;
//Error handlers
//check for empty fields
if(empty($name) || empty($email) || empty($password) || empty($mobile))
{
   echo "Mandatory fields are empty";
   exit();
}
 else
  {
  // Check if input charachter are valid or not
  if(!preg_match("/^[a-zA-Z]*$/" ,$name))
  {
  	echo "Invalid name....";
  	exit();

  } 
  else
     {
  	// Check if e-mail address syntax is valid or not
   $email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
   if (!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    echo "Invalid Email.......";
  }
  else
    {
		$sql_chk="SELECT * FROM register_user WHERE email='$email'";
		$result = mysqli_query($conn ,$sql_chk);
		$data = mysqli_num_rows($result);
   if(($data)==0)
   {
      $password=md5($password);
      $date=date('Y-m-d');
       if(isset($_FILES['image'])){
          $file_tmp=$_FILES['image']['tmp_name'];
          $file_name=$_FILES['image']['name'];
          $file_size=$_FILES['image']['size'];
          $ext=explode(".",$file_name);
          $ext=end($ext);
          $allowed_type=array('PNG','jpg','jpeg','gif','png','JPG','JPEG');
      if(!in_array($ext,$allowed_type)){
        $err_msg="Invalid File";
      }
       if($file_size>2097152){
        $err_msg="File size not more than 2MB";
      }
       if(empty($err_msg)){
        $move=move_uploaded_file($file_tmp, "uploads/".$file_name);
      if($move)
         echo "File is Inserted<br/>";
      else
         echo "Not inserted";
      } 
      else{
        echo $err_msg;
      }
   }
     	$sql_int= "insert into register_user(name, email, password ,mobile,date,profile_pic) values ('".format_str($name)."', '".format_str($email)."', '$password','".format_str($mobile)."','$date','$file_name')";
      $resultset= mysqli_query($conn , $sql_int); // Insert query
       
    }
		if($resultset)
		 {
		    echo "You have Successfully Registered.....";
		 }
		   else
		 {
		   echo "This email is already registered, Please try another email...";
		 }
    }
     
  }
}
}
?>