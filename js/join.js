$alertClass=$(".formJoin .alert");

// xu ly sign up
$("#formRegister .btn-submit").on("click",()=>{

//$alertClass.css("display","block");

 $username=$("#usernameRegister").val();
  $password=$("#passwordRegister").val();
 // console.log(username+password
  if($username=='' || $password==''){
    $alertClass.css("display","block");
    $alertClass.html("User name or password is not empty");
  }else {
    $.ajax({
      type:"POST",
      url:"join.php",
      data:{
        "username":$username,
        "password":$password,
        "ac":"sign_up",

      },
      success:function(result){               $alertClass.css("display","block");
        $alertClass.attr("class","alert success");
        $alertClass.html(result);
      }
    });
  }
});

// xu ly login
$("#formSignin .btn-submit").on("click",()=>{
  let username =$("#formSignin #username").val();
  let password =$("#formSignin #password").val();
 // console.log(username +password);
  if(username=='' || password==''){
     $alertClass.show();
    $alertClass.html("Please fill username and password");
  }else {
    $.ajax({
      type:"POST",
      url:"join.php",
      data:{
        "username":username,
        "password":password,
        "ac":"sign_in"
      },
      success:function(result){
        $alertClass.show();
        $alertClass.html(result);
      }
    });
  }
});