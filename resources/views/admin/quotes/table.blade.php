<div class="card-body px-4">
    {!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered']) !!}
</div>

@push('third_party_scripts')

    {!! $dataTable->scripts() !!}
@endpush
