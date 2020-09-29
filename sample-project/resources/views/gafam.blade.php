
<h1>GAFAM</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>NAME</th>
    </tr>
    @foreach ($gafams as $gafam)
    <tr>
        <td>{{ $gafam->id }}</td>
        <td>{{ $gafam->name }}</td>
    </tr>
    @endforeach
</table>
