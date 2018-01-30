$(function() {
    console.log( "ready!" );

    var url = 'http://mtazamo.epizy.com/api.php';

    $('#login').on('click', function () {
    	var email = $('#email').val();
    	var password = $('#password').val();

    	console.log("Email: " + email);
    	console.log("Password: " + password);

		axios.post(url, {
		    email: email,
		    password: password
		  })
		  .then(function (response) {
		    console.log(response);
		  })
		  .catch(function (error) {
		    console.log(error);
		  });

    });
});