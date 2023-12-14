@extends('layouts.master')

@section('title')
    Daftar Order Customer
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Daftar Order Customer</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-body table-responsive">
                <form action="" method="post" class="form-member">
                    @csrf
                    <table class="table table-stiped table-bordered">
                        <thead>
                            <th width="5%">
                                <input type="checkbox" name="select_all" id="select_all">
                            </th>
                            <th width="5%">No</th>
                            <th>No Order</th>
                            <th>Paket</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Berat</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            {{-- <th width="15%"><i class="fa fa-cog"></i></th> --}}
                        </thead>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

@includeIf('pelanggan.form')
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
            url: '{{ route('pelanggan.data') }}',
        },
        columns: [
            {data: 'select_all', searchable: false, sortable: false},
            {data: 'DT_RowIndex', searchable: false, sortable: false},
            {data: 'id'},
            {data: 'paket'},
            {data: 'name'},
            {data: 'address'},
            {data: 'phone'},
            {data: 'qty'},
            {data: 'total_price'},
            {data: 'status'},
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
        $('#modal-form .modal-title').text('Tambah Pelanggan');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=nama]').focus();
    }

    // Fungsi untuk menampilkan modal form edit data
    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Pelanggan');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=nama]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=nama]').val(response.nama);
                $('#modal-form [name=telepon]').val(response.telepon);
                $('#modal-form [name=alamat]').val(response.alamat);
            })
            .fail((errors) => {
                alert('Tidak dapat menampilkan data');
                return;
            });
    }

    // Fungsi untuk mencetak data pelanggan
    function cetakMember(url) {
        if ($('input:checked').length < 1) {
            alert('Pilih data yang akan dicetak');
            return;
        } else {
            $('.form-member')
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

