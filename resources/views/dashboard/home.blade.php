<!-- resources/views/dashboard/home.blade.php -->
@extends('layouts.dashboard')

@section('title', 'Home')

@section('breadcrumb', 'Home')

@section('content')
<div class="flex flex-wrap -mx-4">
    <!-- Example of a card widget -->
    <div class="w-full md:w-1/2 lg:w-1/4 px-4">
        <div class="bg-white shadow-md rounded-lg p-6 mb-4">
            <h3 class="text-xl font-bold text-gray-700 mb-2">Total Projects</h3>
            <p class="text-2xl font-bold text-[#429b5f]">150</p>
        </div>
    </div>

    <!-- Add more widgets here -->
    <div class="w-full md:w-1/2 lg:w-1/4 px-4">
        <div class="bg-white shadow-md rounded-lg p-6 mb-4">
            <h3 class="text-xl font-bold text-gray-700 mb-2">Total Services</h3>
            <p class="text-2xl font-bold text-[#429b5f]">320</p>
        </div>
    </div>
    
    <!-- Other widgets -->
    <div class="w-full md:w-1/2 lg:w-1/4 px-4">
        <div class="bg-white shadow-md rounded-lg p-6 mb-4">
            <h3 class="text-xl font-bold text-gray-700 mb-2">Messages</h3>
            <p class="text-2xl font-bold text-[#429b5f]">24</p>
        </div>
    </div>
</div>

<div class="bg-white shadow-md rounded-lg p-6 mt-6">
    <h2 class="text-2xl font-bold mb-4">Recent Activities</h2>
    <!-- Recent activities table or list -->
    <table class="w-full text-left table-auto">
        <thead>
            <tr class="text-gray-600">
                <th class="py-2 px-4">Date</th>
                <th class="py-2 px-4">Activity</th>
                <th class="py-2 px-4">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b">
                <td class="py-2 px-4">2024-10-01</td>
                <td class="py-2 px-4">Project Launch</td>
                <td class="py-2 px-4 text-green-500">Completed</td>
            </tr>
            <tr class="border-b">
                <td class="py-2 px-4">2024-10-02</td>
                <td class="py-2 px-4">Service Request</td>
                <td class="py-2 px-4 text-yellow-500">In Progress</td>
            </tr>
            <!-- More rows -->
        </tbody>
    </table>
</div>
@endsection
