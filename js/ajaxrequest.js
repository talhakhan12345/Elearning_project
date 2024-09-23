// EMAIL VERIFICATION WORK //
   $(document).ready(function(){
    $(document).on("keyup","#semail",function(){
        var stdem = $("#semail").val();
        $.ajax({
            url:"student/Emailver.php",
            type:"POST",
            data:{temail:stdem},
            success: function(mydata){
              if(mydata > 0){
                $("#stdmsg2").html('<small style="color:red;">Email Already Used !</small>');
                $("#signup").attr("disabled",true);
              }
              else{
                $("#stdmsg2").html('<small style="color:green;">There You Go!</small>');
                $("#signup").attr("disabled",false);
              }
            }
        })
    })
   });
// EMAIL VERIFICATION END //


// INSERT WORK //
function request(){
    var stdname = $("#sname").val();
    var stdemail = $("#semail").val();
    var stdpwd = $("#spwd").val();

    
    if(stdname.trim()== ""){
        $("#stdmsg1").html('<small style="color:red;">Please Enter Name !</small>');
       
        $("#stdname").focus();
        return false;
        
    } else if(stdemail.trim()== ""){
        $("#stdmsg2").html('<small style="color:red;">Please Enter Email !</small>');
       
        $("#stdemail").focus();
        return false;
    }   
    else if(stdpwd.trim()== ""){
        $("#stdmsg3").html('<small style="color:red;">Please Enter Password !</small>');
       
        $("#stdpwd").focus();
        return false;
    }   
    else{

    $.ajax({
        url:"student/addinsert.php",
        type:"POST",
        data:{name:stdname,email:stdemail,pwd:stdpwd},
        success: function(mydata){
        // alert('Register Successfully');
        if(mydata == true){
            $("#regmsg").html("<small class='alert alert-success'>Registration Successfully</small>");
        }
        else{
            $("#regmsg").html("<small class='alert alert-success'>Registration Successfully</small>");
        }
        $("#sname").val("");
        $("#semail").val("");
        $("#spwd").val("");
        }
    });
}
}

// LOGIN WORK WITH AJAX //
function login(){
     var stdemail = $("#lemail").val();
     var stdpwd = $("#lpwd").val();
    
     $.ajax({
        url:"student/login.php",
        type:"POST",
        data:{email:stdemail,pwd:stdpwd},
        success: function(mydata){
         if(mydata == true){
            $("#loginmsg").html("<div class = 'spinner-border text-danger' role='status'></div>");
            setTimeout(() => {
                window.location.href = "index.php";
             }, 1000);
         }
         else{
            $("#loginmsg").html("<small class = 'alert alert-danger' >Email or password invalid</small>");
         }
         $("#lemail").val("");
         $("#lpwd").val("");
        }
     })
};



// CONTACT FORM WORK //
function cy(){
    var stdname = $("#txtname").val();
    var stdsub = $("#txtsubject").val();
    var stdemail = $("#txtemail").val();
    var stdhow = $("#txthow").val();

    if(stdname.trim()==""){
        $("#stname").html("<small style='color:red;'>Please Enter Name!</small>");

        $("#stdname").focus();
        return false;
    }
    else if(stdsub.trim()==""){
        $("#stsub").html("<small style='color:red;'>Please Enter Subject</small>")

        $("#stdsub").focus();
        return false;
    }
    else if(stdemail.trim()==""){
        $("#stemail").html("<small style='color:red;'>Please Enter Email</small>")

        $("#stdemail").focus();
        return false;
    }

    else{
    $.ajax({
        url:"student/Addcontact.php",
        type:"POST",
        data:{name:stdname,subject:stdsub,email:stdemail,how:stdhow},
        success:function(mydata){
            if(mydata == true){
                $("#txtsend").html("<div class='alert alert-success' role='alert'>Send Successfull</div>");
            }
            else{
                $("#txtsend").html("<small class='alert alert-success' role='alert'>Send Successfully</small>");
            }
            $("#txtname").val("");
            $("#txtsubject").val("");
            $("#txtemail").val("");
            $("#txthow").val("");
        }
    })
}
};
// CONTACT WORK END //