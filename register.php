<?php
session_start();
require_once('config.php');
 
if(isset($_POST['submit']))
{
    if(isset($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['password']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $firstName = trim($_POST['first_name']);
        $lastName = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        
        $options = array("cost"=>4);
        $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
        $date = date('Y-m-d H:i:s');
 
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
            $sql = 'select * from members where email = :email';
            $stmt = $pdo->prepare($sql);
            $p = ['email'=>$email];
            $stmt->execute($p);
            
            if($stmt->rowCount() == 0)
            {
                $sql = "insert into members (first_name, last_name, email, `password`, created_at,updated_at) values(:fname,:lname,:email,:pass,:created_at,:updated_at)";
            
                try{
                    $handle = $pdo->prepare($sql);
                    $params = [
                        ':fname'=>$firstName,
                        ':lname'=>$lastName,
                        ':email'=>$email,
                        ':pass'=>$hashPassword,
                        ':created_at'=>$date,
                        ':updated_at'=>$date
                    ];
                    
                    $handle->execute($params);
                    
                    $success = 'User has been created successfully';

                    header('index.php');
                    
                }
                catch(PDOException $e){
                    $errors[] = $e->getMessage();
                }
            }
            else
            {
                $valFirstName = $firstName;
                $valLastName = $lastName;
                $valEmail = '';
                $valPassword = $password;
 
                $errors[] = 'Email address already registered';
            }
        }
        else
        {
            $errors[] = "Email address is not valid";
        }
    }
    else
    {
        if(!isset($_POST['first_name']) || empty($_POST['first_name']))
        {
            $errors[] = 'First name is required';
        }
        else
        {
            $valFirstName = $_POST['first_name'];
        }
        if(!isset($_POST['last_name']) || empty($_POST['last_name']))
        {
            $errors[] = 'Last name is required';
        }
        else
        {
            $valLastName = $_POST['last_name'];
        }
 
        if(!isset($_POST['email']) || empty($_POST['email']))
        {
            $errors[] = 'Email is required';
        }
        else
        {
            $valEmail = $_POST['email'];
        }
 
        if(!isset($_POST['password']) || empty($_POST['password']))
        {
            $errors[] = 'Password is required';
        }
        else
        {
            $valPassword = $_POST['password'];
        }
        
    }
 
}
?>
 
 
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="shortcut icon" type="image/ico" href="/images/favicon.ico"/>
</head>
<body class="bg-dark">
 
<div class="container h-100">
	<div class="row h-100 mt-5 justify-content-center align-items-center">
		<div class="col-md-5 mt-3 pt-2 pb-5 align-self-center border bg-light">
			<h1 class="mx-auto w-25" >Register</h1>
			<?php 
				if(isset($errors) && count($errors) > 0)
				{
					foreach($errors as $error_msg)
					{
						echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
                }
                
                if(isset($success))
                {
                    
                    echo '<div class="alert alert-success">'.$success.'</div>';
                }
			?>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="form-group">
					<label for="email">First Name:</label>
					<input type="text" name="first_name" placeholder="Enter First Name" class="form-control" value="<?php echo ($valFirstName??'')?>">
				</div>
                <div class="form-group">
					<label for="email">Last Name:</label>
					<input type="text" name="last_name" placeholder="Enter Last Name" class="form-control" value="<?php echo ($valLastName??'')?>">
				</div>
 
                <div class="form-group">
					<label for="email">Email:</label>
					<input type="text" name="email" placeholder="Enter Email" class="form-control" value="<?php echo ($valEmail??'')?>">
				</div>
				<div class="form-group">
				<label for="email">Password:</label>
					<input type="password" name="password" placeholder="Enter Password" class="form-control" value="<?php echo ($valPassword??'')?>">
				</div>
 
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				<p class="pt-2"> Back to <a href="login.php">Login</a></p>
				
			</form>
		</div>
	</div>
</div>
</body>
</html>