// document.querySelectorAll('.carInputContainer_ZY[data-error] .input').forEach(cartInpEl => {
//     cartInpEl.addEventListener('input', () => cartInpEl.parentElement.removeAttribute('data-error'));
// });
$(document).ready(function () {
    $('input[type="radio"]').click(function () {
        if ($(this).attr("value") == "creditCard") {
            $(".boxhideZY").hide();
            $(".carCreditbox").show();
        }
        if ($(this).attr("value") == "mobilePay") {
            $(".boxhideZY").hide();
            $(".carMobileBox").show();
        }
        if ($(this).attr("value") == "personal") {
            $(".invoicehideZY").hide();
            $(".carPersonalBox").show();
        }
        if ($(this).attr("value") == "company") {
            $(".invoicehideZY").hide();
            $(".carCompanyBox").show();
        }
        if ($(this).attr("value") == "memberID") {
            $(".invoiceinforhideZY").hide(); s
        }


        if ($(this).attr("value") == "mobileID") {
            $(".invoiceinforhideZY").hide();
            $(".mobilenum").show();
        }
        if ($(this).attr("value") == "DigitalCertificateID") {
            $(".invoiceinforhideZY").hide();
            $(".DigitalCertificatenum").show();
        }
    })
})
