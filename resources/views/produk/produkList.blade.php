@extends('layouts.main')

@section('js')
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('content')
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    Data Produk
                </h3>
            </div>
            <a href="{{ route('produkCreate') }}" class="btn btn-primary">Tambah Produk</a>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__body">

                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Produk</th>
                                <th>Kategori</th>
                                <th>Penjelasan</th>
                                <th>Harga</th>
                                <th>Total Jual</th>
                                <th>Total Views</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_produk as $produk)
                                <tr>
                                    <td>{{ $produk->id_produk }}</td>
                                    <td>{{ $produk->nama_produk }}</td>
                                    <td>{{ $produk->kategori_produk }}</td>
                                    <td>{{ $produk->penjelasan_produk }}</td>
                                    <td>Rp. {{ $produk->harga_produk }}</td>
                                    <td>{{ $produk->total_terjual }}</td>
                                    <td>{{ $produk->total_views }}</td>
                                    <td>
                                        <a href="{{ route('produkEdit', [$produk->id_produk]) }}"
                                            class="badge badge-warning p-2">Edit</a>
                                        <button type="button" class="badge badge-danger p-2 border-0 btn-hapus"
                                            data-route="{{ route('produkDelete', [$produk->id_produk]) }}">Hapus</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
