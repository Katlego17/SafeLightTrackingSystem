<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            HOME
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" >
                    <table style="text-align: center ; margin:auto">
                        <thead>
                            <tr>
                                <td >Number Of Lights Per Phase</td>
                            </tr>
                        </thead>
                       <tbody>
                            <tr>
                                <td >{{$allproductscount}} <a href="showproduct">Lights In Total</a></td>
                            </tr>
                            <tr>
                                <td >{{$allfailedproductscount}} <a href="failed">Failed Lights</a> </td>
                            </tr>
                            <tr>
                                <td >{{$alladdedproductscount}} <A href="addedphase">Added Lights</A></td>
                            </tr>
                            <tr>
                                <td >{{$allprecastedproductscount}} <a href="precastphase">Pre-Casting Lights</a></td>
                            </tr>
                            <tr>
                                <td>{{$allcastedproductscount}} <a href="castphase">Casted Lights</a></td>
                            </tr>
                            <tr>
                                <td >{{$allpostcastedproductscount}} <A href="postcastphase">Post-Casted Lights</A></td>
                            </tr>
                            <tr>
                                <td >{{$allassembledproductscount}} <A href="assembledphase">Assembled Lights</A></td>
                            </tr>
                            <tr>
                                <td >{{$allstoredproductscount}} <A href="storedphase">Stored Lights</A></td>
                            </tr>
                            <tr>
                                <td >{{$allsoldproductscount}} <a href="soldphase">Sold Lights</a></td>
                            </tr>
                            <tr>
                                <td >{{$allcommissionedproductscount}} <A href="commissionedphase">Commissioned Lights</A></td>
                            </tr>
                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
