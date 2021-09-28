
function seleccInstru1(){
   
    var x = document.getElementById("categoria").value;
    var y = document.getElementById("rubro").value;
    $.ajax({
        url:"VerSelecInstrumento1.php",
        method: "POST",
        data:{
            id : x, 
            rubro : y
        },
        success:function(data){
            $("#anss").html(data);

        }
    })
    
}
