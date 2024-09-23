function admin(){
    var stdemail = $("#adminemail").val();
    var stdpwd = $("#adminpwd").val();

    if(stdemail.trim()==""){
      $("#amsg").html('<small style="color:red;">Please Enter Email</small>');

      $("stdemail").focus();
      return false;
    }
    else if(stdpwd.trim()==""){
      $("#apwd").html('<small style="color:red;">Please Enter Password</small>');
      
      $("stdpwd").focus();
      return false;
    }
      
    else{
    $.ajax({
        url:"Admin/admin.php",
        type:"POST",
        data:{email:stdemail,pwd:stdpwd},
        success:function(mydata){
          if(mydata == true){
            $("#adminmsg").html('<div class="spinner-border text-dark" role="status"></div>');
            setTimeout(() => {
                window.location.href = "Admin/adminfirst.php";
            }, 1000);
          }
          else{
            $("#adminmsg").html('<small class="alert alert-dark fw-bolder" role="alert">login Failed Please Try Again</small>');
          }
          $("#adminemail").val("");
          $("#adminpwd").val("");
          
        }
    })
}
};