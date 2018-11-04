var database = window.localStorage;

function functionConfirm(msg){


  var confirmBox = $("#confirm");
  confirmBox.find(".message").text(msg);
  confirmBox.find(".yes,.no").unbind().click(function(){
    confirmBox.hide();
  });
confirmBox.find(".yes").click(myYes);
confirmBox.find(".no").click(myNo);
confirmBox.show();
};

function myYes(){

	// // get values from form
	var email = $(".emailField")[0].value
	var passwordOne = $(".passwordField")[0].value
	var passwordTwo = $(".passwordField")[1].value

  if(passwordOne != passwordTwo){
    //passwords are NOT the same
    alert("passwords are not the same")
  }else {
    //passwords are the same
    database.setItem('email', email)
    database.setItem('password', passwordOne)
        //redirect to website
     window.location.href = ("/user");
     database.setItem('loggedIn', "true")
  }


     return false;


}
function myNo(){
 window.history.back();
 return false;
}
