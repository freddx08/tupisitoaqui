function ComboAno(){

    var d = new Date();
    var n = d.getFullYear();
    var select = document.getElementById("ano");
    for(var i = n; i >= 1950; i--) {
        var opc = document.createElement("option");
        opc.text = i;
        opc.value = i;
        select.add(opc)
    }
 }
 
 window.onload = function() {
     ComboAno();
 };