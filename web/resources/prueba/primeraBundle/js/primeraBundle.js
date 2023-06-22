const btnDepositar = document.getElementById("depositar");
const btnRetirar = document.getElementById("retirar");
const btnCargar = document.getElementById("cargarInformacion");
const tabla = $('#historyOfMoves').DataTable({
    "lengthMenu": [[10, 25, 50, 75, 100], [10, 25, 50, 75, 100]],
    "iDisplayLength": 50
});
const saldoDisponible = document.getElementById("saldoDisponible");
//importeRetiro,importeAbono
var importeRetiro = document.getElementById("importeRetiro")
var importeAbono = document.getElementById("importeAbono")
var ncuenta = document.getElementById("ncuenta")
var saldo = 0;
document.addEventListener("DOMContentLoaded", function (event) {


});


btnCargar.addEventListener("click", (evt) => {
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

});

btnDepositar.addEventListener("click", (evt) => {

    let cuenta = ncuenta.value;
    let deposito = importeAbono.value;
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
                Materialize.toast('Deposito realizado correctamente', 3000, 'rounded')
            } else {
                Materialize.toast('Deposito NO realizado', 3000, 'rounded')
            }






        });

});

btnRetirar.addEventListener("click", (evt) => {
    let cuenta = ncuenta.value;
    let retiro = importeRetiro.value;
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
                    Materialize.toast('Retiro realizado correctamente', 3000, 'rounded')
                } else {
                    Materialize.toast('Retiro NO realizado', 3000, 'rounded')
                }


            });
    }

});

