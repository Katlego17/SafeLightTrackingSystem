<!DOCTYPE html>
<html>
<head>
    <title>Products Summary</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="text-align: center">
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p>some more info</p>

    <table class="table table-bordered" >
        <tr>
            <th>SerialNumber</th>
            <th>ElectronicBoardID</th>
            <th>BatteryID</th>
        </tr>
        @foreach($products as $row)
        <tr>
            <td>{{ $row->SerialNumber }}</td>
            <td>{{ $row->ElectronicBoardID }}</td>
            <td>{{ $row->BatteryID }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>
