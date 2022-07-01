<div>
    {{-- The whole world belongs to you. --}}
    <table style="text-align: center; margin:auto">
        <thead>
            <tr>
                <th>ID</th>
                <th>Serial Number</th>
                <th>Electronic Board ID</th>
                <th>Battery ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commissionedLights as $value)
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
