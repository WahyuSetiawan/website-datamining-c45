function submit() {
    var form = document.getElementById("formDataNasabah");

    if (confirm("Apakah anda ingin menyimpan data nasabah ini ?")) {
        form.submit();
    }
}

function reset() {
    window.location.reload();
}

function uploadFile() {

}

function deleteAll(url) {
    if (confirm("Apakah ingin menghapus semua data ?")) {
        window.location.href = url;
    }
}

function blacklist(url) {
    if (confirm("Apakah ingin memblacklist data ini ?")) {
        window.location.href = url;
    }
}

function del(url) {
    if (confirm("Apakah ingin manghapus data ini ?")) {
        window.location.href = url;
    }
}

