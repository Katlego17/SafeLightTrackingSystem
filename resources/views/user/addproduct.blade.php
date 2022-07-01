<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3>Adding A Light</h3>
                <div class="container mt-5">
                    <!-- Success message -->
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <form  method="post" action="{{ route('AddProduct') }}">
                        <!-- CROSS Site Request Forgery Protection -->
                        @csrf
                        <div class="form-group">
                            <label>Serial Number</label>
                            <input placeholder="Enter Serial Number" type="text" class="form-control" name="SerialNumber" id="SerialNumber">
                        </div>
                        <div class="form-group">
                            <label>Electronic Board ID</label>
                            <input placeholder="Enter Electronic Board ID" type="text" class="form-control" name="ElectronicBoardID" id="ElectronicBoardID">
                        </div>
                        <div class="form-group">
                            <label>Battery ID</label>
                            <input placeholder="Enter Battery ID" type="text" class="form-control" name="BatteryID" id="BatteryID">
                        </div>
                        <div class="form-group">
                            <p>Date: <input placeholder="SELECT A DATE" type="text" id="datepicker" name="DateAdded" id="DateAdded" ></p>
                        </div>
                        <!--
                        <div class="form-group">
                            <label>Mine Group Name</label>
                            <select value="Select Mine Group">
                                <option>Loop through mine group column for drop down</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Mine Name</label>
                            <select value="Selected Mine name">
                                <option>Loop through mine name column for drop down</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Mine Site Name</label>
                            <select value="Selected site Group">
                                <option>Loop through mine site column for drop down</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Mine Section Name</label>
                            <select value="Selected Mine Section">
                                <option>Loop through mine section column for drop down</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Mine Level Name</label>
                            <select value="Selected Mine level">
                                <option>Loop through mine level column for drop down</option>
                            </select>
                        </div>-->

                        <input type="submit"  value="Submit" class="btn btn-dark btn-block">
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
