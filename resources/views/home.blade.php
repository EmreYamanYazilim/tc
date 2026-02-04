@extends('layouts.app')

@section('content')


    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-900 mb-10">Öne Çıkanasdasda Fırsatlar</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <x-listing-card />
                <x-listing-card />
                <x-listing-card />
            </div>
        </div>
    </section>


@endsection
