
function seleccInstru(){
   
    var x = document.getElementById("rubro").value;
    $.ajax({
        url:"VerSelecInstrumento.php",
        method: "POST",
        data:{
            id : x
        },
        success:function(data){
            $("#anss").html(data);

        }
    })
    
}
