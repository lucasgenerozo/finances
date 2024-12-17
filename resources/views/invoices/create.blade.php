<x-layout title="Criar Gasto">
    <x-header title="Criar gastos">
        <a href="{{ route('invoices.index') }}" class="btn btn-secondary m-1">Voltar</a>
    </x-header>

    <x-form.obligatory_tip />

    <x-invoices.form action="{{ route('invoices.store') }}" :invoice="null" />

</x-layout>
