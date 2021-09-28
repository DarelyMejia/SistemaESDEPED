
function seleccInstru2(){
   
    var x = document.getElementById("subcategoria").value;
    var y = document.getElementById("categoria").value;
    $.ajax({
        url:"VerSelecInstrumento2.php",
        method: "POST",
        data:{
            id : x,
            categoria : y
        },
        success:function(data){
            $("#anss").html(data);

        }
    })
    
}
