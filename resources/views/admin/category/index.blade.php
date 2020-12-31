@extends('admin.templates.default')

@section('title', 'Data Categories')

@section('content')
    <div class="class card-primary">
        <div class="card-header">
            <h3 class="card-title">Data Categories</h3>
        </div>
        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-info">{{ session('message')}}</div>
            @endif
            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary mb-4">Add Category</a>
            <table id="dataTable" class="table table-bordered table-hover ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Slug</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script>
        $(function () {
            $('#dataTable').DataTable({
                "processing" : true,
                "serverSide" : true,
                "responsive" : true,
                "autoWidth" : true,
                ajax : '{{ route('admin.categories.data') }}',
                columns : [
                    {data: 'DT_RowIndex', orderable:false, searchable:false},
                    {data: 'name'},
                    {data: 'slug'},
                    {data: 'action'},
                ]
            })
        })

        $('#dataTable').on('click', 'button#delete', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            Swal.fire({
            title: 'Kamu Yakin Hapus Data Ini?',
            text: "Data Yang Dihapus Tidak Bisa Dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oke, Hapus!',
            cancelButtonText : 'Batalkan',
            }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "DELETE",
                    url: "/admin/categories/" + id,
                    data: {
                        "id": id,
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(data){
                        Swal.fire(
                            'Dihapus!',
                            'Data Berhasil Dihapus.',
                            'success'
                            )

                            location.reload(true);
                    }
                })
                
            }
            })
        })

        
    </script>
@endpush