<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
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
            @foreach($assembledLights as $value)
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
        {{$assembledLights->links()}}
    </div>
    <div style="margin-top:1%;">
        <button class="btn btn-success btn-sm" wire:click="changePhase()">Send Selected To Next Phase</button>
        <button class="btn btn-warning btn-sm" type="button" wire:click.prevent="$emit('showModal')">Fail Selected Light</button>
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
                        <label>Does battery have enough Volt's?</label>
                        <select wire:model="EnoughVoltCheck" aria-placeholder="Choose option">
                            <option value="">Select Option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                      </div>
                      <div>
                        <label>Wiring done well?</label>
                        <select wire:model="WiringCheck" aria-placeholder="Choose option">
                            <option value="">Select Option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                      </div>
                      <div>
                        <label>PC Board output well?</label>
                        <select wire:model="BoardOutputCheck" aria-placeholder="Choose option">
                            <option value="">Select Option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                      </div>
                      <div>
                        <label>Diodides connected well?</label>
                        <select wire:model="DiodeCheck" aria-placeholder="Choose option">
                            <option value="">Select Option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                      </div>
                      <div>
                        <label>Shots by the mesh?</label>
                        <select wire:model="MeshShotCheck" aria-placeholder="Choose option">
                            <option value="">Select Option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                      </div>
                      <div>
                        <label>Too many bubble's?</label>
                        <select wire:model="BubblesCheck" aria-placeholder="Choose option">
                            <option value="">Select Option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                      </div>
                      <div>
                        <label>Recycled?</label>
                        <select wire:model="RecycledCheck" aria-placeholder="Choose option">
                            <option value="">Select Option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                      </div>
                      <div>
                        <label>Comment</label>
                        <input type="textbox" wire:model="Comments" aria-placeholder="Enter Comment">
                      </div>
                      <div>
                        <h3>Fill if taken to Engineer!</h3>
                        <div>
                            <label>Sent to Engineer?</label>
                            <select>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div>
                            <label>Engineer Name</label>
                            <input wire:model="EngineerName" type="text" aria-placeholder="Enter Engineer Name">
                        </div>
                        <div>
                            <label>Date Sent</label>
                            <p>Date: <input placeholder="SELECT A DATE" wire:model="DateSentToEngineer" type="text" id="datepicker" name="DateSentToEngineer" id="DateSentToEngineer" ></p>
                        </div>
                      </div>
                </div>
                <div class="modal-footer" style="text-align: center;margin:auto">
                    <button class="btn btn-secondary"type="button"wire:click.prevent="doClose()">
                        Cancel
                    </button>
                    <button class="btn btn-primary"type="button"wire:click.prevent="FailPhase()">
                        Submit Failed Light
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
