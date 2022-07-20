<div>
    <div class="row mb-4" style="margin-top: 2%">
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
        <!--<div class="col form-inline">
            <button >
                <a href="/generate-pdf" target="_blank">Generage PDF</a>
            </button>
        </div>-->

        <div class="col">
            <input wire:model.debounce.300ms="search" class="form-control" type="text" placeholder="Search Through Products...">
        </div>

    </div>
    <div style="overflow-x:auto; text-align:center;">
        <table class="table">
            <thead>
                <tr>
                    <th wire:click="sortBy('GroupName')" style="cursor: pointer;">Group Name</th>
                    <th wire:click="sortBy('Name')"  style="cursor: pointer;">Mine Name</th>
                    <th wire:click="sortBy('Site')" style="cursor: pointer;">Mine Site</th>
                    <th wire:click="sortBy('Section')" style="cursor: pointer;">Mine Section</th>
                    <th wire:click="sortBy('Level')" style="cursor: pointer;">Mine Level</th>
                    <th wire:click="sortBy('Cabinet')" style="cursor: pointer;">Mine Cabinet</th>
                </tr>
            </thead>

            <tbody>


                @foreach ($clients as $client)

                <tr>
                    <td>{{$client->GroupName}}</td>
                    <td>{{$client->Name}}</td>
                    <td>{{$client->Site}}</td>
                    <td>{{$client->Section}}</td>
                    <td>{{$client->Level}}</td>
                    <td>{{$client->Cabinet}}</td>
                </tr>

                @endforeach





            </tbody>
        </table>
    </div>


    <div>
        <p>

            {{$clients->links()}}
        </p>
    </div>
</div>
