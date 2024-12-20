<x-layout title="Criar classificações">
    <x-header title="Criar classificações">
        <a href="{{ route('tags.index') }}" class="btn btn-secondary m-1">Voltar</a>
    </x-header>

    <x-form.obligatory_tip />

    <x-tags.form action="{{ route('tags.store') }}" :tag="null" />

</x-layout>
