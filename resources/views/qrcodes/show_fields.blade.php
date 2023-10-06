<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Nombre del propietario:') !!}
    <p><button type="button" class="btn btn-outline-dark"><a href="/users/{{$qrcode->user['id']}}">{{ $qrcode->user['name']}}</a></buttom></p>
</div>

<!-- Website Field -->
<div class="col-sm-12">
    {!! Form::label('website', 'Website:') !!}
    <p><a href>{{ $qrcode->website }}</a></p>
</div>

<!-- Company Name Field -->
<div class="col-sm-12">
    {!! Form::label('company_name', 'Company Name:') !!}
    <p>{{ $qrcode->company_name }}</p>
</div>

<!-- Product Name Field -->
<div class="col-sm-12">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $qrcode->product_name }}</p>
</div>

<!-- Product Url Field -->
<div class="col-sm-12">
    {!! Form::label('product_url', 'Product Url:') !!}
    <a href>{{ $qrcode->product_url }}</a></p>
</div>

<!-- Product Url Image Path Field -->
<div class="col-sm-12">
    {!! Form::label('product_url_image_Path', 'Product Url Image Path:') !!}
    <p>
     <img src="{{asset($qrcode ->product_url_image_Path)}}" width="250px">
    </p>
</div>

<!-- Callback Url Field -->
<div class="col-sm-12">
    {!! Form::label('callback_url', 'Callback Url:') !!}
    <p><a href>{{ $qrcode->callback_url }}</a></p>
</div>

<!-- Qrcode Path Field -->
<div class="col-sm-12">
    {!! Form::label('qrcode_path', 'Qrcode Path:') !!}
    <p>
     <img src="{{asset($qrcode ->qrcode_path)}}" with="250PX" >
    </p>
    

</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $qrcode->amount }}</p>
</div>

<h1>TRANSACCIONES DE ESTE PRODUCTO </h1>

<h1>TRANSACCIONES DE ESTE USUARIO</h1>
<div class="col-sm-12">
<table class="table table-striped-columns">
        <thead>
            <tr>
                <th>transactions Id</th>
                <th>Amount</th>
                <th>Payment Method</th>
                <th>Status</th>
                <th>Usuario</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($qrcode->transaction1 as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>${{ $transaction->amount }}</td>
                <td>{{ $transaction->payment_method }}</td>
                <td>{{ $transaction->status }}</td>
                <td>{{ $transaction->status }}</td>
            </tr>
        @endforeach    
        @php $suma=0; @endphp <td></td>
            <th>
                TOTAL AMOUNT:$ @foreach ($qrcode->transaction1 as $transactions )
                @php
                $suma += $transactions->amount;
                @endphp
                @endforeach {{$suma}}
            </th>
        </tbody>
    </table>
</div>
