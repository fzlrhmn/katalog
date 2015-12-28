$('#login_result').hide();
$('#form_login').submit(function(e) {
    e.preventDefault();
    formData = new FormData($(this)[0]);
    $.ajax({
        url: root+'index.php/login/ajax/submit',
            type: 'POST',
            data: formData,
            async:false,
            cache:false,
            processData: false,
            contentType: false,
            success:function (data) {
                $('#login_result').empty();
                $('#login_result').removeClass('alert-success');
                $('#login_result').removeClass('alert-danger');
                if ( data.stat == true ) {
                    $('#login_result').show();
                    $('#login_result').addClass('alert-success');
                    $('#login_result').html(data.text);
                    setTimeout(  function(){ 
                        window.location = root+"index.php/buku";
                    }, 3000); 
                }else{
                    $('#login_result').show();
                    $('#login_result').addClass('alert-danger');
                    $('#login_result').html(data.text);
                }
            }
    });
    return false;
});

function datatablesFile(id_buku) {
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
                    "sLengthMenu":   "_MENU_ ",
                    "sZeroRecords":  "Tidak ditemukan data yang sesuai",
                    "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
                    "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                    "sInfoPostFix":  "",
                    "sSearch":       "",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Pertama",
                        "sPrevious": "Sebelumnya",
                        "sNext":     "Selanjutnya",
                        "sLast":     "Terakhir"
                    }
                },
        "ajax":root + "index.php/front/files/" + id_buku,
        "columns": [
                {   
                    "data": "nomor",
                    "orderable": true, 
                    "width":"15%" 
                },
                {   "data": "kategori", 
                    "orderable": true
                },
                {   "data": null,
                    "render" : function (data) {
                        return '<div class="row">' +
                                    '<div class="col-xs-12" style="margin-bottom:10px">' +
                                        '<a title="Show" href="' + root + '/file/' + data.file + '" class="btn btn-sm btn-info btn-square" target="_blank"><i class="fa fa-external-link"></i> Lihat</a>' +
                                    '</div>' +
                                '</div>';
                    },
                    "orderable": false, 
                    "width":"20%" 
                }
            ],
        "order": [
            [0, "asc"]
        ] // set first column as a default sort by asc
    });
}

function init_front () {
    $.ajax({
            url: root+'index.php/front/get_buku',
                type: 'GET',
                async:false,
                cache:false,
                processData: false,
                contentType: false,
                success:function (data) {
                    $('#rak_buku').empty();
                    $('input.form-control').val('');
                    $('select.form-control').val(0);
                    $.each(data.buku, function (i,data) {
                        var cover       = data.cover;
                        var id_buku     = data.id_buku;
                        var judul       = data.judul;
                        var content =   '<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">' +
                                        '<div class="services-group wow animated fadeInLeft" data-wow-offset="40">' +
                                        '<img style="width:100%" src="' + root + '/file/' + cover + '"/>' +
                                        '<p class="services-more"><a href="javascript:void(0)" onclick="modalBuku(' + id_buku + ')">' + judul + '</a></p>' +
                                        '</div>' +
                                        '</div>';
                        $('#rak_buku').append(content);
                    })
                    
                }
        });
}

function modalBuku (id_buku) {
    url = root + 'index.php/front/detail_buku/' + id_buku;
    $.getJSON(url, function (data) {
        console.log(data[0].rakBuku);
        var nomor_buku      = data[0].no_buku;
        var judul           = data[0].judul;
        var bidang_buku     = data[0].bidang_buku;
        var jenis_buku      = data[0].jenis_buku;
        var penyusun_buku   = data[0].penyusun_buku;
        var nama_kabupaten  = data[0].nama_kabupaten;
        var tahun           = data[0].tahun;
        var deskripsi       = data[0].deskripsi;
        var rak_buku         = data[0].rakBuku;

        $('#no_buku').html(': ' + nomor_buku);
        $('#judul').html(': ' + judul);
        $('#rakBuku').html(': ' + rak_buku);
        $('#nama_kabupaten').html(': ' + nama_kabupaten);
        $('#bidang_buku').html(': ' + bidang_buku);
        $('#jenis_buku').html(': ' + jenis_buku);
        $('#penyusun_buku').html(': ' + penyusun_buku);
        $('#deskripsi').html(': ' + deskripsi);

        datatablesFile(id_buku);
        $('#detail_buku').modal('show')
    })
}

$('#form_cari').submit(function(e) {
    e.preventDefault();
    formData = new FormData($(this)[0]);
    $.ajax({
        url: root+'index.php/front/submit',
            type: 'POST',
            data: formData,
            async:false,
            cache:false,
            processData: false,
            contentType: false,
            success:function (data) {
                $('#rak_buku').empty();
                console.log(data);
                $.each(data.buku, function (i,data) {
                    var cover       = data.cover;
                    var id_buku     = data.id_buku;
                    var judul       = data.judul;
                    var content =   '<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">' +
                                    '<div class="services-group wow animated fadeInLeft" data-wow-offset="40">' +
                                    '<img style="width:100%" src="' + root + '/file/' + cover + '"/>' +
                                    '<p class="services-more"><a href="javascript:void(0)" onclick="modalBuku(' + id_buku + ')">' + judul + '</a></p>' +
                                    '</div>' +
                                    '</div>';
                    $('#rak_buku').append(content);
                })
            }
    });
    return false;
});

init_front();