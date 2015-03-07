<form>
    <fieldset>
        <legend></legend>
        <h2><center>Voter entry</center></h2>

        <div class="form-group">
            {!! Form::label('voter_name', 'Voter Name:') !!}
            {!! Form::text('status') !!}
        </div>

        <div class="form-group">
    {!! Form::label('id', 'Voter id:') !!}
    {!! Form::text('id') !!}
</div>

<div class="form-group">
    {!! Form::label('created_by', 'created by:') !!}
    {!! Form::text('created_by') !!}
</div>

<div class="form-group">
    {!! Form::label('modified_by', 'modified_by:') !!}
    {!! Form::text('modified_by') !!}
</div>



<div class="form-group">
    {!! Form::button('Save') !!}
</div>

    </fieldset>
</form>

