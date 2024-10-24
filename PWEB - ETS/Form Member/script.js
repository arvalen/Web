document.getElementById('purchaseForm').addEventListener('submit', function(event) {
    event.preventDefault(); 
    
    clearErrors();

    const fields = {
        fullName: document.getElementById('fullName'),
        email: document.getElementById('email'),
        phone: document.getElementById('phone'),
        address: document.getElementById('address'),
        postalCode: document.getElementById('postalCode'),
        notes: document.getElementById('notes'),
    };

    const validations = [
        validatePresence(fields.fullName, 'fullNameError', 'Nama lengkap wajib diisi.'),
        validateEmail(fields.email, 'emailError'),
        validatePresence(fields.phone, 'phoneError', 'Nomor telepon wajib diisi.'),
        validatePresence(fields.address, 'addressError', 'Alamat pengiriman wajib diisi.'),
        validatePresence(fields.postalCode, 'postalCodeError', 'Kode pos wajib diisi.'),
    ];

    const allValid = validations.every(valid => valid === true);

    if (allValid) {
        alert('Form pembelian berhasil dikirim!');
    }
});

function clearErrors() {
    const errorElements = document.querySelectorAll('.error');
    errorElements.forEach(el => el.textContent = '');
}

function validatePresence(field, errorId, errorMessage) {
    if (field.value.trim() === '') {
        document.getElementById(errorId).textContent = errorMessage;
        return false;
    }
    return true;
}

function validateEmail(field, errorId) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (field.value.trim() === '') {
        document.getElementById(errorId).textContent = 'Email wajib diisi.';
        return false;
    } else if (!emailPattern.test(field.value.trim())) {
        document.getElementById(errorId).textContent = 'Format email tidak valid.';
        return false;
    }
    return true;
}
