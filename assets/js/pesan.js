$("#btnSubmit").click(function (e) {
    e.preventDefault();
  
    const nomor = $("#nomor").val();
    const nominal = $("#nama").val();
    const pemesan = $("#pemesan").val();

    if (nomor == "") {
        $("#nomor").focus();
    } else if (nama == "") {
        $("#nama").focus();
    } else {
        let linkwa =
            "https://api.whatsapp.com/send?phone=6281995165939&text=Saya ingin beli listrik prabayar";
        linkwa += `%0a%0aNomor: ${nomor}`;
        linkwa += `%0aNama: ${nominal}`;
        linkwa += `%0aPemesan : ${pemesan}`;

        window.open(linkwa);
    }
});

$("#btnSubmit1").click(function (e) {
    e.preventDefault();
  
    const nomorsatu = $("#nomorsatu").val();
    const nominalsatu = $("#nominalsatu").val();

    if (nomorsatu == "") {
        $("#nomorsatu").focus();
    } else if (nominalsatu == "") {
        $("#nominalsatu").focus();
    } else {
        let linkwa =
            "https://api.whatsapp.com/send?phone=6281995165939&text=Saya ingin beli listrik token";
        linkwa += `%0a%0aNomor: ${nomorsatu}`;
        linkwa += `%0aNominal: ${nominalsatu}`;

        window.open(linkwa);
    }
});

$("#btnSubmit2").click(function (e) {
    e.preventDefault();
  
    const namadua = $("#namadua").val();
    const nomordua = $("#nomordua").val();
    const nominaldua = $("#nominaldua").val();

    if (namadua == "") {
        $("#namadua").focus();
    } else if (nomordua == "") {
        $("#nomordua").focus();
    } else if (nominaldua == "") {
        $("#nominaldua").focus();
    } else {
        let linkwa =
            "https://api.whatsapp.com/send?phone=6281995165939&text=Saya ingin beli listrik token";
        linkwa += `%0a%0aNama Bank: ${namadua}`;
        linkwa += `%0aNo Bank Tujuan : ${nomordua}`;
        linkwa += `%0aNominal Transfer : ${nominaldua}`;

        window.open(linkwa);
    }
});

$("#btnSubmit3").click(function (e) {
    e.preventDefault();
  
    const namatiga = $("#namatiga").val();
    const namatigaa = $("#namatigaa").val();
    const nomortiga = $("#nomortiga").val();
    const nominaltiga = $("#nominaltiga").val();

    if (namatiga == "") {
        $("#namatiga").focus();
    } else if (namatigaa == "") {
        $("#namatigaa").focus();
    } else if (nomortiga == "") {
        $("#nomortiga").focus();
    } else if (nominaltiga == "") {
        $("#nominaltiga").focus();
    } else {
        let linkwa =
            "https://api.whatsapp.com/send?phone=6281995165939&text=Saya ingin beli listrik token";
        linkwa += `%0a%0aNama Game : ${namatiga}`;
        linkwa += `%0a%0aNickname : ${namatigaa}`;
        linkwa += `%0aNo Id Game : ${nomortiga}`;
        linkwa += `%0aNominal Topup : ${nominaltiga}`;

        window.open(linkwa);
    }
});

$("#btnSubmit4").click(function (e) {
    e.preventDefault();
  
    const namaempat = $("#namaempat").val();
    const nomorempat = $("#nomorempat").val();

    if (namaempat == "") {
        $("#namaempat").focus();
    } else if (nomorempat == "") {
        $("#nomorempat").focus();
    } else {
        let linkwa =
            "https://api.whatsapp.com/send?phone=6281995165939&text=Saya ingin beli listrik token";
        linkwa += `%0a%0aNama BPJS : ${namaempat}`;
        linkwa += `%0aNomor BPJS : ${nomorempat}`;

        window.open(linkwa);
    }
});

$("#btnSubmit5").click(function (e) {
    e.preventDefault();
  
    const namalima = $("#namalima").val();
    const nominallima = $("#nominallima").val();

    if (namalima == "") {
        $("#namalima").focus();
    } else if (nominallima == "") {
        $("#nominallima").focus();
    } else {
        let linkwa =
            "https://api.whatsapp.com/send?phone=6281995165939&text=Saya ingin beli listrik token";
        linkwa += `%0a%0aNama Aplikasi : ${namalima}`;
        linkwa += `%0aNominal : ${nominallima}`;

        window.open(linkwa);
    }
});

$("#btnSubmit6").click(function (e) {
    e.preventDefault();
  
    const namaenam = $("#namaenam").val();
    const nomorenam = $("#nomorenam").val();
    const nominalenam = $("#nominalenam").val();

    if (namaenam == "") {
        $("#namaenam").focus();
    } else if (nomorenam == "") {
        $("#nomorenam").focus();
    } else if (nominalenam == "") {
        $("#nominalenam").focus();
    } else {
        let linkwa =
            "https://api.whatsapp.com/send?phone=6281995165939&text=Saya ingin beli listrik token";
        linkwa += `%0a%0aNama Provider : ${namaenam}`;
        linkwa += `%0aNomor Kartu : ${nomorenam}`;
        linkwa += `%0aNominal : ${nominalenam}`;

        window.open(linkwa);
    }
});

$("#btnSubmit7").click(function (e) {
    e.preventDefault();
  
    const namatujuh = $("#namatujuh").val();
    const nomortujuh = $("#nomortujuh").val();
    const nominaltujuh = $("#nominaltujuh").val();

    if (namatujuh == "") {
        $("#namatujuh").focus();
    } else if (nomortujuh == "") {
        $("#nomortujuh").focus();
    } else if (nominaltujuh == "") {
        $("#nominaltujuh").focus();
    } else {
        let linkwa =
            "https://api.whatsapp.com/send?phone=6281995165939&text=Saya ingin beli listrik token";
        linkwa += `%0a%0aNama Provider : ${namatujuh}`;
        linkwa += `%0aNomor Kartu : ${nomortujuh}`;
        linkwa += `%0aNominal : ${nominaltujuh}`;

        window.open(linkwa);
    }
});