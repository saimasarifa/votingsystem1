<form>
    <fieldset>
        <legend></legend>
        <h2><center>Candidate Entry</center></h2>

        <div class="form-group">
            {!! Form::label('cndidate_name', 'Candidate Name:') !!}
            {!! Form::text('candidate_name') !!}
        </div>

        <div class="form-group">
            {!! Form::label('symbol', 'Symbol:') !!}
            {!! Form::text('symbol') !!}
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

