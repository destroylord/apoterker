<x-app-layout>
    <x-slot name="header">
            {{ __('Tambah Obat') }}
    </x-slot>


    <div class="row">
    <div class="col-lg-6">
    <div class="card">
        <div class="card-header">Tambah Obat</div>
        <div class="card-body">

            <form action="{{ route('admin.obat.store') }}" method="POST">
                @csrf
                @include('admin.drug.partials.form')
            </form>
        </div>
    </div>
        </div>
    </div>
</x-app-layout>