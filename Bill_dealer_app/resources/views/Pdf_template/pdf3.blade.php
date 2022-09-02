<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVOICE</title>
</head>
<style>
    body{
background:#eee;
margin-top:20px;
}
.text-danger strong {
        	color: ##e09e50;
		}
		.receipt-main {
			background: #ffffff none repeat scroll 0 0;
			border-bottom: 12px solid #333333;
			border-top: 12px solid #2d3e4e
			margin-top: 50px;
			margin-bottom: 50px;
			padding: 40px 30px !important;
			position: relative;
			box-shadow: 0 1px 21px #acacac;
			color: #333333;
			font-family: open sans;
		}
		.receipt-main p {
			color: #333333;
			font-family: open sans;
			line-height: 1.42857;
		}
		.receipt-footer h1 {
			font-size: 15px;
			font-weight: 400 !important;
			margin: 0 !important;
		}
		.receipt-main::after {
			background: #414143 none repeat scroll 0 0;
			content: "";
			height: 5px;
			left: 0;
			position: absolute;
			right: 0;
			top: -13px;
		}
		.receipt-main thead {
			background: #414143 none repeat scroll 0 0;
		}
		.receipt-main thead th {
			color:#fff;
		}
		.receipt-right h5 {
			font-size: 16px;
			font-weight: bold;
			margin: 0 0 7px 0;
		}
		.receipt-right p {
			font-size: 12px;
			margin: 0px;
		}
		.receipt-right p i {
			text-align: center;
			width: 18px;
		}
		.receipt-main td {
			padding: 9px 20px !important;
		}
		.receipt-main th {
			padding: 13px 20px !important;
		}
		.receipt-main td {
			font-size: 20px;
			font-weight: initial !important;
		}
		.receipt-main td p:last-child {
			margin: 0;
			padding: 0;
		}
		.receipt-main td h2 {
			font-size: 20px;
			font-weight: 900;
			margin: 0;
			text-transform: uppercase;
		}
		.receipt-header-mid .receipt-left h1 {
			font-weight: 100;
			margin: 34px 0 0;
			text-align: right;
			text-transform: uppercase;
		}
		.receipt-header-mid {
			margin: 24px 0;
			overflow: hidden;
		}

		#container {
			background-color: #dcdcdc;
		}
</style>
<body>
<div class="col-md-12">
 <div class="row">
        <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
    			<div class="receipt-header">
					<div class="col-xs-6 col-sm-6 col-md-6">

					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 text-right">
						<div class="receipt-right">
								<h5>{{$company->company_name}}</h5>
								<p>{{$company->cif }}</p>
								<p>{{$company->nr_reg }}</p>
								<p>{{$company->iban }}</p>
								<p>{{$company->bank }}</p>
								<p>{{$company->phone}}<i class="fa fa-phone"></i></p>
								<p>{{$company->email}}<i class="fa fa-envelope-o"></i></p>
								<p>{{$company->address}} <i class="fa fa-location-arrow"></i></p>
								<p>{{$company->city }}</p>
								<p>{{$company->county }}</p>

						</div>
					</div>
				</div>
            </div>

			<div class="row">
				<div class="receipt-header receipt-header-mid">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right">
							<h5>Client</h5>
							{{$invoice->client->client_name}}
							<p><b>Mobile :</b> {{$invoice->client->phone}}</p>
							<p><b>Email :</b> {{$invoice->client->email}}</p>
							<p><b>Address :</b> {{$invoice->client->address}},{{$invoice->client->city}},{{$invoice->client->county}}</p>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="receipt-left">
							<h3>INVOICE {{$invoice->nr_factura}}</h3>
							<h3>INVOICE {{$invoice->serie_factura}}</h3>
						</div>
					</div>
				</div>
            </div>

            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Price</th>
							<th>Quantity</th>
							<th>TVA</th>
							<th> Price with TVA</th>

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
                        <tr>
                            <td class="text-right">
                            <p>
                                <strong>Total without tva: </strong>
                            </p>
							</td>
                            <td>
                            <p>
                                <strong><i class="fa fa-inr"></i> {{$sub}}</strong>
                            </p>
							</td>
                        </tr>
                        <tr>

                            <td class="text-right"><h2><strong>Total: </strong></h2></td>
                            <td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i> {{$sub*$order->tva/100+$sub}}</strong></h2></td>
                        </tr>
                    </tbody>
                </table>
            </div>

			<div class="row">
				<div class="receipt-header receipt-header-mid receipt-footer">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right">
							<p><b>Date of invoice :</b> {{$invoice->data_emitere}}</p>
							<p><b>Due Date:</b> {{$invoice->data_emitere}}</p>
							<h5 style="color: rgb(140, 140, 140);">Written by:{{Auth::user()->first_name}}{{Auth::user()->last_name}}</h5>

						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="receipt-left">
							<h1>Stamp</h1>
						</div>
					</div>
				</div>
            </div>

        </div>
	</div>
</div>
</body>
</html>
