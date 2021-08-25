function revert() {
    $(".wpwl-button-brand").click();
}
var wpwlOptions = {
    registrations: {
        requireCvv: false,
        hideInitialPaymentForms: true
    },
    style: "logos",
    showCVVHint: true,
    maskCvv: true,
    locale: "en",
    imageStyle: "svg",
    sofortCountries: {
        DE: "Deutschland",
        NL: "Nederland",
        AT: "Osterreich",
        BE: "Belgique",
        CH: "Schweiz",
        GB: "United Kingdom"
    },
    // createRegistration: true,
    // forceCardHolderEqualsBillingName: true,
    onReady: function() {
        var createRegistrationHtml = '<div class="saveDetail"><div class="customInput"><label class="switch"><input type="checkbox" name="createRegistration" value="true" /><span class="slider round"></span></label></div><div class="customLabel">Save my card details</div></div>';
        $('form.wpwl-form-card').find('wpwl-group-submit').after(createRegistrationHtml);
        var createHeader = '<h1>Payment Info</h1>';
        var createMethod = '<h3>Payment method:</h3><div class="button-group"><input class="payButton active" type="button" value="Credit Card"><input class="payButton paypalButton" type="button" value="" onclick="revert()"></div>';
        $('form.wpwl-form-card').find('.wpwl-group-cardNumber').before(createHeader);
        $('form.wpwl-form-card').find('.wpwl-group-cardNumber').before(createMethod);
        $('.wpwl-label-cardNumber').html('Card Number:');
        $('.wpwl-label-cardHolder').html('Name On Card:');
        $('.wpwl-label-expiry').html('Expiration Date:');
        $('.wpwl-control-expiry').attr("tabindex", "3");
        $('.wpwl-label-cvv').html('CVV:');
        $('.wpwl-control-cvv').attr("tabindex", "4");
        $('.wpwl-control-cvv').attr("placeholder", "XXX");
        $('.wpwl-control-cardHolder').attr("placeholder", "Name");
        $('.wpwl-control-cardHolder').attr("tabindex", "1");
        $('.wpwl-control-cardNumber').attr("placeholder", "Number");
        $('.wpwl-control-cardNumber').attr("tabindex", "2");
        // $('.wpwl-button-pay').html("Check Out.");
        var createRegistrationHtml = '<div class="registerContainer"><div class="customLabel">Save payment details?</div><div class="customInput"><input type="checkbox" name="createRegistration" value="true" /></div><div>';
        $('form.wpwl-form-card').find('.wpwl-button').before(createRegistrationHtml);
    }
}

$("#billing-info").hide();
$("#contact-info").hide();
$("#personal-info").hide();
$('#billing').click(function() {
    $("#billing-info").toggle("slow");
});
$('#contact').click(function() {
    $("#contact-info").toggle("slow");
});
$('#personal').click(function() {
    $("#personal-info").toggle("slow");
});
$(".block").click(function() {
    $("p", this).toggle("slow");
});
$(".closeReceipt").click(function() {
    $(".modal").attr("style", "display:none");
});