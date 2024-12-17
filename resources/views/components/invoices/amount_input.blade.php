@push('scripts')
    <script src="{{ asset('assets/js/invoices/amount_input.js') }}"></script>
@endpush

<input type="text"
       class="form-control"
       name="amount"
       id="amount"
       @isset($required) required @endisset
       @isset($value) value="{{ $value }}" @endisset
       oninput="formatAmount(this)">
