$('#phoneinput').keyup(function () {
    let val = $(this).val();

    val = val.trim('+')
    val = val.replace(/^00+/, '+');
    val = val.replace(/[^\d ]/g, '')
    val = '+' + val;
    val = val.replace(/([\d\+]{3})(\d{0,8})/, '$1$2');

    $(this).val(val);


});


function formatPhoneNumber(x) {

    x = x.replace(/(\D\+)+/g, '')
        .replace(/([\d\+]{1,3})(\d{0,8})(\d{0,10})(\d{0,3})/, '$1 $2$3$4');

    return x
}

formatPhoneNumber('+12345678900') // => "+1 (234) 567-8900"
formatPhoneNumber('2345678900')   // => "(234) 567-8900"

function validatePhone(val) {
    let valid = false;
    if (typeof val !== 'undefined') {
        let phoneReg = /^\+(?:[0-9] ?){6,14}[0-9]$/;

        valid = phoneReg.test(val);
    }

    return valid;
}





