@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-3xl font-bold">Contact Us</h1>
    <p class="text-gray-600 mt-4">We'd love to hear from you. Please fill out the form below, and we'll get back to you as soon as possible!</p>

    <div class="mt-8 max-w-lg mx-auto">
        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" required class="w-full border-gray-300 rounded-lg px-4 py-2 mt-2" placeholder="Enter your name">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" required class="w-full border-gray-300 rounded-lg px-4 py-2 mt-2" placeholder="Enter your email">
            </div>

            <div class="mb-4">
                <label for="message" class="block text-gray-700">Message</label>
                <textarea name="message" id="message" rows="4" required class="w-full border-gray-300 rounded-lg px-4 py-2 mt-2" placeholder="Enter your message"></textarea>
            </div>

            <div>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-700">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
