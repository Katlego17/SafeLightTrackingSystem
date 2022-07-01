<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <table style="text-align: center; margin:auto">
        <thead>
            <tr>
                <th>ID</th>
                <th>Serial Number</th>
                <th>EB ID</th>
                <th>B ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach($addedLights as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->SerialNumber}}</td>
                <td>{{$value->ElectronicBoardID}}</td>
                <td>{{$value->BatteryID}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
