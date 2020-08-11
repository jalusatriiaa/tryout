function load_seleksi() {
  $("#seleksi").find("option").not(":first").remove();

  $.getJSON(base_url + "seleksi/load_seleksi", function (data) {
    var option = [];
    for (let i = 0; i < data.length; i++) {
      option.push({
        id: data[i].id_seleksi,
        text: data[i].nama_seleksi,
      });
    }
    $("#seleksi").select2({
      data: option,
    });
  });
}

function load_kelas(id) {
  $("#kelas").find("option").not(":first").remove();

  $.getJSON(base_url + "kelas/kelas_by_seleksi/" + id, function (data) {
    var option = [];
    for (let i = 0; i < data.length; i++) {
      option.push({
        id: data[i].id_kelas,
        text: data[i].nama_kelas,
      });
    }
    $("#kelas").select2({
      data: option,
    });
  });
}

$(document).ready(function () {
  ajaxcsrf();

  // Load Jurusan
  // load_seleksi();

  // Load Kelas By Jurusan
  $("#seleksi").on("change", function () {
    load_kelas($(this).val());
  });

  $("form#member input, form#member select").on("change", function () {
    $(this).closest(".form-group").removeClass("has-error has-success");
    $(this).nextAll(".help-block").eq(0).text("");
  });

  $('[name="jenis_kelamin"]').on("change", function () {
    $(this).parent().nextAll(".help-block").eq(0).text("");
  });

  $("form#member").on("submit", function (e) {
    e.preventDefault();
    e.stopImmediatePropagation();

    var btn = $("#submit");
    btn.attr("disabled", "disabled").text("Wait...");

    $.ajax({
      url: $(this).attr("action"),
      data: $(this).serialize(),
      type: "POST",
      success: function (data) {
        btn.removeAttr("disabled").text("Simpan");
        if (data.status) {
          Swal({
            title: "Sukses",
            text: "Data Berhasil disimpan",
            type: "success",
          }).then((result) => {
            if (result.value) {
              window.location.href = base_url + "member";
            }
          });
        } else {
          console.log(data.errors);
          $.each(data.errors, function (key, value) {
            $('[name="' + key + '"]')
              .nextAll(".help-block")
              .eq(0)
              .text(value);
            $('[name="' + key + '"]')
              .closest(".form-group")
              .addClass("has-error");
            if (value == "") {
              $('[name="' + key + '"]')
                .nextAll(".help-block")
                .eq(0)
                .text("");
              $('[name="' + key + '"]')
                .closest(".form-group")
                .removeClass("has-error")
                .addClass("has-success");
            }
          });
        }
      },
    });
  });
});
