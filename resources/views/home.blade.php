@extends('layouts.app')

@section('content')
    <section class="py-1 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
                <x-hero />
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <x-listing-card />
                <x-listing-card />
                <x-listing-card />
                <x-listing-card />
                <x-listing-card />
                <x-listing-card />
            </div>
        </div>
    </section>
@endsection
