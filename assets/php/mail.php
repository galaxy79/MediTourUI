<?php
if(isset($_POST['contactsubmit'])){

    $contactname = $_post['contactname'];
    $contactemail = $_post['contactemail'];
    $contactsubject = $_post['contactsubject'];
    $contactmessage = $_post['contactmessage'];
    $contactsubmit = $_post['contactsubmit'];

    $errorEmpty = false;
    $errorEmail= false;

    if (empty($contactname) || empty($contactemail) || empty($contactsubject) ||empty($contactmessage) ) {
        echo "<span class='form-error'> fill in all fields</span>";
        $errorEmpty = true;
    }

    elseif (!filter_var($contactemail, FILTER_VALIDATE_EMAIL)) {
        echo "<span class='form-error'> write a valid email address</span>";
        $errorEmail= true;
    }

    else{
        echo "<span class='form-error'> fill out all fields</span>";
    }
}

else{
    echo "there was an error";
}
?>

<script>
    $('#contactname, #contactemail, #contactsubject, #contactmessage').removeClass('input-error')
    var errorEmpty = "<?php echo $errorEmpty; ?>";
    var errorEmail = "<?php echo $errorEmail; ?>";
    if(errorEmpty){
        $('#contactname, #contactemail, #contactsubject, #contactmessage').addClass('input-error');
    }
    if(errorEmail){
        $('#contactemail').addClass('input-error');
    }
    if(!errorEmpty && !errorEmail){
        $('#contactname, #contactemail, #contactsubject, #contactmessage').val("");
    }
</script>
