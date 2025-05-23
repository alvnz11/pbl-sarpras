@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Data Fasilitas Umum</h5>
        <button type="button" data-bs-toggle="modal" data-bs-target="#createUser" class="btn btn-outline-primary">
            <i class="bx bx-plus me-1"></i> Tambah
        </button>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table table-striped">
            <thead class="table-primary">
                <tr>
                    <th style="font-weight: bold;">Nama Periode</th>
                    <th style="font-weight: bold;">Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($periodes as $periode)
                    <tr>
                        <td>{{ $periode->nama_periode }}</td>
                        <td>
                            <div class="demo-inline-spacing">
                                <div class="btn-group">
                                <button
                                    type="button"
                                    class="btn btn-primary btn-icon rounded-pill dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="icon-base bx bx-dots-vertical-rounded" style="color: white;"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item edit-periode" href="javascript:void(0);" data-id="{{ $periode->periode_id }}">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);" onclick="showDeleteModal('{{ $periode->periode_id }}', '{{ $periode->nama }}')">Hapus</a></li>
                                </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-end mt-3 me-3">
        @if ($periodes->hasPages())
            <x-pagination :paginator="$periodes" />
        @endif
    </div>
    
</div>
@endsection
