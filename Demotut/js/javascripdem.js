$(document).ready(function(){

    $("select[name*='Dropdown']").addClass('Dropdown');


    $('.Dropdown').change(function(){

    var Dropdownval = $('.Dropdown').val();
    console.log(Dropdownval);


    $.ajax({
        type: "POST",
        url:"http://localhost/Demotut/index.php/insert_ctrl/populateBox/"+Dropdownval,

        success: function(data){

    console.log(JSON.parse(data));
var returnedData = JSON.parse(data);
          $("#fugo").empty();
        $.each(returnedData, function() {

            $("#fugo").append($("<tr>").html("<tr><td> School name:  " + this['Schoolname'] + "  Name :" + this['MemberName'] + " Email  :" + this['Emailaddress'] + "</td></tr><br><br>"));
        });


        $("#fugo").css("border","1px solid #ccc");
        },
        error: function(data) {


                console.log(data);

            }
    });
});


});
