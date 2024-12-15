@push('scripts')
    <script src="{{ asset('js/invoices/amount_input.js') }}"></script>
@endpush

<input type="text"
       class="form-control"
       name="amount"
       id="amount"
       @isset($required) required @endisset
       oninput="formatAmount(this)">
