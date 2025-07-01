document.addEventListener('DOMContentLoaded', () => {
    const purchaseForm = document.getElementById('purchaseForm');
    const purchaseFolioInput = document.getElementById('purchaseFolio');
    const supplierRFCInput = document.getElementById('supplierRFC');
    const folioError = document.getElementById('folioError');
    const rfcError = document.getElementById('rfcError');
    const validateFolio = () => {
        const folioValue = purchaseFolioInput.value;
        const numericRegex = /^[0-9]*$/; 
        if (!numericRegex.test(folioValue)) {
            folioError.textContent = 'El folio debe ser únicamente numérico.';
            purchaseFolioInput.classList.add('invalid');
            return false;
        } else {
            folioError.textContent = '';
            purchaseFolioInput.classList.remove('invalid');
            return true;
        }
    };
    const validateRFC = () => {
        const rfcValue = supplierRFCInput.value;
        if (rfcValue.length > 15) {
            rfcError.textContent = 'El RFC no puede exceder los 15 caracteres.';
            supplierRFCInput.classList.add('invalid');
            return false;
        } else {
            rfcError.textContent = '';
            supplierRFCInput.classList.remove('invalid');
            return true;
        }
    };
    purchaseFolioInput.addEventListener('input', validateFolio);
    supplierRFCInput.addEventListener('input', validateRFC);
    purchaseForm.addEventListener('submit', (event) => {
        const isFolioValid = validateFolio();
        const isRFCValid = validateRFC();

        if (!isFolioValid || !isRFCValid) {
            event.preventDefault();
            alert('Por favor, corrige los errores en el formulario antes de enviarlo.');
        } else {
            alert('Formulario enviado correctamente.');
        }
    });
});