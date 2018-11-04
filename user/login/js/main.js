var databse = window.localStorage;

function handleLogin(){

	var email = $(".emailField")[0].value;
	var password = $(".passwordField")[0].value

	if(email == databse.email && password == database.password){
		database.setItem('loggedIn', true)
		window.location.href="/user"
	}else {
		alert("username or password is incorrect")
	}
	
}