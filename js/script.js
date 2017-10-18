// Add Record
function addRecord() {
    // get values
    var id = $("#id").val();
    var nama = $("#nama").val();
    var no_kamar = $("#no_kamar").val();
    var laundry = $("#laundry").val();
    var sisa_laundry = $("#sisa_laundry").val();
    var listrik = $("#listrik").val();
    var sisa_listrik = $("#sisa_listrik").val();
    var charge = $("#charge").val();

    // Add record
    $.post("ajax/addRecord.php", {
        id: id,
        nama: nama,
        no_kamar: no_kamar,
        laundry: laundry,
        sisa_laundry: sisa_laundry,
        listrik: listrik,
        sisa_listrik: sisa_listrik,
        charge: charge
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#id").val("");
        $("#nama").val("");
        $("#no_kamar").val("");
        $("#laundry").val("");
        $("#sisa_laundry").val("");
        $("#listrik").val("");
        $("#sisa_listrik").val("");
        $("#charge").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("Are you sure, do you really want to delete User?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function ResetUser(id) {
    var conf = confirm("Are you sure, do you really want to reset User?");
    if (conf == true) {
        $.post("ajax/resetUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for future usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var penghuni = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_id").val(penghuni.id);
            $("#update_nama").val(penghuni.nama);
            $("#update_no_kamar").val(penghuni.no_kamar);
            //$("#update_laundry").val(penghuni.laundry);
            $("#update_sisa_laundry").val(penghuni.sisa_laundry);
            $("#update_total_laundry").val(penghuni.total_laundry);
            $("#update_total_listrik").val(penghuni.total_listrik);
            //$("#update_listrik").val(penghuni.listrik);
            $("#update_sisa_listrik").val(penghuni.sisa_listrik);
            $("#update_charge").val(penghuni.charge);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
        var id = $("update_id").val();
        var nama = $("#update_nama").val();
        var no_kamar = $("#update_no_kamar").val();
        var laundry = $("#update_laundry").val();
        var sisa_laundry = $("#update_sisa_laundry").val();
        var total_laundry = $("#update_total_laundry").val();
        var listrik = $("#update_listrik").val();
        var sisa_listrik = $("#update_sisa_listrik").val();
        var total_listrik = $("#update_total_listrik").val();
        var charge = $("#update_charge").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
      id: id,
      nama: nama,
      no_kamar: no_kamar,
      laundry: laundry,
      sisa_laundry: sisa_laundry,
      total_laundry: total_laundry,
      listrik: listrik,
      sisa_listrik: sisa_listrik,
      total_listrik: total_listrik,
      charge: charge
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();

            $("#update_laundry").val("");
            $("#update_listrik").val("");
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});
