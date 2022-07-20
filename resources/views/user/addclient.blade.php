<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ADD A CLIENT
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mt-5">
                        <!-- Success message -->
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        <form method="post" action="{{ route('addclientdetails') }}" style="text-align: center">
                            <!-- CROSS Site Request Forgery Protection -->
                            @csrf
                            <div class="form-group">
                                <label for="myBrowser">Mine Group Name</label>
                                <input list="browsers" name="GroupName" style=""/>
                                <datalist id="browsers">
                                    @foreach ($minegroupnames as $rows)
                                        <option value={{$rows->MineGroupName}}>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="form-group">
                                <label for="myBrowser">Mine Name</label>
                                <input list="minenamebrowsers" name="MineName" />
                                <datalist id="minenamebrowsers">
                                    @foreach ($minenames as $rows)
                                        <option value={{$rows->MineName}}>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="form-group">
                                <label for="myBrowser">Mine Site</label>
                                <input list="minesitebrowsers" name="MineSite" />
                                <datalist id="minesitebrowsers">
                                    @foreach ($minesite as $rows)
                                        <option value={{$rows->MineSiteName}}>
                                    @endforeach
                                </datalist>
                            </div>
                            <!--<div class="form-group">
                                <label>Mine Group Name</label>
                                <input placeholder="Enter Mine Group Name" type="text" class="form-control" name="GroupName" id="MineGroupName">
                            </div>
                            <div class="form-group">
                                <label>Mine Name</label>
                                <input placeholder="Enter Mine Name" type="text" class="form-control" name="Name" id="MineName">
                            </div>
                            <div class="form-group">
                                <label>Mine Site</label>
                                <input placeholder="Enter Mine Site Name" type="text" class="form-control" name="Site" id="MineSite">
                            </div>
                            <div class="form-group">
                                <label>Mine Section</label>
                                <input placeholder="Enter Mine Section Name" type="text" class="form-control" name="Section" id="MineSite">
                            </div>
                            <div class="form-group">
                                <label>Mine Level</label>
                                <input  placeholder="Enter Mine Level Name" type="text" class="form-control" name="Level" id="MineSite">
                            </div>
                            <div class="form-group">
                                <label>Mine Cabinet</label>
                                <input placeholder="Enter Mine Cabinet Name" type="text" class="form-control" name="Cabinet" id="MineSite">
                            </div>-->
                            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
