<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $rol->name }}</p>
</div>
<div class="col-sm-12">
    {!! Form::label('created_at', 'Creado en:') !!}
    <p>{{ $rol->created_at }}</p>
</div>
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Aactualizado en:') !!}
    <p>{{ $rol->updated_at }}</p>
</div>

<h1>{{ $rol->name }}</h1>

<div>
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE USUARIO</th>
                <th>EMAIL</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($rol->user as $users)
        <td>{{ $users->id }}</td>
        <td>{{ $users-> name }}</td>
        <td>{{ $users->email }}</td>
        @endforeach
        </tbody>
    </table>
</div>