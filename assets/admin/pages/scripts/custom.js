/**
Custom module for you to write your own javascript functions
**/
$("#add-new").on("click", function() {
    $tr = $(this).closest("tr").next().clone();
    $tr.insertAfter($(this).closest("tr"));
});

$('table#oChild').on('click', 'button.delete', function(e){
   $(this).closest('tr').remove()
})

function deleteFiles (id_buku) {
    if (confirm('Apakah Anda Yakin Untuk Menghapus Data Ini?')) {
        $.ajax({
            url: root+'index.php/files/delete_file/' + id_buku,
            type: 'GET',
            async:true,
            cache:false,
            processData: false,
            contentType: false,
            success:function (data) {
                $('#file_' + id_buku).remove();
            }
        });
    } else {
        
    }
}

function updateBidangModal (id_bidang) {
    $('#edit_bidang').modal('show');

    $.ajax({
        url: root+'index.php/bidang/get_bidang/' + id_bidang,
        type: 'GET',
        async:true,
        cache:false,
        processData: false,
        contentType: false,
        success:function (data) {
            $('#id_bidang').val(data.data[0].id_bidang);
            $('#bidang').val(data.data[0].bidang);
        }
    });
}

function updateJenisModal (id_jenis) {
    $('#edit_jenis').modal('show');

    $.ajax({
        url: root+'index.php/jenis/get_jenis/' + id_jenis,
        type: 'GET',
        async:true,
        cache:false,
        processData: false,
        contentType: false,
        success:function (data) {
            $('#id_jenis').val(data.data[0].id_jenis);
            $('#jenis_buku').val(data.data[0].jenis_buku);
        }
    });
}

function updateKategoriModal (id_kategori) {
    $('#edit_kategori').modal('show');

    $.ajax({
        url: root+'index.php/kategori/get_kategori/' + id_kategori,
        type: 'GET',
        async:true,
        cache:false,
        processData: false,
        contentType: false,
        success:function (data) {
            $('#id').val(data.data[0].id);
            $('#nama_kategori').val(data.data[0].nama_kategori);
        }
    });
}

var Custom = function () {

    // private functions & variables

    var selectInit = function(text) {
        $('.select2 , select.input-xsmall').select2();
    }

    var table_file = function () {
        
    }

    var selectFile = function() {
        // $.getJSON(root + 'index.php/kategori/get_kategori_select', function (data) {
        //     console.log(data);
        //     $('.kategori').select2({data:data});
        // })
    }

    var submit_buku = function () {
        $('#submit_buku').submit(function(e) {
                e.preventDefault();
                formData = new FormData($(this)[0]);
                $.ajax({
                    url: root+'index.php/buku/submit',
                    type: 'POST',
                    data: formData,
                    async:true,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success:function (data) {
                        if (data.data.result == true) {
                            alert('data berhasil dimasukkan');
                            $("#submit_buku").trigger('reset');
                            $('#add_buku').modal('hide');
                            tabel_buku();
                            selectInit();
                        }else{
                            alert('data gagal dimasukkan');
                        }
                        // notification_noty(data.result, data.text, data.type_noty, data.url);
                    }
                });
                return false;
            });
    }

    var update_buku = function () {
        $('#update_buku').submit(function(e) {
                e.preventDefault();
                formData = new FormData($(this)[0]);
                $.ajax({
                    url: root+'index.php/buku/update',
                    type: 'POST',
                    data: formData,
                    async:true,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success:function (data) {
                        console.log(data);
                        if (data.data.result == true) {
                            alert('data berhasil dimasukkan');
                            window.location = root + 'index.php/buku';
                        }else{
                            alert('data gagal dimasukkan');
                        }
                    }
                });
                return false;
            });
    }

    var submit_bidang = function () {
        $('#submit_bidang').submit(function(e) {
                e.preventDefault();
                formData = new FormData($(this)[0]);
                $.ajax({
                    url: root+'index.php/bidang/submit',
                    type: 'POST',
                    data: formData,
                    async:true,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success:function (data) {
                        if (data.data.result == true) {
                            alert('data berhasil dimasukkan');
                            $("#submit_bidang").trigger('reset');
                            $('#add_bidang').modal('hide');
                            tabel_bidang();
                            selectInit();
                        }else{
                            alert('data gagal dimasukkan');
                        }
                    }
                });
                return false;
            });
    }

    var update_bidang = function () {
        $('#update_bidang').submit(function(e) {
                e.preventDefault();
                formData = new FormData($(this)[0]);
                $.ajax({
                    url: root+'index.php/bidang/update',
                    type: 'POST',
                    data: formData,
                    async:true,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success:function (data) {
                        if (data.data.result == true) {
                            alert('data berhasil dirubah');
                            $("#update_bidang").trigger('reset');
                            $('#edit_bidang').modal('hide');
                            tabel_bidang();
                            selectInit();
                        }else{
                            alert('data gagal dimasukkan');
                        }
                    }
                });
                return false;
            });
    }

    var submit_jenis = function () {
        $('#submit_jenis').submit(function(e) {
                e.preventDefault();
                formData = new FormData($(this)[0]);
                $.ajax({
                    url: root+'index.php/jenis/submit',
                    type: 'POST',
                    data: formData,
                    async:true,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success:function (data) {
                        if (data.data.result == true) {
                            alert('data berhasil dimasukkan');
                            $("#submit_jenis").trigger('reset');
                            $('#add_jenis').modal('hide');
                            tabel_jenis();
                            selectInit();
                        }else{
                            alert('data gagal dimasukkan');
                        }
                    }
                });
                return false;
            });
    }

    var update_jenis = function () {
        $('#update_jenis').submit(function(e) {
                e.preventDefault();
                formData = new FormData($(this)[0]);
                $.ajax({
                    url: root+'index.php/jenis/update',
                    type: 'POST',
                    data: formData,
                    async:true,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success:function (data) {
                        if (data.data.result == true) {
                            alert('data berhasil dirubah');
                            $("#update_jenis").trigger('reset');
                            $('#edit_jenis').modal('hide');
                            tabel_jenis();
                            selectInit();
                        }else{
                            alert('data gagal dimasukkan');
                        }
                    }
                });
                return false;
            });
    }

    var submit_kategori = function () {
        $('#submit_kategori').submit(function(e) {
                e.preventDefault();
                formData = new FormData($(this)[0]);
                $.ajax({
                    url: root+'index.php/kategori/submit',
                    type: 'POST',
                    data: formData,
                    async:true,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success:function (data) {
                        console.log(data);
                        if (data.data.result == true) {
                            alert('data berhasil dimasukkan');
                            $("#submit_kategori").trigger('reset');
                            $('#add_kategori').modal('hide');
                            tabel_kategori();
                            selectInit();
                        }else{
                            alert('data gagal dimasukkan');
                        }
                    }
                });
                return false;
            });
    }

    var update_kategori = function () {
        $('#update_kategori').submit(function(e) {
                e.preventDefault();
                formData = new FormData($(this)[0]);
                $.ajax({
                    url: root+'index.php/kategori/update',
                    type: 'POST',
                    data: formData,
                    async:true,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success:function (data) {
                        if (data.data.result == true) {
                            alert('data berhasil dimasukkan');
                            $("#update_kategori").trigger('reset');
                            $('#edit_kategori').modal('hide');
                            tabel_kategori();
                            selectInit();
                        }else{
                            alert('data gagal dimasukkan');
                        }
                    }
                });
                return false;
            });
    }

    var tabel_buku = function () {
        $('#tabel_buku').DataTable().destroy();
        $('#tabel_buku tbody').empty();
        $('#tabel_buku').DataTable({
            "searchHighlight": true,

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
            // So when dropdowns used the scrollable div should be removed. 
            //"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

            "lengthMenu": [
                [25, 50, 100, -1],
                [25, 50, 100, "All"] // change per page values here
            ],

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},


            // set the initial value
            "pageLength": 25,
            "processing": true,
            "language": {
                        "sProcessing":   "Sedang memproses...",
                        "sLengthMenu":   "Tampilkan _MENU_ entri",
                        "sZeroRecords":  "Tidak ditemukan data yang sesuai",
                        "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                        "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
                        "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                        "sInfoPostFix":  "",
                        "sSearch":       "Cari:",
                        "sUrl":          "",
                        "oPaginate": {
                            "sFirst":    "Pertama",
                            "sPrevious": "Sebelumnya",
                            "sNext":     "Selanjutnya",
                            "sLast":     "Terakhir"
                        }
                    },
            "ajax":root + "index.php/buku/get_buku",
            "columns": [
                    {   
                        "data": "nomor",
                        "orderable": true, 
                        "width":"5%" 
                    },
                    {   "data": "no_buku", 
                        "orderable": true
                    },
                    {   "data": "judul", 
                        "orderable": true
                    },
                    {   "data": "penyusun_buku", 
                        "orderable": true
                    },
                    {   "data": "tahun", 
                        "orderable": true
                    },
                    {   "data": "nama_kabupaten",
                        "orderable": false
                    },
                    {   "data": "jenis_buku",
                        "orderable": false
                    },
                    {   "data": "bidang_buku",
                        "orderable": false
                    },
                    {   "data": "rakBuku",
                        "orderable": false
                    },
                    {   "data": null,
                        "render" : function (data) {
                            return '<div class="row">' +
                                        
                                        '<div class="col-xs-12" style="margin-bottom:10px">' +
                                            '<a title="Show" href="' + root + 'index.php/buku/detail/' + data.id_buku + '" class="btn btn-sm btn-info btn-square"><i class="fa fa-search"></i> Detail</a>' +
                                        '</div>' +
                                        '<div class="col-xs-12" style="margin-bottom:10px">' +
                                            '<a title="Hapus" href="' + root + 'index.php/buku/edit/' + data.id_buku + '" class="btn btn-sm btn-success btn-square"><i class="fa fa-pencil-square-o"></i> Edit</a>' +
                                        '</div>' +
                                        '<div class="col-xs-12" style="margin-bottom:10px">' +
                                            '<a title="Hapus" href="' + root + 'index.php/buku/delete/' + data.id_buku + '" class="btn btn-sm btn-danger btn-square" onclick="return confirm(\'Apakah Anda Yakin Untuk Menghapus Data Ini?\')"><i class="fa fa-ban"></i> Hapus</a>' +
                                        '</div>' +
                                    '</div>';
                        },
                        "orderable": false
                    }
                ],
            "order": [
                [0, "asc"]
            ] // set first column as a default sort by asc
        });
    }

    var tabel_bidang = function () {
        $('#tabel_bidang').DataTable().destroy();
        $('#tabel_bidang tbody').empty();
        $('#tabel_bidang').DataTable({
            "searchHighlight": true,

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
            // So when dropdowns used the scrollable div should be removed. 
            //"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

            "lengthMenu": [
                [25, 50, 100, -1],
                [25, 50, 100, "All"] // change per page values here
            ],

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},


            // set the initial value
            "pageLength": 25,
            "processing": true,
            "language": {
                        "sProcessing":   "Sedang memproses...",
                        "sLengthMenu":   "Tampilkan _MENU_ entri",
                        "sZeroRecords":  "Tidak ditemukan data yang sesuai",
                        "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                        "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
                        "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                        "sInfoPostFix":  "",
                        "sSearch":       "Cari:",
                        "sUrl":          "",
                        "oPaginate": {
                            "sFirst":    "Pertama",
                            "sPrevious": "Sebelumnya",
                            "sNext":     "Selanjutnya",
                            "sLast":     "Terakhir"
                        }
                    },
            "ajax":root + "index.php/bidang/get_bidang",
            "columns": [
                    {   
                        "data": "nomor",
                        "orderable": true, 
                        "width":"5%" 
                    },
                    {   "data": "bidang", 
                        "orderable": true
                    },
                    {   "data": null,
                        "render" : function (data) {
                            return '<div class="row">' +
                                        '<div class="col-xs-12" style="margin-bottom:10px">' +
                                            '<a class="btn btn-sm btn-success btn-square" onclick="updateBidangModal(' + data.id_bidang + ')"><i class="fa fa-pencil-square-o"></i> Edit</a>' +
                                        '</div>' +
                                        '<div class="col-xs-12" style="margin-bottom:10px">' +
                                            '<a title="Hapus" href="' + root + 'index.php/bidang/delete/' + data.id_bidang + '" class="btn btn-sm btn-danger btn-square" onclick="return confirm(\'Apakah Anda Yakin Untuk Menghapus Data Ini?\')"><i class="fa fa-ban"></i> Delete</a>' +
                                        '</div>' +
                                    '</div>';
                        },
                        "orderable": false, 
                        "width":"15%" 
                    }
                ],
            "order": [
                [0, "asc"]
            ] // set first column as a default sort by asc
        });
    }

    var tabel_jenis = function () {
        $('#tabel_jenis').DataTable().destroy();
        $('#tabel_jenis tbody').empty();
        $('#tabel_jenis').DataTable({
            "searchHighlight": true,
            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
            // So when dropdowns used the scrollable div should be removed. 
            //"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

            "lengthMenu": [
                [25, 50, 100, -1],
                [25, 50, 100, "All"] // change per page values here
            ],

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},


            // set the initial value
            "pageLength": 25,
            "processing": true,
            "language": {
                        "sProcessing":   "Sedang memproses...",
                        "sLengthMenu":   "Tampilkan _MENU_ entri",
                        "sZeroRecords":  "Tidak ditemukan data yang sesuai",
                        "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                        "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
                        "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                        "sInfoPostFix":  "",
                        "sSearch":       "Cari:",
                        "sUrl":          "",
                        "oPaginate": {
                            "sFirst":    "Pertama",
                            "sPrevious": "Sebelumnya",
                            "sNext":     "Selanjutnya",
                            "sLast":     "Terakhir"
                        }
                    },
            "ajax":root + "index.php/jenis/get_jenis",
            "columns": [
                    {   
                        "data": "nomor",
                        "orderable": true, 
                        "width":"5%" 
                    },
                    {   "data": "jenis_buku", 
                        "orderable": true
                    },
                    {   "data": null,
                        "render" : function (data) {
                            return '<div class="row">' +
                                        '<div class="col-xs-12" style="margin-bottom:10px">' +
                                            '<a class="btn btn-sm btn-success btn-square" onclick="updateJenisModal(' + data.id_jenis + ')"><i class="fa fa-pencil-square-o"></i> Edit</a>' +
                                        '</div>' +
                                        '<div class="col-xs-12" style="margin-bottom:10px">' +
                                            '<a title="Hapus" href="' + root + 'index.php/jenis/delete/' + data.id_jenis + '" class="btn btn-sm btn-danger btn-square" onclick="return confirm(\'Apakah Anda Yakin Untuk Menghapus Data Ini?\')"><i class="fa fa-ban"></i> Delete</a>' +
                                        '</div>' +
                                    '</div>';
                        },
                        "orderable": false, 
                        "width":"15%" 
                    }
                ],
            "order": [
                [0, "asc"]
            ] // set first column as a default sort by asc
        });
    }

    var tabel_kategori = function () {
        $('#tabel_kategori').DataTable().destroy();
        $('#tabel_kategori tbody').empty();
        $('#tabel_kategori').DataTable({
            "searchHighlight": true,
            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
            // So when dropdowns used the scrollable div should be removed. 
            //"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

            "lengthMenu": [
                [25, 50, 100, -1],
                [25, 50, 100, "All"] // change per page values here
            ],

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},


            // set the initial value
            "pageLength": 25,
            "processing": true,
            "language": {
                        "sProcessing":   "Sedang memproses...",
                        "sLengthMenu":   "Tampilkan _MENU_ entri",
                        "sZeroRecords":  "Tidak ditemukan data yang sesuai",
                        "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                        "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
                        "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                        "sInfoPostFix":  "",
                        "sSearch":       "Cari:",
                        "sUrl":          "",
                        "oPaginate": {
                            "sFirst":    "Pertama",
                            "sPrevious": "Sebelumnya",
                            "sNext":     "Selanjutnya",
                            "sLast":     "Terakhir"
                        }
                    },
            "ajax":root + "index.php/kategori/get_kategori",
            "columns": [
                    {   
                        "data": "nomor",
                        "orderable": true, 
                        "width":"5%" 
                    },
                    {   "data": "nama_kategori", 
                        "orderable": true
                    },
                    {   "data": null,
                        "render" : function (data) {
                            return '<div class="row">' +
                                        '<div class="col-xs-12" style="margin-bottom:10px">' +
                                            '<a class="btn btn-sm btn-success btn-square" onclick="updateKategoriModal(' + data.id + ')"><i class="fa fa-pencil-square-o"></i> Edit</a>' +
                                        '</div>' +
                                        '<div class="col-xs-12" style="margin-bottom:10px">' +
                                            '<a title="Hapus" href="' + root + 'index.php/kategori/delete/' + data.id + '" class="btn btn-sm btn-danger btn-square" onclick="return confirm(\'Apakah Anda Yakin Untuk Menghapus Data Ini?\')"><i class="fa fa-ban"></i> Delete</a>' +
                                        '</div>' +
                                    '</div>';
                        },
                        "orderable": false, 
                        "width":"15%" 
                    }
                ],
            "order": [
                [0, "asc"]
            ] // set first column as a default sort by asc
        });
    }

    var update_prakata = function () {
        $('#update_prakata').submit(function(e) {
                e.preventDefault();
                formData = new FormData($(this)[0]);
                $.ajax({
                    url: root+'index.php/prakata/update',
                    type: 'POST',
                    data: formData,
                    async:true,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success:function (data) {
                        console.log(data);
                        if (data.data.result == true) {
                            alert('data berhasil dirubah');
                            $("#update_prakata").trigger('reset');
                            selectInit();
                        }else{
                            alert('data gagal dimasukkan');
                        }
                    }
                });
                return false;
            });
    }

    var tabel_user = function () {
        $('#tabel_user').DataTable().destroy();
        $('#tabel_user tbody').empty();
        $('#tabel_user').DataTable({
            "searchHighlight": true,
            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
            // So when dropdowns used the scrollable div should be removed. 
            //"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

            "lengthMenu": [
                [25, 50, 100, -1],
                [25, 50, 100, "All"] // change per page values here
            ],

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},


            // set the initial value
            "pageLength": 25,
            "processing": true,
            "language": {
                        "sProcessing":   "Sedang memproses...",
                        "sLengthMenu":   "Tampilkan _MENU_ entri",
                        "sZeroRecords":  "Tidak ditemukan data yang sesuai",
                        "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                        "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
                        "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                        "sInfoPostFix":  "",
                        "sSearch":       "Cari:",
                        "sUrl":          "",
                        "oPaginate": {
                            "sFirst":    "Pertama",
                            "sPrevious": "Sebelumnya",
                            "sNext":     "Selanjutnya",
                            "sLast":     "Terakhir"
                        }
                    },
            "ajax":root + "index.php/user/get_user",
            "columns": [
                    {   
                        "data": "nomor",
                        "orderable": true, 
                        "width":"5%" 
                    },
                    {   "data": "username", 
                        "orderable": true
                    },
                    {   "data": null,
                        "render" : function (data) {
                            var level = '';
                            if ( data.level == 1 ) {
                                level = 'Penyusun'; 
                            }else{
                                level = 'Admin';
                            }

                            return level;
                        },
                        "orderable": false, 
                        "width":"15%" 
                    },
                    {   "data": null,
                        "render" : function (data) {
                            if ( data.disable == 0 ) {
                                var content =  '<a title="Hapus" href="javascript:void(0)" class="btn btn-sm btn-danger btn-square" onclick="return confirm(\'Apakah Anda Yakin Untuk Menghapus Data Ini?\')"><i class="fa fa-ban"></i> Non Aktifkan</a>';
                            }else{
                                var content =  '<a title="Hapus" href="javascript:void(0)" class="btn btn-sm btn-succes btn-square" onclick="return confirm(\'Apakah Anda Yakin Untuk Menghapus Data Ini?\')"><i class="fa fa-ban"></i> Aktifkan</a>';
                            }

                            return '<div class="row">' +
                                        '<div class="col-xs-12" style="margin-bottom:10px">' +
                                            '<a class="btn btn-sm btn-info btn-square" href="' + root + 'index.php/penyusun/update/' + data.id_user + '"><i class="fa fa-pencil-square-o"></i> Edit</a>' +
                                        '</div>' +
                                        '<div class="col-xs-12" style="margin-bottom:10px">' +
                                            content +
                                        '</div>' +
                                    '</div>';
                        },
                        "orderable": false, 
                        "width":"15%" 
                    }
                ],
            "order": [
                [0, "asc"]
            ] // set first column as a default sort by asc
        });
    }

    var submit_user = function () {
        $('#submit_user').submit(function(e) {
                e.preventDefault();
                formData = new FormData($(this)[0]);
                $.ajax({
                    url: root+'index.php/user/submit',
                    type: 'POST',
                    data: formData,
                    async:true,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success:function (data) {
                        if (data.data.result == true) {
                            alert('data berhasil dimasukkan');
                            $("#submit_user").trigger('reset');
                            $('#add_user').modal('hide');
                            tabel_user();
                            selectInit();
                        }else{
                            alert('data gagal dimasukkan');
                        }
                    }
                });
                return false;
            });
    }

    // public functions
    return {

        //main function
        init: function () {
            //initialize here something.     
            tabel_buku(); 
            tabel_bidang();
            tabel_jenis();
            table_file();
            tabel_kategori();
            tabel_user();

            submit_jenis();
            submit_buku();
            submit_bidang();
            submit_kategori();

            update_bidang();
            update_jenis();
            update_buku();
            update_kategori();

            selectInit();
            selectFile();
        },

        //some helper function
        doSomeStuff: function () {
            myFunc();
        }

    };

}();

/***
Usage
***/
Custom.init();
// Custom.doSomeStuff();