{{--
<div class="form">
    <div class="form-group">
        <div class="col-md-12">
            <label>Voter Id</label>
            <input type="text" name="id" class="form-control todo-taskbody-tasktitle" placeholder="id...">
        </div>
    </div><br>
    <div class="form-group">
        <div class="col-md-12">
            <label>Voter Name</label>
            <input type="text" name="voter_name" class="form-control todo-taskbody-tasktitle" placeholder="voter_name...">
        </div>
    </div><br>
    <br><br>
    <div class="form-group">
        {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
    </div>
</div>--}}
  <form>
          <fieldset>
                      <legend>:</legend>


<div class="form-group">
    {!! Form::label('voter_name', 'Voters name:') !!}
    {!! Form::text('voter_name') !!}
</div>

<div class="form-group">
    {!! Form::label('id','Voter id:') !!}
    {!! Form::text('id') !!}
</div>


<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>
 </fieldset>
</form>