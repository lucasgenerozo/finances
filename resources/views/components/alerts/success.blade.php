@isset($successMessage)
<div class="toast align-items-center text-bg-success top-0 start-50 border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
        <div class="toast-body">
            {{ $successMessage }}
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
</div>
<div class="alert alert-success">
    {{ $successMessage }}
</div>
@endisset