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
background:#eee;
}




/**    17. Panel
 *************************************************** **/
/* pannel */
.panel {
	position:relative;

	background:transparent;

	-webkit-border-radius: 0;
	   -moz-border-radius: 0;
			border-radius: 0;

	-webkit-box-shadow: none;
	   -moz-box-shadow: none;
			box-shadow: none;
}
.panel.fullscreen .accordion .panel-body,
.panel.fullscreen .panel-group .panel-body {
	position:relative !important;
	top:auto !important;
	left:auto !important;
	right:auto !important;
	bottom:auto !important;
}

.panel.fullscreen .panel-footer {
	position:absolute;
	bottom:0;
	left:0;
	right:0;
}


.panel>.panel-heading {
	text-transform: uppercase;

	-webkit-border-radius: 0;
	   -moz-border-radius: 0;
			border-radius: 0;
}
.panel>.panel-heading small {
	text-transform:none;
}
.panel>.panel-heading strong {
	font-family:Arial,Helvetica,Sans-Serif;
}
.panel>.panel-heading .buttons {
	display:inline-block;
	margin-top:-3px;
	margin-right:-8px;
}
.panel-default>.panel-heading {
	padding: 15px 15px;
	background:#fff;
}
.panel-default>.panel-heading small {
	color:#9E9E9E;
	font-size:12px;
	font-weight:300;
}
.panel-clean {
	border: 1px solid #ddd;
	border-bottom: 3px solid #ddd;

	-webkit-border-radius: 0;
	   -moz-border-radius: 0;
			border-radius: 0;
}
.panel-clean>.panel-heading {
	padding: 11px 15px;
	background:#fff !important;
	color:#000;
	border-bottom: #eee 1px solid;
}
.panel>.panel-heading .btn {
	margin-bottom: 0 !important;
}

.panel>.panel-heading .progress {
	background-color:#ddd;
}

.panel>.panel-heading .pagination {
	margin:-5px;
}

.panel-default {
	border:0;
}

.panel-light {
	border:rgba(0,0,0,0.1) 1px solid;
}
.panel-light>.panel-heading {
	padding: 11px 15px;
	background:transaprent;
	border-bottom:rgba(0,0,0,0.1) 1px solid;
}

.panel-heading a.opt>.fa {
    display: inline-block;
    font-size: 14px;
    font-style: normal;
    font-weight: normal;
    margin-right: 2px;
    padding: 5px;
    position: relative;
    text-align: right;
    top: -1px;
}

.panel-heading>label>.form-control {
	display:inline-block;
	margin-top:-8px;
	margin-right:0;
	height:30px;
	padding:0 15px;
}
.panel-heading ul.options>li>a {
	color:#999;
}
.panel-heading ul.options>li>a:hover {
	color:#333;
}
.panel-title a {
	text-decoration:none;
	display:block;
	color:#333;
}

.panel-body {
	background-color:#fff;
	padding: 15px;

	-webkit-border-radius: 0;
	   -moz-border-radius: 0;
			border-radius: 0;
}
.panel-body.panel-row {
	padding:8px;
}

.panel-footer {
	font-size:12px;
	border-top:rgba(0,0,0,0.02) 1px solid;
	background-color:rgba(0255,255,255,1);

	-webkit-border-radius: 0;
	   -moz-border-radius: 0;
			border-radius: 0;
}
</style>
<body>

<div class="container bootstrap snippets bootdey">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-6 col-sm-6 text-left">
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

				<div class="col-md-6 col-sm-6 text-right">
				<h4><strong>Invoice to:</strong></h4>
				<div class="receipt-right">
							<h5>
							{{$invoice->client->client_name}} </h5>
							<p><b>Mobile :</b> {{$invoice->client->phone}}</p>
							<p><b>Email :</b> {{$invoice->client->email}}</p>
							<p><b>Address :</b> {{$invoice->client->address}},{{$invoice->client->city}},{{$invoice->client->county}}</p>
						</div>


				</div>

			</div>

			<div class="table-responsive">
				<table class="table table-condensed nomargin">
					<thead>
						<tr>
							<th>Item Name</th>
							<th>Quantity</th>
							<th>Unit Price</th>
							<th>VAT</th>
							<th>Total Price</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($invoice->orders  as $order)
						<tr>
											<h3>
                                            {{ $order->product->name}}
                                            </h3>
                                        <td class="notva">{{$order->product->price}}</th>
                                        <td class="qty">{{ $order->quantity}}</td>
                                        <td class="tva">{{$order->tva}}%</th>
                                        <td class="withtva">{{$order->product->price*$order->quantity*$order->tva/100+$order->product->price*$order->quantity}}</th>

						</tr>

						@endforeach
					</tbody>
					@foreach($invoice->orders  as $order)
                                        {{$sub+=$order->product->price*$order->quantity}}

                               @endforeach
				</table>
			</div>

			<hr class="nomargin-top">
			<div class="row">
				<div class="col-sm-6 text-left">
					<h4><strong>Date of Invoice:{{$invoice->data_emitere}}</h4>
					<p class="nomargin nopadding">
						<strong>Due date:</strong>
						{{$invoice->data_scadenta}}
					</p><br><!-- no P margin for printing - use <br> instead -->

					<h5 style="color: rgb(140, 140, 140);">Written by:{{Auth::user()->first_name}}{{Auth::user()->last_name}}</h5>
				</div>

				<div class="col-sm-6 text-right">
					<ul class="list-unstyled">
						<li><strong>Sub - Total Amount:</strong>{{$sub}}</li>
						<li><strong>Grand Total:</strong> {{$sub*$order->tva/100+$sub}}</li>
					</ul>

				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
