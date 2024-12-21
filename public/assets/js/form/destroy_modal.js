function defineDestroyAction(action) {
    document.querySelector('#destroy-modal-form').setAttribute('action', action);
}

function confirmDestroyAction() {
    document.querySelector('#destroy-modal-form').submit();
}
