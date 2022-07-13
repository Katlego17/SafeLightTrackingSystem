<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <table style="text-align: center; margin:auto">
        <thead>
            <tr>
                <th></th><!--<input type="checkbox" class="form-checkbox h-5 w-5"  wire:model.defer="selectAll" >-->
                <th>Serial Number</th>
                <th>Electronic Board ID</th>
                <th>Battery ID</th>
                <th>Date Added</th>
            </tr>
        </thead>
        <tbody>
            @foreach($addedLights as $value)
            <tr>
                <td>
                    <input type="checkbox"  value="{{$value->id}}" wire:model.defer="selectedProducts" ><!-- defer so it doesnt reload everytime its checked-->
                </td>
                <td>{{$value->SerialNumber}}</td>
                <td>{{$value->ElectronicBoardID}}</td>
                <td>{{$value->BatteryID}}</td>
                <td>{{$value->DateAdded}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="width: 30%; text-align:center;margin:auto;margin-top:1%">
        {{$addedLights->links()}}
    </div>

    <div style="margin:1%">
        <button class="btn btn-success btn-sm" wire:click="changePhase()">Send Selected To Next Phase</button>
    </div>
</div>
