$(function () {
    $(".tombolTambahData").on("click", function () {
        $("#formModalLabel").html("Tambah Data Siswa"
        );
        $(".modal-footer button[type=submit]").html
        ("tambah data");
        
        $("#nama").val("");
        $("#nis").val("");
        $("#kelas").val("");
        $("#jurusan").val("");
    });
    
    $(".tampilModalUbah").on("click", function () {
        $("#formModalLabel").html("Ubah Data Siswa");
        $(".modal-footer button[type=submit]").html("ubah data");
        $(".modal-body form").attr(
            "action",
            "http://0.0.0.0:8080/phpmvc/public/siswa/ubah"
        );
        
        const id = $(this).data("id");
        
        $.ajax({
            url: "http://0.0.0.0:8080/phpmvc/public/siswa/getubah",
            data: { id: id },
            method: "post",
            dataType: "json",
            success: function (data) {
                $("#nama").val(data.nama);
                $("#nis").val(data.nis);
                $("#kelas").val(data.kelas);
                $("#jurusan").val(data.jurusan);
                $("#id").val(data.id);
            }
        });
    });
});
