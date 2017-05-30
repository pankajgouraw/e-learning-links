// $(document).ready(function(){
//      $("#sub").click(function(event){
//        event.preventDefault();
//        $.post("main.php", function(response){
//          $("#result").html(response);
//        });
//      });
//    });
$(document).ready(function() {


    $("#link").val('http://');
    // search function
    $("#sub").click(function(event) {
        event.preventDefault();

        var data_search = $("#search").val();
        if (data_search == "") {
            $("#result").html("Please Enter Some Text ");
        } else {
            $.ajax({

                type: "POST",
                url: "main.php",
                data: { name: data_search },
                // dataType:'json',
                success: function(data) {
                    $("#result").html(data);
                    result = data;
                    // var x =jQuery.parseJSON(result);
                    // var jsonObj = JSON.parse(data);
                    if (result == "") {
                        $("#result").html("Data Does Not Exist Please Add The Links");
                    }
                },
                error: function() {
                    alert("not fond");
                }
            });
        }

    });
    // data add function
    $("#receive").click(function() {
        var title = $("#title").val();
        var link = $("#link").val();
        var description = $("#description").val();

        if (title == " " || link == "http://" || description == " ") {

            $("#error").html("please fill the all fields.");
        } else {
            $.ajax({
                type: "POST",
                url: "upload.php",
                data: { title: title, description: description, link: link },
                success: function(data) {


                }


            });
            $("#title").val("");
            $("#description").val("");
            $("#link").val("http://");
            $("#error").html("Data has been added successfully..").css({ 'color': 'green' });
        }


    });

    $("#add").click(function() {
        $("#title").val("");
        $("#description").val("");
        $("#link").val("http://");
    });

    $('.close').click(function() {
        $("#error").html("");
    });
});

//  $("#receive").attr("data-dismiss","modal");   

//     $("#result").html(data);
// // if(!data==""){
//  $("#error").html(data);
// } else{
//  $("#receive").attr("data-dismiss","modal");
//       // $("#result").html(data);
// }  

// $("#error").html(data);
