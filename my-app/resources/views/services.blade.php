@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-3xl font-bold">Our Services</h1>
    <p class="text-gray-600 mt-4">We offer a wide range of services to help you achieve your goals. Browse through our offerings below:</p>

    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-bold">Service 1</h2>
            <p class="text-gray-600 mt-4">Detailed description of Service 1 goes here. Explain its benefits and features.</p>
        </div>

        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-bold">Service 2</h2>
            <p class="text-gray-600 mt-4">Detailed description of Service 2 goes here. Explain its benefits and features.</p>
        </div>

        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-bold">Service 3</h2>
            <p class="text-gray-600 mt-4">Detailed description of Service 3 goes here. Explain its benefits and features.</p>
        </div>
    </div>
</div>
@endsection
