setInterval(function () {
   autoloadpage();
 },9000); // it will call the function autoload() after each 30 seconds.
function autoloadpage() {
    $.ajax({
        url: "index.php",
        type: "POST",
        success: function(data) {
            $("div#load").html(data); // here the wrapper is main div
        }
    });
}
