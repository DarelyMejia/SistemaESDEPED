
function seleccPeriodo(){
   
    var x = document.getElementById("selectPeriodo").value;
    $.ajax({
        url:"VerSelec.php",
        method: "POST",
        data:{
            id : x
        },
        success:function(data){
            $("#ans").html(data);

        }
    })
    
}