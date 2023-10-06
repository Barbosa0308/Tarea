<!-- Rol Id Field -->
<div class="col-sm-12">
    {!! Form::label('rol_id', 'Rol Id:') !!}
    <p><button type="button" class="btn btn-outline-primary"><a href="/rols/{{$user->roles['id']}}">{{ $user->roles['name'] }}</a></button></p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Email Verified At Field -->
<!-- <div class="col-sm-12">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    <p>{{ $user->email_verified_at }}</p>
</div> -->

<!-- Password Field -->
<!-- <div class="col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $user->password }}</p>
</div> -->

<!-- Remember Token Field -->
<!-- <div class="col-sm-12">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $user->remember_token }}</p>
</div> -->

<h1>TRANSACCIONES DE ESTE USUARIO</h1>

<div class="col-sm-12">

<table class="table table-striped-columns">

        <thead>

            <tr>

                <th>transactions Id</th>

                <th>Producto</th>

                <th>Amount</th>

                <th>Payment Method</th>

                <th>Status</th>

            </tr>

        </thead>

        <tbody>

            @foreach ($user->transactions as $transaction)

            <tr>

                <td>{{ $transaction->id }}</td>

                <td>

                    @if ($transaction->qrcode)

                    <!--PARA VERIFICAR SI NO ES NULO-->

                    {{ $transaction->qrcode['product_name'] }}

                    @endif

                    <img src="../{{ $transaction->qrcode['product_url_image_Path'] }}" width="150px">

                </td>

                <td>${{ $transaction->amount }}</td>

                <td>{{ $transaction->payment_method }}</td>

                <td>{{ $transaction->status }}</td>

            </tr>

            @endforeach

            @php $suma=0; @endphp <td></td>

            <th>

                TOTAL AMOUNT:$ @foreach ($user->transactions as $transactions )

                @php

                $suma += $transactions->amount;

                @endphp

                @endforeach {{$suma}}

            </th>

        </tbody>

    </table>

</div>

 

<h1>PRODUCTOS DE ESTE USUARIO</h1>

<table class="table table-striped-columns">

        <thead>

            <tr>

                <th>Producto Id</th>

                <th>Producto</th>

                <th>Amount</th>

            </tr>

        </thead>

        <tbody>

            @foreach ($user->qrcodes as $qrcodes)

            <tr>

                <td><a href="/qrcodes/{{$qrcodes['id']}}">{{ $qrcodes->id }}</a></td>

                <td><a href="/qrcodes/{{$qrcodes['id']}}">{{ $qrcodes->product_name}}</a>

                 <img src="../{{$qrcodes['product_url_image_Path'] }}" width="150px">

                </td>

 

                <td>${{ $qrcodes->amount }}</td>

            </tr>

            @endforeach

        </tbody>

</table>