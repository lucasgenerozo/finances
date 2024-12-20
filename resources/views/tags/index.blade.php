<?php $title = 'Listar Categorias' ?>

<x-layout title="{{ $title }}">
    <x-alerts.success :successMessage="$successMessage" />
    
    <x-header title="{{ $title }}" />
    <a href="{{ route('tags.create') }}" class="btn btn-success">Adicionar categoria</a>


    <div class="my-5">
        <div class="row border-bottom border-secondary mb-2 py-2">
            <div class="col-3">Descrição</div>
            <div class="col-3">Gastos</div>
            <div class="col-1">Menu</div>
        </div>
        @foreach ($tags as $tag)
        <div class="row border-bottom border-secondary mt-1 mb-2 py-2">
            <div class="col-3">{{ $tag->description }}</div>
            <div class="col-3">{{ implode(', ', $tag->invoicesDescriptions()->toArray()) }}</div>
            <div class="col-1">
                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="javascript::void()" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <x-icons.three_dots />
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item btn" href="{{ route('tags.edit', $tag->id) }}">
                                <x-icons.pencil_square />
                                <span class="px-1 py-3">Editar</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item btn" href="#">
                                <x-icons.trash_fill />
                                <span class="px-1 py-3">Excluir</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>
