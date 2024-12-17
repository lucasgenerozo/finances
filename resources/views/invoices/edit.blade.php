<x-layout title="Editar Gasto">
    <x-header title="Editar gastos">
        <a href="{{ route('invoices.index') }}" class="btn btn-secondary m-1">Voltar</a>
    </x-header>

    <x-form.obligatory_tip />

    <x-invoices.form action="{{ route('invoices.update', $invoice->id) }}" :invoice="$invoice" />

</x-layout>
