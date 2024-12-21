<form action="{{ $action }}" class="mt-5" method="POST" autocomplete="off">
    @csrf

    @isset($tag)
        @method('PUT')
    @endisset

    <div class="row">
        <div class="col">
            <label class="form-label" for="description">Descrição*:</label>
            <input type="text"
                    class="form-control"
                    id="description"
                    name="description"
                    value="{{ old('description', $tag?->description) }}"
                    required />
        </div>
    </div>

    <input type="submit" value="Gravar" class=" mt-3 btn btn-success">
</form>
