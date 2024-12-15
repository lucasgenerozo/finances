function formatAmount(inputField) {
    // Remove caracteres que não sejam números ou vírgula
    let value = inputField.value.replace(/[^0-9,]/g, "");

    // Garante que a vírgula aparece apenas uma vez e não no início
    if (value.includes(",")) {
    const parts = value.split(",");
    value = parts[0] + "," + parts[1].slice(0, 2); // Limita a duas casas após a vírgula
    }

    // Remove vírgula inicial, se houver
    if (value.startsWith(",")) {
    value = value.slice(1);
    }

    // Atualiza o valor no campo
    inputField.value = value;
}

