<div>
    <div class="row mb-4">
        <div class="col form-inline">
            Per Page: &nbsp;
            <select wire:model="perPage" class="">
                <option>2</option>
                <option>5</option>
                <option>10</option>
                <option>15</option>
                <option>25</option>
            </select>
        </div>
        <div class="col form-inline">
            <button >
                <a href="/generate-pdf" target="_blank">Generage PDF</a>
            </button>
        </div>

        <div class="col">
            <input wire:model.debounce.300ms="search" class="form-control" type="text" placeholder="Search Through Products...">
        </div>

    </div>
    <div style="overflow-x:auto;">
        <table class="table">
            <thead>
                <tr>
                    <th wire:click="sortBy('SerialNumber')" style="cursor: pointer;">Serial Number</th>
                    <th wire:click="sortBy('ElectronicBoardID')"  style="cursor: pointer;">Electronic Board ID</th>
                    <th wire:click="sortBy('BatteryID')" style="cursor: pointer;">Battery ID</th>
                    <th wire:click="sortBy('DateAdded')" style="cursor: pointer;">Date Added</th>
                    <th wire:click="sortBy('DatePreCasted')" style="cursor: pointer;">Date Pre-Casted</th>
                    <th wire:click="sortBy('DateCasted')" style="cursor: pointer;">Date Casted</th>
                    <th wire:click="sortBy('DatePostCasted')" style="cursor: pointer;">Date Post-Casted</th>
                    <th wire:click="sortBy('DateAssembled')" style="cursor: pointer;">Date Assembled</th>
                    <th wire:click="sortBy('DateStored')" style="cursor: pointer;">Date Stored</th>
                    <th wire:click="sortBy('DateSold')" style="cursor: pointer;">Date Sold</th>
                    <th wire:click="sortBy('DateCommissioned')" style="cursor: pointer;">Date Commissioned</th>
                    <!--<th wire:click="sortBy('DateFailed')" style="cursor: pointer;">Date Failed</th>
                    <th wire:click="sortBy('EnoughVoltCheck')" style="cursor: pointer;">Enough Volts?</th>
                    <th wire:click="sortBy('WiringCheck')" style="cursor: pointer;">Wiring Good?</th>
                    <th wire:click="sortBy('BoardOutputCheck')" style="cursor: pointer;">Board Output Fine?</th>
                    <th wire:click="sortBy('DiodeCheck')" style="cursor: pointer;">Diode Working?</th>
                    <th wire:click="sortBy('MeshShotCheck')" style="cursor: pointer;">Mesh Shot?</th>
                    <th wire:click="sortBy('BubblesCheck')" style="cursor: pointer;">Bubbles?</th>
                    <th wire:click="sortBy('RecycledCheck')" style="cursor: pointer;">Recycled?</th>
                    <th wire:click="sortBy('Comments')" style="cursor: pointer;">Comments</th>
                    <th wire:click="sortBy('EngineerName')" style="cursor: pointer;">Engineer Name</th>
                    <th wire:click="sortBy('DateSentToEngineer')" style="cursor: pointer;">Date Sent to Engineer</th>-->
                </tr>
            </thead>

            <tbody>


                @foreach ($items as $item)

                <tr>
                    <td>{{$item->SerialNumber}}</td>
                    <td>{{$item->ElectronicBoardID}}</td>
                    <td>{{$item->BatteryID}}</td>
                    <td>{{$item->DateAdded}}</td>
                    <td>{{$item->DatePreCasted}}</td>
                    <td>{{$item->DateCasted}}</td>
                    <td>{{$item->DatePostCasted}}</td>
                    <td>{{$item->DateAssembled}}</td>
                    <td>{{$item->DateStored}}</td>
                    <td>{{$item->DateSold}}</td>
                    <td>{{$item->DateCommissioned}}</td>
                    <!--<td>{{$item->DateFailed}}</td>
                    <td>{{$item->EnoughVoltCheck}}</td>
                    <td>{{$item->WiringCheck}}</td>
                    <td>{{$item->BoardOutputCheck}}</td>
                    <td>{{$item->DiodeCheck}}</td>
                    <td>{{$item->MeshShotCheck}}</td>
                    <td>{{$item->BubblesCheck}}</td>
                    <td>{{$item->RecycledCheck}}</td>
                    <td>{{$item->Comments}}</td>
                    <td>{{$item->EngineerName}}</td>
                    <td>{{$item->DateSentToEngineer}}</td>-->
                </tr>

                @endforeach





            </tbody>
        </table>
    </div>


    <div>

        <p>
            Showing {{$items->firstItem()}} to {{$items->lastItem()}} out of {{$items->total()}} items
        </p>
        <p>

            {{$items->links()}}
        </p>
    </div>
</div>
