<script>
$("#tuition_center").submit(function(){
    var str=true;
    var center_name=$('#center_name').val();
    var center_email=$('#center_email').val();
    var center_mobile=$('#center_mobile').val();
    var center_syl=$('#center_syl').val();
    var center_class=$('#center_class').val();
    var center_location=$('#center_location').val();
    //alert(center_syl);
    var center_msg=$('#center_msg').val();
       var name_pattern=/^[a-zA-Z ]*$/;
      var email_pattern=/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
      var mobile_pattern=/^([0-9]{10,10})*$/;
    if(center_name=="" || !name_pattern.test(center_name))
      {
          str=false;
          $('#center_name').css('border','1px solid red');
      }
      else
      { 
          $('#center_name').css('border','1px solid green');
      }
      if(center_email=="" || !email_pattern.test(center_email))
      {
          str=false;
          $('#center_email').css('border','1px solid red');
      }
      else
      {
          $('#center_email').css('border','1px solid green');
      }
       if(center_mobile=="" || !mobile_pattern.test(center_mobile))
      {
          str=false;
          $('#center_mobile').css('border','1px solid red');
      }
      else
      {
          $('#center_mobile').css('border','1px solid green');
      }
       if(center_msg=="")
      {
          str=false;
          $('#center_msg').css('border','1px solid red');
      }
      else
      {
          $('#center_msg').css('border','1px solid green');
      }
       if(center_syl=="")
      {
          str=false;
          $('#center_syl').css('border','1px solid red');
      }
      else
      {
          $('#center_syl').css('border','1px solid green');
      }
       if(center_class=="")
      {
          str=false;
          $('#center_class').css('border','1px solid red');
      }
      else
      {
          $('#center_class').css('border','1px solid green');
      }
       if(center_location=="")
      {
          str=false;
          $('#center_location').css('border','1px solid red');
      }
      else
      {
          $('#center_location').css('border','1px solid green');
      }
      return str;
    });
</script>