<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <x-card :title="$title">{{ $text }}</x-card>
    <div class="text-center">
        <a class="btn btn-primary" href="/">Back</a>
    </div>
</x-layout>