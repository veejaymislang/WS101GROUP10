@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-3xl font-bold">Dashboard</h1>
    <p class="text-gray-600 mt-4">Welcome to your dashboard! Here you can view your details, manage your profile, and access various features.</p>
    <div class="mt-8">
        <a href="{{ route('profile.edit') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit Profile</a>
    </div>
</div>
@endsection
