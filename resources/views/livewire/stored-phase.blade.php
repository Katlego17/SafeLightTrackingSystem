<div>
    {{-- The best athlete wants his opponent at his best. --}}
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
            @foreach($storedLights as $value)
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
        {{$storedLights->links()}}
    </div>
    <div style="margin-top:1%;">
        <button class="btn btn-success btn-sm" wire:click="changePhase()">Send Selected To Next Phase</button>
        <button class="btn btn-warning btn-sm" type="button" wire:click.prevent="$emit('showModal')">Allocate Light(s) To Client</button>
    </div>

    <!--MY MODAL-->
    <div class="modal fade @if($show === true) show @endif"
         id="myExampleModal"
         style="display: @if($show === true)
                 block
         @else
                 none
         @endif;"
         tabindex="-1"
         role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Diagnostic Form</h5>
                    <button class="close"
                            type="button"
                            aria-label="Close"
                            wire:click.prevent="doClose()">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="text-align: center;margin:auto">
                      <div>
                        <label>Mine Group Name</label>
                        <select wire:model="GroupName" aria-placeholder="Choose Mine Group Name">
                            <option value="">Select Option</option>
                            @foreach ($MineGroupName as $row)
                                <option value={{$row->id}}>{{$row->GroupName}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div>
                        <label>Mine Name</label>
                        <select wire:model="Name" aria-placeholder="Choose Mine Group Name">
                            <option value="">Select Option</option>
                            @foreach ($MineName as $row)
                                <option value="">{{$row->Name}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div>
                        <label>Mine Site</label>
                        <select wire:model="Site" aria-placeholder="Choose Mine Group Name">
                            <option value="">Select Option</option>
                            @foreach ($MineSiteName as $row)
                                <option value="">{{$row->Site}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div>
                        <label>Mine Section</label>
                        <select wire:model="Section" aria-placeholder="Choose Mine Group Name">
                            <option value="">Select Option</option>
                            @foreach ($MineSectionName as $row)
                                <option value="">{{$row->Section}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div>
                        <label>Mine Level</label>
                        <select wire:model="Level" aria-placeholder="Choose Mine Group Name">
                            <option value="">Select Option</option>
                            @foreach ($MineLevelName as $row)
                                <option value="">{{$row->Level}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div>
                        <label>Mine Cabinet</label>
                        <select wire:model="Cabinet" aria-placeholder="Choose Mine Group Name">
                            <option value="">Select Option</option>
                            @foreach ($MineCabinetName as $row)
                                <option value="">{{$row->Cabinet}}</option>
                            @endforeach
                        </select>
                      </div>

                </div>
                <div class="modal-footer" style="text-align: center;margin:auto">
                    <button class="btn btn-secondary"type="button"wire:click.prevent="doClose()">
                        Cancel
                    </button>
                    <button class="btn btn-primary"type="button"wire:click.prevent="AllocateToClient()">
                        Allocate Light(s)
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Let's also add the backdrop / overlay here -->
    <div class="modal-backdrop fade show"
        id="backdrop"
        style="display: @if($show === true)
                block
        @else
                none
        @endif;">
    </div>
</div>
