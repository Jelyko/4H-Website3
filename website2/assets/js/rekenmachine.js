function OpTellen() {
    var x=parseFloat(document.forms[0].waarde1.value.replace(',', '.'));
    var y=parseFloat(document.forms[0].waarde2.value.replace(',', '.'));

    var z= x+y;

    document.forms[0].uitkomst.value = String(z);
}

function AfTrekken() {
    var x=parseFloat(document.forms[0].waarde1.value.replace(',', '.'));
    var y=parseFloat(document.forms[0].waarde2.value.replace(',', '.'));

    var z= x-y;

    document.forms[0].uitkomst.value = String(z);
}

function Delen() {
    var x=parseFloat(document.forms[0].waarde1.value.replace(',', '.'));
    var y=parseFloat(document.forms[0].waarde2.value.replace(',', '.'));

    var z= x/y;

    document.forms[0].uitkomst.value = String(z);
}

function Vermenigvuldigen() {
    var x=parseFloat(document.forms[0].waarde1.value.replace(',', '.'));
    var y=parseFloat(document.forms[0].waarde2.value.replace(',', '.'));

    var z= x*y;

    document.forms[0].uitkomst.value = String(z);
}

function LeegMaken() {
    document.forms[0].waarde1.value="";
    document.forms[0].waarde2.value="";
    document.forms[0].uitkomst.value="";
}