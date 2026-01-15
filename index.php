<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      body{
        align-items:center;
        justify-content:center;
      }
      .menu{
        display:flex;
        align-items:center;
        justify-content:center;
        background-color:navy;
       ;
        height:70px;
      }
      .menu a{
        color:white;
        text-decoration:none;
        font-size:0.85rem;
        padding:10px 1px;
        margin-left:100px;
        
      }
      .menu a:hover{
        color:tomato;
        background:teal;
        cursor:pointer;
        transform:translateY(-5px);
      }
      h2{
        text-align:center;
        font-size:2rem;
        color:slateblue;
        font-family:Arial;
        text-decoration:none;
        padding:30px 10px;
        background:lightgray;
      }
      p{
        text-align:center;
        color:#000;
        padding:10px 10px;
        line-height:1.6;
        transform:translateY(-5px)

      }
      </style>
</head>
  <body>

  <div class="menu">
    <?php include 'menu.php';?>
</div>
<h2>Jtech Softwares</h2>
<p>This web page was build by john katana toillustrate the use of include and require</p>

<?php 
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if(SERVER[REQUEST_METHOD] == "POST"){
  if(empty($_POST["name"])){
    $nameErr = "Name is required";
  }else{
    $name  = test_input($_POST["name"]);
  }
  if(empty($_POST["email"])){
    $emailErr = "Email is required";
  }else{
    $email = test_input($_POST["email"]);
  }
  if(empty($_POST["website"])){
    $website = "";
  }else{
    $website = test_input($_POST["website"]);
  }
  if(empty($_POST["gender"])){
    $genderErr = "Gender is required";
  }else{
    $gender = test_input($_POST["gender"]);
  }
}
?>

<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>
<input type="text" name="name">
<span class="error">*<?php echo $nameErr;?></span>
<br><br>
<input type="text" name="email">
<span class="error">*<?php echo $emailErr;?></span>
<br><br>
<input type="text" name="website">
<span class="error">*<?php echo $websiteErr;?>
<br><br>
Comment:<textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">*<?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="submit">
</form>

<?php include 'footer.php';?>

</body>
</html>