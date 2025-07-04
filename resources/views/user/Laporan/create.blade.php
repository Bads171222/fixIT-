@extends('layouts_user.template')

@section('content')
<div class="bg-green-700 text-white text-lg font-bold p-4 rounded-br-2xl">
    Laporan Kerusakan
</div>

@include('user.laporan.partials.errors')

<form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="p-8">
        <div class="grid md:grid-cols-2 gap-8">
            @include('user.laporan.partials.upload')
            @include('user.laporan.partials.dropdown')
        </div>

        @include('user.laporan.partials.deskripsi')

        <div class="mt-8 flex justify-end">
            <button class="bg-green-700 text-white px-6 py-2 rounded-md hover:bg-green-800 transition" type="submit">
                Kirim
            </button>
        </div>
    </div>
</form>
@endsection

@push('js')
    @include('user.laporan.partials.script')
@endpush
