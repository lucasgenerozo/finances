<form action="{{ $action }}" class="mt-5" method="POST" autocomplete="off">
    @csrf

    @isset($invoice)
        @method('PUT')
    @endisset

    <div class="row">
        <div class="col-4">
            <label class="form-label" for="description">Descrição*:</label>
            <input type="text"
                    class="form-control"
                    id="description"
                    name="description"
                    value="{{ old('description', $invoice?->description) }}"
                    required />
        </div>
        <div class="col-4">
            <label class="form-label" for="amount">Valor*:</label>
            <x-invoices.amount_input value="{{ old('amount', $invoice?->formattedFloatAmount()) }}" required />
        </div>
        <div class="col-4">
            <label class="form-label"for="type">Tipo*:</label>
            <select class="form-select"
                    id="type"
                    name="type"
                    required>
                <option value="">Selecione...</option>
                <option {{ old('type', $invoice?->type == 'i') ? 'selected' : '' }} value="i">Entrada</option>
                <option {{ old('type', $invoice?->type == 'o') ? '' : 'selected' }} value="o">Saída</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="observation" class="form-label">Observação:</label>
            <textarea class="form-select" name="observation" id="observation">{{ old('observation', $invoice?->observation) }}</textarea>
        </div>
    </div>
    <div class="row">
        <h2 class="fs-4 mt-5 mb-3">Classificações</h2>
    </div>
    <div class="row">
        <div class="col">
            @foreach ($tags as $idx => $tag)
                <label for="tag-{{ $idx }}" class="form-label d-flex flex-row">
                    <input type="checkbox"
                           name="tags[{{ $idx }}]"
                           id="tag-{{ $idx }}"
                           class="form-check me-1"
                           @isset($invoice)
                               @checked(\in_array($tag->id, $invoiceTagsIds))
                           @endisset
                           value="{{ $tag->id }}">
                    {{ $tag->description }}
                </label>
            @endforeach
        </div>
    </div>
    <input type="submit" value="Gravar" class=" mt-3 btn btn-success">
</form>
