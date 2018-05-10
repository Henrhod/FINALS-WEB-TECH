$(document).ready(function(){
	$("#register").click(function(){
		var user = $("username").val();
		var pass = $("password").val();

		var data = "user=" + user + "and pass = " +pass;

		$.ajax({
			method: "post",
			url: "register.php?";
			data: data,
			success: function(data)
			{
				$("#register_output").html(data);
			}
		});
	});
});