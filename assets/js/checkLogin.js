
var user_id_data = getCookie("user");
if(user_id_data.length<=0) {
    location.href = base_url+"main";
    console.log("redirecting to");
}
$.ajax({
    url: base_url+"api/getUserId", // Replace with your server endpoint
    type: 'POST',
    data: {
        "user_id": user_id_data
    },
    success: function (response) {
        // Handle success
        console.log("Success");
        if(response=='false') {
            location.href = base_url+"main";
        }
    },
    error: function (error) {
        console.log(error);
       
    }
});