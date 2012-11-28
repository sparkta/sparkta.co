/**
 * @Copyright CSSJockey
 * @Website: http://www.cssjockey.com
 * This message must stay intact, read more about terms of use here: http://www.cssjockey.com/terms-of-use
 * Do not change anything in this document unless you know what you are doing.
 */
$(document).ready(function(){
// Wordpress Comments Check
	$("#commentform").submit(function(){
		var author = $("#author");
		var email = $("#email");
		var comment = $("#comment");
		var emailFormat = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
		if(author.val() == ""){alert("Name must be filled out!");author.focus();return false;}
		if (email.val() == "") {alert("Email must be filled out!");email.focus();return false;}
		if(email.val().search(emailFormat) == -1){alert("Please enter valid email address!");email.focus();return false;}
		if(comment.val() == ""){alert("Got nothing to say?");comment.focus();return false;}	
	}) // End Function
})