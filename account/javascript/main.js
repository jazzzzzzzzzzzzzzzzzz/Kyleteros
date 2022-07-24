$(document).ready(function(e){

    // insert picture using jquery
    let $uploadfile = $('#register .upload-profile-image input[type="file"]');

    $uploadfile.change(function(){
        readURL(this);
    })
    // insert picture using jquery


    //validation for password not match
    $("#reg-form").submit(function(event){
        let $password = $("#password");
        let $confirm = $("#cpassword");
        let $error = $("#confirm_error");
        if ($password.val() === $confirm.val()){
            return true;
        }
        else {
            $error.text("Password not Match");
            event.preventDefault();
        }
    })
    //validation for password not match

});

// insert picture using jquery
function readURL(input){
    if (input.files && input.files[0]){
        let reader = new FileReader();
        reader.onload = function(e) {
            $("#register .upload-profile-image .img").attr('src',e.target.result);
            $("#register .upload-profile-image .camera-icon").css({display: "none"});
        },
        reader.readAsDataURL(input.files[0]);
    }
}

// insert picture using jquery

