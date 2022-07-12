<x-app-layout>
    <style>
        li {
        display: inline;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pre-Casting Lights
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-15xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <nav class="navbar navbar-expand-lg bg-light">
                            <div class="container-fluid">
                                <!--<a class="navbar-brand" href="dashboard">Navigation Bar : </a>-->

                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="text-align: center;margin:auto;">
                                        <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="/addedphase"style="color:black;">Lights Added</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="/precastphase"style="color:black;">Pre-Cast Phase</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="/castphase"style="color:black;">Cast Phase</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="/postcastphase"style="color:black;">Post-Cast Phase</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="/assembledphase"style="color:black;">Assembled</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="/storedphase"style="color:black;">Stored Phase</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="/soldphase"style="color:black;">Sold Phase</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="/commissionedphase"style="color:black;">Commissioned Phase</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>

                    <div>
                </div>
            </div>
            <DIV style="margin-top: 1%;text-align:center;">
                <div >
                    <button >
                        <a href="/generate-precastedlights-pdf" target="_blank">Generage PDF</a>
                    </button>
                </div>
                <livewire:pre-cast-phase>
            </DIV>
        </div>
    </div>
</x-app-layout>
