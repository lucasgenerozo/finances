<x-layout title="Editar classificações">
    <x-header title="Editar classificações">
        <a href="{{ route('tags.index') }}" class="btn btn-secondary m-1">Voltar</a>
    </x-header>

    <x-form.obligatory_tip />

    <x-tags.form action="{{ route('tags.update', $tag->id) }}" :tag="$tag" />

</x-layout>
