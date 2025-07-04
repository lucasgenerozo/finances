<?php $title = 'Listar Gastos' ?>

<x-layout title="{{ $title }}">
    <x-alerts.success :successMessage="$successMessage" />

    <x-header title="{{ $title }}">
        <a href="{{ route('home.index') }}" class="btn btn-secondary m-1">Voltar</a>
    </x-header>
    <a href="{{ route('invoices.create') }}" class="btn btn-success">Adicionar gasto</a>


    <div class="my-5">
        <div class="row border-bottom border-secondary mb-2 py-2">
            <div class="col-3">Descrição</div>
            <div class="col-2">Valor (em R$)</div>
            <div class="col">Observação</div>
            <div class="col">Classificações</div>
            <div class="col-1">Menu</div>
        </div>
        @foreach ($invoices as $invoice)
        <div class="row text-{{ $invoice->isEntrance() ? 'success' : 'danger' }} border-bottom border-secondary mt-1 mb-2 py-2">
            <div class="col-3">{{ $invoice->description }}</div>
            <div class="col-2">{{ $invoice->formattedMoneyAmount() }}</div>
            <div class="col">{{ $invoice->observation }}</div>
            <div class="col">{{ implode(', ', $invoice->tagsDescriptions()->toArray() ) }}</div>
            <div class="col-1">
                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="javascript::void()" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <x-icons.three_dots />
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item btn" href="{{ route('invoices.edit', $invoice->id) }}">
                                <x-icons.pencil_square />
                                <span class="px-1 py-3">Editar</span>
                            </a>
                        </li>
                        <li>
                            <x-form.destroy_modal.button action="{{ route('invoices.destroy', $invoice->id) }}" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <x-form.destroy_modal.modal message="Você tem certeza que deseja excluir esse Gasto?" />
</x-layout>
