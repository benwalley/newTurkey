var database = window.localStorage;

function handleGoHome(){
	if(database.getItem('loggedIn') == 'true'){
		window.location.href='/user'
	}else {
		window.location.href='/'
	}
}

function handleLogout(){
	database.loggedIn = 'false'
	window.location.href='/'
}