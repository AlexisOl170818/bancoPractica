const btnDepositar = document.getElementById("depositar");
const btnRetirar = document.getElementById("retirar");
const btnCargar = document.getElementById("cargarInformacion");

const errorCuenta=document.getElementById('errorCuenta')
const errorAbono=document.getElementById('errorAbono')
const errorRetiro=document.getElementById('errorRetiro')
const tabla = $('#historyOfMoves').DataTable({
    "lengthMenu": [[10, 25, 50, 75, 100], [10, 25, 50, 75, 100]],
    "iDisplayLength": 50,
    "paging": true,
    language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Movimientos",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total Movimientos)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ movimientos",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        },
    }
});
const saldoDisponible = document.getElementById("saldoDisponible");

var importeRetiro = document.getElementById("importeRetiro")
var importeAbono = document.getElementById("importeAbono")
var ncuenta = document.getElementById("ncuenta")
var saldo = 0;
document.addEventListener("DOMContentLoaded", function (event) {


});


btnCargar.addEventListener("click", (evt) => {


    if(ncuenta.value>0)
    {
        let cuenta = ncuenta.value;
        let data = {
            cuenta
        }

        let config = {
            body: JSON.stringify(data),
            method: "POST",
            headers: {
                "Content-Type": "application/json",


            }
        }
        fetch(url_getMovimientos, config)
            .then(response => response.json())
            .then(data => {


                tabla.clear().draw();
                var id, nocuenta, importe, fecha, tipomovimiento;
                for (i = 0; i < data['movements'].length; i++) {
                    id = data['movements'][i]['idmovimiento'];
                    nocuenta = data['movements'][i]['nocuenta'];
                    importe = data['movements'][i]['importe'];
                    fecha = data['movements'][i]['fecha'];
                    tipomovimiento = data['movements'][i]['tipomovimiento'];


                    tabla.row.add([id, nocuenta, importe, fecha, tipomovimiento]).draw()
                }
                saldo = data['saldoTotal'][0]['SaldoTotal']
                saldoDisponible.innerHTML = ('Saldo disponible $' + saldo)


            });

    }else
    {


        alerta('errorCuenta',' *El número de cuenta es requerido.')
    }


    });

    btnDepositar.addEventListener("click", (evt) => {


        let cuenta = ncuenta.value;
        let deposito = importeAbono.value;
        if(deposito>0)
        {

            let data = {
                deposito,
                cuenta
            }
            let config = {
                body: JSON.stringify(data),
                method: "POST",
                headers: {
                    "Content-Type": "application/json",


                }
            }
            fetch(url_doAbono, config)
                .then(response => response.json())
                .then(data => {

                    if (data.status) {
                        id = data.data[0]['idmovimiento'];
                        nocuenta = data.data[0]['nocuenta'];
                        importe = data.data[0]['importe'];
                        fecha = data.data[0]['fecha'];
                        tipomovimiento = data.data[0]['tipomovimiento'];
                        tabla.row.add([id, nocuenta, importe, fecha, tipomovimiento]).draw()
                        saldo = parseFloat(saldo) + parseFloat(deposito)
                        saldoDisponible.innerHTML = ('Saldo disponible $' + saldo)
                        importeAbono.value=""
                        Materialize.toast('Deposito realizado correctamente', 3000, 'rounded')
                    } else {
                        Materialize.toast('Deposito NO realizado', 3000, 'rounded')
                    }






                });
        }else
        {

            alerta('errorAbono','*El deposito no puede ser menor a 1 MXN.')
        }




});

btnRetirar.addEventListener("click", (evt) => {
    let cuenta = ncuenta.value;
    let retiro = importeRetiro.value;
    if(retiro>0)
    {
        if (saldo < parseFloat(retiro)) {
            Materialize.toast('Saldo Insuficiente', 3000, 'rounded')
        } else {

            let data = {
                retiro,
                cuenta
            }
            let config = {
                body: JSON.stringify(data),
                method: "POST",
                headers: {
                    "Content-Type": "application/json",


                }
            }
            fetch(url_doRetiro, config)
                .then(response => response.json())
                .then(data => {
                    if (data.status) {
                        id = data.data[0]['idmovimiento'];
                        nocuenta = data.data[0]['nocuenta'];
                        importe = data.data[0]['importe'];
                        fecha = data.data[0]['fecha'];
                        tipomovimiento = data.data[0]['tipomovimiento'];
                        tabla.row.add([id, nocuenta, importe, fecha, tipomovimiento]).draw()
                        saldo = parseFloat(saldo) - parseFloat(retiro)
                        saldoDisponible.innerHTML = ('Saldo disponible $' + saldo)
                        importeRetiro.value=""
                        Materialize.toast('Retiro realizado correctamente', 3000, 'rounded')
                    } else {
                        Materialize.toast('Retiro NO realizado', 3000, 'rounded')
                    }


                });
        }
    }else
    {
        alerta('errorRetiro','*El retiro no puede ser menor a 1 MXN.')
    }


});
function alerta(id,msg) {
    $(`#${id}`).html(msg);
    $(`#${id}`).fadeIn(300, function() {
        setTimeout(function() {
            $(`#${id}`).fadeOut(300);
        }, 2000);
    });
}

