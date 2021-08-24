document.addEventListener("DOMContentLoaded", function() {
    const partnerId = (localStorage.getItem('id') != "null") ? localStorage.getItem('id') : "0013X00002fC28zQAC";
    console.log("Is there an Id?: " + localStorage.getItem('id'));
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const paramId = urlParams.get('id');
    window.localStorage.setItem('id', paramId);
    var iframe = document.getElementById("application");
    iframe.src = "https://paystrax.formtitan.com/EMAV1/?fld860=" + partnerId;
    if (window.location != "https://www.paystrax.com/application/") {
        document.location.href = "https://www.paystrax.com/application/"
    }
});