
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


    //redirect to website
     window.location.href = ("/user");
     return false;


}
function myNo(){
 window.history.back();
 return false;
}
