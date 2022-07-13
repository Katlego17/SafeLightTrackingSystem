<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <table style="text-align: center; margin:auto">
        <thead>
            <tr>
                <th></th>
                <th>Serial Number</th>
                <th>Electronic Board ID</th>
                <th>Battery ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach($soldLights as $value)
            <tr>
                <td>
                    <input type="checkbox" class="form-checkbox h-6 w-6" value="{{$value->id}}" wire:model.defer="selectedProducts" ><!-- defer so it doesnt reload everytime its checked-->
                </td>
                <td>{{$value->SerialNumber}}</td>
                <td>{{$value->ElectronicBoardID}}</td>
                <td>{{$value->BatteryID}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="width: 30%; text-align:center;margin:auto;margin-top:1%">
        {{$soldLights->links()}}
    </div>
    <div style="margin-top:1%;">
        <button class="btn btn-success btn-sm" wire:click="changePhase()">Commission Selected Lights</button>
    </div>
</div>
