@extends('layouts.public')
@section('content')
<div class="flex flex-col gap-6 bg-white">
    <x-public-header :title="__('Team List')" :description="__('')" />

    @session('success')
    <div class="flex items-center p-2 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-green-900 dark:text-green-300 dark:border-green-800" role="alert">
        <svg class="flex-shrink-0 w-8 h-8 mr-1 text-green-700 dark:text-green-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
        </svg>
        <span class="font-medium"> {{ $value }} </span>
    </div>
    @endsession

    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <div class="w-full mt-6 rounded-lg shadow p-3">
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <table id="teams-table" class="min-w-full bg-white text-sm rounded-lg">
                <thead class="bg-indigo-600">
                    <tr>
                        <th class="py-3 text-left font-semibold text-white uppercase tracking-wider whitespace-nowrap">{{ __('School Name (Thana, District)') }}</th>
                        <th class="py-3 text-left font-semibold text-white uppercase tracking-wider whitespace-nowrap">{{ __("Team Number") }}</th>
                        <th class="py-3 text-left font-semibold text-white uppercase tracking-wider whitespace-nowrap">{{ __("Players' Name") }}</th>
                        <th class="py-3 text-left font-semibold text-white uppercase tracking-wider whitespace-nowrap">{{ __("Captain's Name") }}</th>
                        <th class="py-3 text-left font-semibold text-white uppercase tracking-wider whitespace-nowrap">{{ __("Mentor's Name") }}</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100"></tbody>
            </table>
        </div>
    </div>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400 mt-4">
        {{ __('You need to register as an individual before creating a team.') }}
        <a href="{{ route('application.applicantRegister') }}" class="text-indigo-600 hover:underline">
            {{ __('Register here.') }}
        </a>
    </div>
@endsection

@section('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
    <style>
        /* Tailwind + DataTables custom styles */
        table.dataTable.no-footer { border-bottom: none; }
        table.dataTable thead th, table.dataTable thead td { border-bottom: none; }
        table.dataTable tbody tr { transition: background 0.2s; }
        table.dataTable tbody tr:hover { background-color: #f1f5f9; }
        .dataTables_wrapper .dataTables_paginate .paginate_button { color: #6366f1 !important; border-radius: 0.375rem; }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current { background: #6366f1 !important; color: #fff !important; }
        .dataTables_wrapper .dataTables_filter input { border-radius: 0.375rem; border: 1px solid #d1d5db; padding: 0.25rem 0.5rem; margin-bottom: 0.5rem; }
        .dataTables_wrapper .dataTables_length select { border-radius: 0.375rem; border: 1px solid #d1d5db; padding: 0.25rem 0.5rem; }
        /* Responsive tweaks */
        @media (max-width: 640px) {
            table.dataTable th, table.dataTable td {
                padding-left: 0.5rem !important;
                padding-right: 0.5rem !important;
                font-size: 0.85rem;
            }
            .dataTables_wrapper .dataTables_filter input,
            .dataTables_wrapper .dataTables_length select {
                width: 100% !important;
                margin-bottom: 0.5rem;
            }
        }
        /* Make DataTables modal responsive */
        div.dtr-modal {
            max-width: 95vw !important;
            width: 95vw !important;
            left: 2.5vw !important;
            right: 2.5vw !important;
            padding: 0 !important;
        }
        div.dtr-modal-content {
            max-width: 100vw !important;
            overflow-x: auto;
            padding: 1rem;
            word-break: break-word;
            white-space: normal !important;
            line-height: 1.5;
        }

        table, td, tr {
            border: 1px solid #e5e7eb;
        }

        div.dtr-modal-content table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            background: #fff;
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 2px 8px 0 rgba(0,0,0,0.08);
        }
        div.dtr-modal-content tr {
            border-bottom: 1px solid #f1f5f9;
        }
        div.dtr-modal-content tr:last-child {
            border-bottom: none;
        }
        div.dtr-modal-content td {
            padding: 0.75rem 1rem;
            font-size: 1rem;
            vertical-align: top;
            color: #334155;
            background: #fff;
            line-height: 1.5;
            word-break: break-word;
        }
        div.dtr-modal-content td:first-child {
            font-weight: 600 !important;
            color: #6366f1;
            background: #f1f5f9;
            min-width: 120px;
            border-right: 1px solid #e5e7eb;
        }
        @media (max-width: 640px) {
            div.dtr-modal-content td, div.dtr-modal-content td:first-child {
                font-size: 0.95rem;
                padding: 0.5rem;
            }
        }

        /* Style DataTables Responsive expand/collapse button as a modern inline icon with custom SVG */
        table.dataTable.dtr-inline.collapsed > tbody > tr > td.dtr-control:before,
        table.dataTable.dtr-inline.collapsed > tbody > tr > th.dtr-control:before {
            background-color: #6366f1 !important;
            color: #fff !important;
            border-radius: 9999px !important;
            box-shadow: 0 2px 6px 0 rgba(99,102,241,0.15);
            font-weight: bold;
            font-size: 1.1rem;
            width: 1.5rem;
            height: 1.5rem;
            line-height: 1.5rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: none !important;
            margin-right: 0.5rem;
            vertical-align: middle;
            transition: background 0.2s;
            position: relative;
            top: 0.15rem;
            content: '';
            background-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path fill="white" d="M853.333333 213.333333a42.666667 42.666667 0 0 0-42.666666-42.666666h-213.333334a42.666667 42.666667 0 0 0 0 85.333333h109.653334l-139.946667 140.373333a42.666667 42.666667 0 0 0 0 60.586667 42.666667 42.666667 0 0 0 60.586667 0L768 316.586667V426.666667a42.666667 42.666667 0 0 0 42.666667 42.666666 42.666667 42.666667 0 0 0 42.666666-42.666666zM456.96 567.04a42.666667 42.666667 0 0 0-60.586667 0L256 706.986667V597.333333a42.666667 42.666667 0 0 0-42.666667-42.666666 42.666667 42.666667 0 0 0-42.666666 42.666666v213.333334a42.666667 42.666667 0 0 0 42.666666 42.666666h213.333334a42.666667 42.666667 0 0 0 0-85.333333H316.586667l140.373333-140.373333a42.666667 42.666667 0 0 0 0-60.586667z"/></svg>');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 1.1rem 1.1rem;
        }
        table.dataTable.dtr-inline.collapsed > tbody > tr.parent > td.dtr-control:before,
        table.dataTable.dtr-inline.collapsed > tbody > tr.parent > th.dtr-control:before {
            background-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path fill="white" d="M853.333333 213.333333a42.666667 42.666667 0 0 0-42.666666-42.666666h-213.333334a42.666667 42.666667 0 0 0 0 85.333333h109.653334l-139.946667 140.373333a42.666667 42.666667 0 0 0 0 60.586667 42.666667 42.666667 0 0 0 60.586667 0L768 316.586667V426.666667a42.666667 42.666667 0 0 0 42.666667 42.666666 42.666667 42.666667 0 0 0 42.666666-42.666666zM456.96 567.04a42.666667 42.666667 0 0 0-60.586667 0L256 706.986667V597.333333a42.666667 42.666667 0 0 0-42.666667-42.666666 42.666667 42.666667 0 0 0-42.666666 42.666666v213.333334a42.666667 42.666667 0 0 0 42.666666 42.666666h213.333334a42.666667 42.666667 0 0 0 0-85.333333H316.586667l140.373333-140.373333a42.666667 42.666667 0 0 0 0-60.586667z"/></svg>');
        }
    </style>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script>
        $(function () {
            $('#teams-table').DataTable({
                processing: true,
                serverSide: true,
                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal({
                            header: function (row) {
                                var data = row.data();
                                return '{{ __("Team Details") }}';
                            }
                        }),
                        renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                            tableClass: 'table'
                        })
                    }
                },
                ajax: '{{ route('teamList') }}',
                columns: [
                    { data: 'school_info', name: 'school_info', responsivePriority: 1 },
                    { data: 'team_number', name: 'team_number', responsivePriority: 2 },
                    { data: 'players', name: 'players', responsivePriority: 3 },
                    { data: 'captain_name', name: 'captain_name', responsivePriority: 4 },
                    { data: 'mentor_name', name: 'mentor_name', responsivePriority: 5 }

                ],
                columnDefs: [
                    { targets: '_all',}
                ],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Team...",
                    lengthMenu: "",
                }
            });
        });
    </script>
@endsection


