
 $("#email-send").on("click", function(event){
            event.preventDefault();
            const email = $("#email").val();
            
    let data = {
    email: email,
};
$.ajax({
    type: "GET",
    url: "get_email.php",
    data: data,})
.done(function( result ) {
    $("#error").text(result);
  });
})