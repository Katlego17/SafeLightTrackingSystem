<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Manage Clients
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
                        <div style="text-align: center">
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
                        <livewire:view-clients>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
