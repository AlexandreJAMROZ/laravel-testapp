@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<h1 class="mb-4 text-4xl md:text-5xl lg:text-6xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white text-center">
    Contact Us
</h1>

<div class="contact-info mb-4">
    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-gray-700 dark:text-white text-center">Contact Information</h2>
    <ul>
        <li><p class="text-lg font-normal text-gray-500 dark:text-gray-400 text-center">Address: Nouméa 98800</p></li>
        <li><p class="text-lg font-normal text-gray-500 dark:text-gray-400 text-center">Phone: +689 1234 5678</p></li>
        <li><p class="text-lg font-normal text-gray-500 dark:text-gray-400 text-center">Email: 4E0k3@example.com</p></li>
    </ul>
</div>

<iframe 
    class="min-w-full"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8781.291487610099!2d166.43515024919375!3d-22.275024879508514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6c27e2693f1a32cb%3A0x7bf1b22af312dd00!2sNoum%C3%A9a%2098800%2C%20Nouvelle-Cal%C3%A9donie!5e0!3m2!1sfr!2sfr!4v1761197065024!5m2!1sfr!2sfr"
    height="450"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
</iframe>
@endsection