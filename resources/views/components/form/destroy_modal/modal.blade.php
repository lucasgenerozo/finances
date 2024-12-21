@push('scripts')
    <script src="{{ asset('assets/js/form/destroy_modal.js') }}"></script>
@endpush

<!-- Modal -->
<div class="modal fade" id="destroyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmar exclusão</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $message }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="confirmDestroyAction()">Confirmar</button>
            </div>
        </div>
    </div>
</div>

<form method="POST" id="destroy-modal-form">
    @csrf
    @method('DELETE')
</form>
