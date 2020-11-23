<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{-- <title>Remision {{\Carbon\Carbon::now()}}</title> --}}
    {{-- <link rel="stylesheet" href="{{asset('assets/css/main.css')}}"> --}}
</head>

<body>

    <title>Certificado de recibo de pago</title>
    <style>
        h5 {
            text-align: center;
            text-transform: uppercase;
        }

        .contenido {
            font-size: 14px;
        }

        #segundo {
            color: #333;
        }

        footer {
            position: fixed;
            left: 0px;
            bottom: -50px;
            right: 0px;
            height: 40px;
            border-bottom: 2px solid #ddd;
        }
    </style>

    <header class="row" style="margin-top:-1rem">
        <div class="text-center">
            <img src="img/logo.png" style="width: 70px; height:70px; ">
        </div>


        <div class="me">
            <p>
                <strong>Operación sistemica</strong><br>
                Isla del Zapato <br>
                Barrancabermaja<br>
            </p>
        </div>


        <div class="bank">
            <p>
                Web: <a href="http://operacionsistemica.com">Operacionsistemica.com</a><br>
                Tel: +456-345-908-559<br>
            </p>
        </div>

    </header>


    {{-- <div class="row section">

        <div class="col-12" style="display: block">
            <h3>Remision</h3>
        </div>

        <div class="col-6" style="text-align: left">
            <p class="client">
                <strong>Facturar a</strong><br>
                [Nombre cliente]<br>
                [Nombre emmpresa]<br>
                [Dirección empresa]<br>
                [Tel empresa]
            </p>
        </div>

        <div class="col-6" style="text-align: center;">
            <p class="client" style="justify-content:left">
                <strong>Enviar a</strong><br>
                [Nombre cliente]<br>
                [Nombre emmpresa]<br>
                [Dirección empresa]<br>
                [Tel empresa]
            </p>
        </div>

    </div> --}}

    {{-- <div class="row section" style="margin: 1rem">
        <div class="col-1">
            <table style='width:100%'>
                <thead>
                    <tr class="invoice_detail">
                        <th width="25%" style="text-align">Vendedor</th>
                        <th width="25%">Orden de compra </th>
                        <th width="20%">Enviar por</th>
                        <th width="30%">Términos y condiciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="invoice_detail">
                        <td width="25%" style="text-align">John Doe</td>
                        <td width="25%">#PO-2020 </td>
                        <td width="20%">DHL</td>
                        <td width="30%">Pago al contado</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="contenido" style="padding: 0px 50px">

        <div class="invoicelist-body" style="margin:1rem">
            <table>
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Cant.</th>
                        <th>Precio</th>
                        <th>IVA</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detalles as $item)
                    <tr>
                        <td>Código</td>
                        <td>Descripción</td>
                        <td>{{$item['cantidad']}}</td>
                        <td>{{$item['precio']}}</td>
                        <td>IVA</td>
                        <td>Total</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="invoicelist-footer">
            <table>
                <tr class="taxrelated">
                    <td>IVA:</td>
                    <td id="total_tax"></td>
                </tr>
                <tr>
                    <td><strong>Total:</strong></td>
                    <td id="total_price"></td>
                </tr>
            </table>
        </div>

        <div class="note">
            <h2>Nota:</h2>
        </div>

        <footer>
            <div class="col-1 text-center">
                <p class="notaxrelated">Este documento no representa una factura</p>
            </div>
        </footer> --}}

    </div>

</body>

</html>