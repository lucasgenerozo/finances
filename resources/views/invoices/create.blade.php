<x-layout title="Criar Gasto">
    <x-header title="Criar gastos">
        <a href="{{ route('invoices.index') }}" class="btn btn-secondary m-1">Voltar</a>
    </x-header>

    <x-form.obligatory_tip />

    <form action="{{ route('invoices.store') }}" class="mt-5" method="POST" autocomplete="off">
        @csrf

        <div class="row">
            <div class="col-4">
                <label class="form-label" for="description">Descrição*:</label>
                <input type="text"
                        class="form-control"
                        id="description"
                        name="description"
                        required />
            </div>
            <div class="col-4">
                <label class="form-label" for="amount">Valor*:</label>
                <x-invoices.amount_input required />
            </div>
            <div class="col-4">
                <label class="form-label"for="type">Tipo*:</label>
                <select class="form-select"
                        id="type"
                        name="type"
                        required>
                    <option value="">Selecione...</option>
                    <option value="i">Entrada</option>
                    <option value="o">Saída</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="observation" class="form-label">Observação:</label>
                <textarea class="form-select" name="observation" id="observation"></textarea>
            </div>
        </div>
        <input type="submit" value="Gravar" class=" mt-3 btn btn-success">
    </form>

</x-layout>
