<?php $title = 'Listar Gastos' ?>
<x-layout title="{{ $title }}">
    <x-header title="{{ $title }}" />
    <a href="{{ route('invoices.create') }}" class="btn btn-success">Adicionar gasto</a>

    <div class="border border-secondary my-5">
        @foreach ($invoices as $invoice)
        <div class="row text-{{ $invoice->isEntrance() ? 'success' : 'danger' }}">
            <div class="col">{{ $invoice->description }}</div>
            <div class="col">{{ $invoice->formattedAmount() }}</div>
        </div>
        @endforeach
    </div>
</x-layout>
