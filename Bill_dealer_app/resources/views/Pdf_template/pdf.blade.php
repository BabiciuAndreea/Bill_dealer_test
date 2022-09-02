<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>


body{margin-top:20px;
background-color: #f7f7ff;
}
#invoice {
    padding: 0px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #0d6efd
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #0d6efd
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #0d6efd;
    background: #e7f2ff;
    padding: 10px;
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,
.invoice table th {
    padding: 5px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #0d6efd;
    font-size: 1.0em
}

.invoice table .qty,
.invoice table .tva,
.invoice table .notva,
.invoice table .withtva,
.invoice table .total,
.invoice table .unit {
    text-align: center;
    font-size: 1.0em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #0d6efd
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #0d6efd;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0px solid rgba(0, 0, 0, 0);
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}

.invoice table tfoot tr:last-child td {
    color: #0d6efd;
    font-size: 1.4em;
    border-top: 1px solid #0d6efd
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px !important;
        overflow: hidden !important
    }
    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }
    .invoice>div:last-child {
        page-break-before: always
    }
}

.invoice main .notices {
    padding-left: 2px;
    border-left: 2px solid #0d6efd;
    background: #e7f2ff;
    padding: 5px;
}
</style>
<body>
<div class="container">
    <div class="card">
        <div class="card-body">
            <div id="invoice">
                <div class="toolbar hidden-print">
                    
                    <hr>
                </div>
                <div class="invoice overflow-auto">
                    <div style="min-width: 600px">
                        <header>
                            <div class="row">
                               
                                <div class="col company-details">
                                    <h2 class="name">
                                       
                                    {{$company->company_name}}
									</a>
                                    </h2>
                                    <div>Reg.Com:{{$company->nr_reg}}</div>
                                    <div>CIF:{{$company->cif}}</div>
                                    <div>Adressa :{{$company->address}}</div>
                                    <div>{{$company->city}}</div>
                                    <div>{{$company->county}}</div>
                                    <div>{{$company->iban}}</div>
                                    <div>{{$company->bank}}</div>
                                    <div>{{$company->email}}</div>
                                   <div>{{$company->phone}}</div>
                                   <div>{{$company->capital}}</div>
                                </div>
                            </div>
                        </header>
                        <main>
                            <div class="row contacts">
                                <div class="col invoice-to">
                                    <div class="text-gray-light">INVOICE TO:</div>
                                    <h2 class="to">{{$invoice->client->client_name}}</h2>
                                    <div class="address">{{$invoice->client->nr_reg}}</div>
                                    <div class="address">{{$invoice->client->cif}}</div>
                                    <div class="address">{{$invoice->client->address}}</div>
                                    <div class="address">{{$invoice->client->city}}</div>
                                    <div class="address">{{$invoice->client->county}}</div>
                                    <div class="email">{{$invoice->client->email}} </div>
                                </div>
                                <div class="col invoice-details">
                                    <h1 class="invoice-id">INVOICE {{$invoice->serie_factura}}</h1>
                                    <div class="date"> {{$invoice->nr_factura}}</div>
                                    <div class="date">Date of Invoice:{{$invoice->data_emitere}}</div>
                                    <div class="date">Due Date: {{$invoice->data_scadenta}}</div>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
        
                                        <th class="text-left">DESCRIPTION</th>
                                        <th class="text-right">PRICE</th>
                                        <th class="text-right">   QUANTITY</th>
                                        <th class="text-right">      TVA</th>
                                        <th class="text-right">     PRICE WITH TVA</th>
                                  
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($invoice->orders  as $order)
                                    <tr>
                                       
                                       
                                            <h3>
                                            {{ $order->product->name}}
                                            </h3>
                                        <th class="notva">{{$order->product->price}}</th> 
                                        <td class="qty">{{ $order->quantity}}</td>
                                        <th class="tva">{{$order->tva}}%</th>
                                        <th class="withtva">{{$order->product->price*$order->quantity*$order->tva/100+$order->product->price*$order->quantity}}</th>
                                      
                                    </tr>
                                   
                                    @endforeach
                                </tbody>
                                @foreach($invoice->orders  as $order)
                                        {{$sub+=$order->product->price*$order->quantity}}
                                     
                               @endforeach
                                <tfoot>
                                    <tr>
                                    <td colspan="2">PRICE WITHOUT TVA:</td>
                                        <td colspan="2">{{$sub}}</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td colspan="2">PRICE WITH TV:</td>
                                        <td colspan="2">{{$sub*$order->tva/100+$sub}}</td>
                                       
                                    </tr>
                                </tfoot> 
                              
                            </table>
                        </main>
                       
                    </div>
                    <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>