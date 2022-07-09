<div>
    {{-- The best athlete wants his opponent at his best. --}}
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
            @foreach($storedLights as $value)
            <tr>
                <td>
                    <input type="checkbox" class="form-checkbox h-6 w-6" value="{{$value->id}}" wire:model.defer="selectedProducts" ><!-- defer so it doesnt reload everytime its checked-->
                </td>
                <td>{{$value->id}}</td>
                <td>{{$value->SerialNumber}}</td>
                <td>{{$value->ElectronicBoardID}}</td>
                <td>{{$value->BatteryID}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="margin-top:1%;">
        <button class="btn btn-success btn-sm" wire:click="changePhase()">Send Selected To Next Phase</button>
        <button class="btn btn-warning btn-sm" type="button" wire:click.prevent="$emit('showModal')">Fail Selected Light</button>
    </div>
</div>
