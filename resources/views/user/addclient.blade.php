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
                        <div>
                            <nav class="navbar navbar-expand-lg bg-light" style="width: 30%;text-align: center;margin:auto">
                                <div class="container-fluid">
                                    <!--<a class="navbar-brand" href="dashboard">Navigation Bar : </a>-->

                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: center;margin:auto">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="text-align: center;margin:auto;">
                                            <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="/addclient"style="color:black;">Add Client</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="/clientviewer"style="color:black;">View Client</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <form method="post" action="{{ route('addclientdetails') }}" style="text-align: center;margin:2%">
                            <!-- CROSS Site Request Forgery Protection -->
                            @csrf
                            <div class="form-group">
                                <label for="myBrowser">Mine Group Name</label>
                                <input list="browsers" name="GroupName" style=""/>
                                <datalist id="browsers">
                                    @foreach ($minegroupnames as $rows)
                                        <option value={{$rows->GroupName}}>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="form-group">
                                <label for="myBrowser">Mine Name</label>
                                <input list="minenamebrowsers" name="MineName" />
                                <datalist id="minenamebrowsers">
                                    @foreach ($minenames as $rows)
                                        <option value={{$rows->Name}}>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="form-group">
                                <label for="myBrowser">Mine Site</label>
                                <input list="minesitebrowsers" name="MineSite" />
                                <datalist id="minesitebrowsers">
                                    @foreach ($minesite as $rows)
                                        <option value={{$rows->Site}}>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="form-group">
                                <label for="myBrowser">Mine Section</label>
                                <input list="minesectionbrowsers" name="MineSection" />
                                <datalist id="minesectionbrowsers">
                                    @foreach ($minesection as $rows)
                                        <option value={{$rows->Section}}>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="form-group">
                                <label for="myBrowser">Mine Level</label>
                                <input list="minelevelbrowsers" name="MineLevel" />
                                <datalist id="minelevelbrowsers">
                                    @foreach ($minelevel as $rows)
                                        <option value={{$rows->Level}}>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="form-group">
                                <label for="myBrowser">Mine Cabinet</label>
                                <input list="minecabinetbrowsers" name="MineCabinet" />
                                <datalist id="minecabinetbrowsers">
                                    @foreach ($minecabinet as $rows)
                                        <option value={{$rows->Cabinet}}>
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
                            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block" style="width: 30%; text-align:center;margin:auto">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
