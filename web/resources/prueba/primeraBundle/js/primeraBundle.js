const btnDepositar=document.getElementById("depositar");
const btnRetirar=document.getElementById("retirar");
const btnCargar=document.getElementById("cargarInformacion");


document.addEventListener("DOMContentLoaded", function(event) {



});


btnCargar.addEventListener("click",(evt)=>
{

    fetch(url_getMovimientos)
        .then(response => response.json())
        .then(data => {
           alert("alkdm")
        });

});

btnDepositar.addEventListener("click",(evt)=>
{
    var config=
        {
            method:"POST"
        }
    fetch(url_doAbono,config)
        .then(response => response.json())
        .then(data => {

        });

});

btnRetirar.addEventListener("click",(evt)=>
{
    var config=
        {
            method:"POST"
        }
    fetch(url_doRetiro,config)
        .then(response => response.json())
        .then(data => {
            alert("reealizado")
        });
});
function cargarDatos() {
    $.ajax({
        url: url_getMovimientos,
        type: "POST",

        success: function(response) {



        },

    });
}
function alerta(msg){
    $("#msg").html(msg);
    $("#msg").fadeIn(300,function(){
        setTimeout(function(){
            $("#msg").fadeOut(300);
        },2000);
    });
}
