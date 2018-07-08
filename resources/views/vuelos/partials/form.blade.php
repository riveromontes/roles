<div class="form-group">
  {{ Form::label('id_estudiante', 'Id del estudiante (piloto)') }}
  {{ Form::text('id_estudiante', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('id_instructor', 'Id del instructor') }}
  {{ Form::text('id_instructor', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('horas_voladas', 'Horas voladas') }}
  {{ Form::text('horas_voladas', null, ['class' => 'form-control']) }}

  <div class="form-group">
    {{ Form::label('fecha_vuelo', 'Fecha del vuelo') }}
      <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
        {{ Form::text('fecha_vuelo', null, ['class' => 'form-control datetimepicker-input', 'placeholder' => 'Fecha del vuelo']) }}
        <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div>
      </div>
  </div>

<div class="form-group">
  {{ Form::label('modalidad', 'Modalidad del vuelo') }}
  {{ Form::select('modalidad', ['instrumental' => 'Instrumental', 'monomotor' => 'Monomotor', 'multimotor' => 'Multimotor'], old('modalidad', '$vuelo->modalidad'), ['class' => 'form-control', 'placeholder' => 'Modalidad del vuelo']) }}
</div>
<div class="form-group">
  {{ Form::label('horas_helice', 'Horas de hélice') }}
  {{ Form::text('horas_helice', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('horas_aceite', 'Horas de aceite') }}
  {{ Form::text('horas_aceite', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('horas_fuselaje', 'Horas de fuselaje') }}
  {{ Form::text('horas_fuselaje', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('horas_bujias', 'Horas de bujía') }}
  {{ Form::text('horas_bujias', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('avion', 'Avión utilizado') }}
  {{ Form::text('avion', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
