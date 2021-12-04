@extends('layouts.main')

@section('content')
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    Edit Data Produk
                </h3>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__body">
                <form action="{{ route('produkUpdate', ['id' => $produk->id_produk]) }}" method="POST"
                    class="form-send">
                    @csrf
                    @method('put')
                    <div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group">
                            <label>
                                Nama Produk
                            </label>
                            <input type="text" class="form-control m-input" name="nama_produk" required
                                value="{{ $produk->nama_produk }}">
                        </div>
                        <div class="form-group m-form__group">
                            <label>
                                Kategori Produk
                            </label>
                            <input type="text" class="form-control m-input" name="kategori_produk" required
                                value="{{ $produk->kategori_produk }}">
                        </div>
                        <div class="form-group m-form__group">
                            <label>
                                Penjelasan
                            </label>
                            <textarea class="form-control m-input" name="penjelasan_produk" cols="30" rows="5"
                                required>{{ $produk->penjelasan_produk }}</textarea>
                        </div>
                        <div class="form-group m-form__group">
                            <label>
                                Harga Produk
                            </label>
                            <input type="number" class="form-control m-input" name="harga_produk" required
                                value="{{ $produk->harga_produk }}">
                        </div>
                        <div class="form-group m-form__group">
                            <label>
                                Total Terjual
                            </label>
                            <input type="number" class="form-control m-input" name="total_terjual" required
                                value="{{ $produk->total_terjual }}">
                        </div>
                        <div class="form-group m-form__group">
                            <label>
                                Total Views
                            </label>
                            <input type="number" class="form-control m-input" name="total_views" required
                                value="{{ $produk->total_views }}">
                        </div>
                    </div>

                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions mt-3">
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                            <a href="{{ route('produkList') }}" class="btn btn-outline-primary">
                                Kembali ke list
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
