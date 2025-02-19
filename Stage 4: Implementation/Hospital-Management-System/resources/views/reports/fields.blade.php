<!-- Report Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('report_type', 'Report Type:') !!}
    {!! Form::text('report_type', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Generated By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('generated_by', 'Generated By:') !!}
    {!! Form::text('generated_by', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control','id'=>'date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date').datepicker()
    </script>
@endpush

<!-- Summary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('summary', 'Summary:') !!}
    {!! Form::text('summary', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>