function showDiv(box, cbname) {
    var chboxs = document.getElementsByName(cbname);
    var vis = "none";
    var visBS = "none";
    var visBSCT = "none";
    var visLSMS = "none";
    var visLSV = "none";
    var visSave = "none";
    var allUnchecked = 0;

    // Uncheck checkboxes in subcategorys
    for (var i = 0; i < chboxs.length; i++) {
        if (chboxs[i].checked) {
            allUnchecked = 0;
            if (chboxs[i].value == "C") {
                if ((chboxs[i].checked)) {
                    allUnchecked = 1;
                }
            }
            break;
        } else {
            allUnchecked = 1;
        }
    }

    if (allUnchecked == 1) {
        var prodChboxs = document.getElementsByName("productType[]");
        var contChboxs = document.getElementsByName("contentType[]");
        if (cbname == "market[]") {
            for (var i = 0; i < prodChboxs.length; i++) {
                prodChboxs[i].checked = false;
            }
            for (var i = 0; i < contChboxs.length; i++) {
                contChboxs[i].checked = false;
            }
            document.getElementById("divPT").style.display = "none";
            document.getElementById("divCT").style.display = "none";
        }
        if (cbname == "productType[]") {
            for (var i = 0; i < contChboxs.length; i++) {
                contChboxs[i].checked = false;
            }
            document.getElementById("divCT").style.display = "none";
        }
    }
    var chboxNL = document.getElementById("NL");
    var chboxCA = document.getElementById("CA");
    var chboxBS = document.getElementById("BS");
    if (chboxNL.checked == false && chboxCA.checked == false) {
        chboxBS.checked = false;
    }

    // Make subcategory visible if checked.
    for (var i = 0; i < chboxs.length; i++) {
        if (chboxs[i].checked) {
            if (chboxs[i].value !== "C") { //Lockes checkboxes on submenues
                vis = "block";
            }
        }
    }

    // Special subcategorys
    if ((document.getElementById("NL").checked == true) || document.getElementById("CA").checked == true) {
        visBS = "inline-block";
    }

    if (document.getElementById("MA").checked || document.getElementById("LS").checked || document.getElementById("HB").checked || document.getElementById("CC").checked) {
        visBSCT = "block";
    } else {
        visBSCT = "none";
    }

    if ((document.getElementById("LS").checked == true) && (document.getElementById("MS").checked == true)) {
        visLSMS = "block";
    } else {
        var contLSMSChboxs = document.getElementsByName("contentTypeLSMS[]");
        for (var i = 0; i < contLSMSChboxs.length; i++) {
            contLSMSChboxs[i].checked = false;
        }
    }

    if ((document.getElementById("LS").checked == true) && (document.getElementById("V").checked == true)) {
        visLSV = "block";
    } else {
        var contLSVChboxs = document.getElementsByName("contentTypeLSV[]");
        for (var i = 0; i < contLSVChboxs.length; i++) {
            contLSVChboxs[i].checked = false;
        }
    }

    // Check if ready to save
    if ((document.getElementById("divCT").style.display == "block") && (document.getElementById("LS").checked == false)) {
        var contChboxs = document.getElementsByName("contentType[]");
        for (var i = 0; i < contChboxs.length; i++) {
            if (contChboxs[i].checked) {
                visSave = "block";
            }
        }
    } else if ((document.getElementById("divCT").style.display == "block") && (document.getElementById("LS").checked == true)) {
        var contChboxs = document.getElementsByName("contentType[]");
        for (var i = 0; i < contChboxs.length; i++) {
            if ((contChboxs[i].value == "P") || (contChboxs[i].value == "PL")) {
                if ((document.getElementById("MS").checked == false) && (document.getElementById("V").checked == false)) {
                    if (contChboxs[i].checked) {
                        visSave = "block";
                    }
                }
            }
        }
        var chboxsLSMS = document.getElementsByName("contentTypeLSMS[]");
        var chboxsLSV = document.getElementsByName("contentTypeLSV[]");
        for (var i = 0; i < chboxsLSMS.length; i++) {
            for (var j = 0; j < chboxsLSV.length; j++) {
                if (chboxsLSMS[i].checked && chboxsLSV[j].checked) {
                    visSave = "block";
                }
            }
        }
        var chboxQRG = document.getElementById("QRG");
        var chboxMM = document.getElementById("MM");
        var chboxPV = document.getElementById("PV");
        var chboxTV = document.getElementById("TV");
        var chboxSTV = document.getElementById("STV");
        var chboxMS = document.getElementById("MS");
        var chboxV = document.getElementById("V");
        for (var i = 0; i < chboxsLSMS.length; i++) {
            if (chboxsLSMS[i].checked && (chboxV.checked == false)) {
                visSave = "block";
            }
        }
        for (var i = 0; i < chboxsLSV.length; i++) {
            if (chboxsLSV[i].checked && (chboxMS.checked == false)) {
                visSave = "block";
            }
        }


    } else if (document.getElementById("C").checked) {
        visSave = "block";
        var prodChboxs = document.getElementsByName("productType[]");
        for (var i = 0; i < prodChboxs.length; i++) {
            if (prodChboxs[i].value !== "C") {
                if (prodChboxs[i].checked) {
                    visSave = "none";
                }
            }
        }
    }

    document.getElementById(box).style.display = vis;
    document.getElementById("divBS").style.display = visBS;
    document.getElementById("divBSCT").style.display = visBSCT;
    document.getElementById("divLSMS").style.display = visLSMS;
    document.getElementById("divLSV").style.display = visLSV;
    document.getElementById("divSave").style.display = visSave;

}