@extends('layouts.master')

@section('title')
    Daftar Ulasan
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Daftar Ulasan</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-body table-responsive">
                <form action="" method="post" class="form-contact">
                    @csrf
                    <table class="table table-stiped table-bordered">
                        <thead>
                            {{-- <th width="5%">
                                <input type="checkbox" name="select_all" id="select_all">
                            </th> --}}
                            <th width="5%">No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            {{-- <th width="15%"><i class="fa fa-cog"></i></th> --}}
                        </thead>
                        <tbody>
                            {{-- Tabel akan diisi dengan data kontak menggunakan DataTables --}}
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

@includeIf('contact.form') <!-- Include form for adding/editing contact -->

@endsection

@push('scripts')
<script>
let table;
$(function () {
    table = $('.table').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        autoWidth: false,
        ajax: {
            url: '{{ route('contact.data') }}', // Sesuaikan dengan rute yang tepat untuk mengambil data contact
        },
        columns: [
            // {data: 'select_all', searchable: false, sortable: false}, //hapus selec all
            {data: 'DT_RowIndex', searchable: false, sortable: false},
            {data: 'name'},
            {data: 'email'},
            {data: 'message'},
            // Kolom lainnya sesuaikan dengan data yang ingin ditampilkan
        ]
    });

    // Fungsi untuk menambah data
    $('#modal-form').validator().on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
                .done((response) => {
                    $('#modal-form').modal('hide');
                    table.ajax.reload();
                })
                .fail((errors) => {
                    alert('Tidak dapat menyimpan data');
                    return;
                });
        }
    });

    // Fungsi untuk menghapus data
    function deleteData(url) {
        if (confirm('Yakin ingin menghapus data terpilih?')) {
            $.post(url, {
                    '_token': $('[name=csrf-token]').attr('content'),
                    '_method': 'delete'
                })
                .done((response) => {
                    table.ajax.reload();
                })
                .fail((errors) => {
                    alert('Tidak dapat menghapus data');
                    return;
                });
        }
    }

    // Fungsi untuk menampilkan modal form tambah data
    function addForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Tambah Contact');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=name]').focus();
    }

    // Fungsi untuk menampilkan modal form edit data
    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Contact');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=name]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=name]').val(response.name);
                $('#modal-form [name=email]').val(response.email);
                $('#modal-form [name=message]').val(response.message);
                // Isi kolom lainnya sesuai kebutuhan
            })
            .fail((errors) => {
                alert('Tidak dapat menampilkan data');
                return;
            });
    }

    // Fungsi untuk mencetak data contact
    function cetakContact(url) {
        if ($('input:checked').length < 1) {
            alert('Pilih data yang akan dicetak');
            return;
        } else {
            $('.form-contact')
                .attr('target', '_blank')
                .attr('action', url)
                .submit();
        }
    }

    // Fungsi untuk memilih semua checkbox pada tabel
    $('[name=select_all]').on('click', function () {
        $(':checkbox').prop('checked', this.checked);
    });
});
</script>
@endpush
