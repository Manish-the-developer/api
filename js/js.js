$(document).ready(function(){
    function load_api_data(){
        $.ajax({
            url:'load-api-data.php',
            type:'POST',
            success: function(data){
                $('#api-result').html(data);
            }
        });
    }
    var d =new Date();
    $("#api_data_id").attr("value",d.getTime());
    load_api_data();
    $("#submit-btn").on("click",function(e){
        e.preventDefault();
        var name = $("#name").val();
        var age = $("#age").val();
        var phone = $("#phone").val();
        var address = $("#address").val();
        if(name == '' || age == '' || phone =='' || address==''){
            $("#message-box").html('Form feilds can not be empty');
        }else{
            var formdata = $("#add-form").serialize();
            $.ajax({
                url:"add-data-api.php",
                type:"POST",
                data:formdata,
                success: function(data){
                    $("#message-box").html(data);
                    load_api_data();
                }
            })
        }
    });
});
