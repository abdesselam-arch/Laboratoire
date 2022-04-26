<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('appointment.client_id') ? 'invalid' : '' }}">
        <label class="form-label" for="client">{{ trans('cruds.appointment.fields.client') }}</label>
        <x-select-list class="form-control" id="client" name="client" :options="$this->listsForFields['client']" wire:model="appointment.client_id" />
        <div class="validation-message">
            {{ $errors->first('appointment.client_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.appointment.fields.client_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('appointment.start_time') ? 'invalid' : '' }}">
        <label class="form-label required" for="start_time">{{ trans('cruds.appointment.fields.start_time') }}</label>
        <x-date-picker class="form-control" required wire:model="appointment.start_time" id="start_time" name="start_time" />
        <div class="validation-message">
            {{ $errors->first('appointment.start_time') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.appointment.fields.start_time_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('appointment.finish_time') ? 'invalid' : '' }}">
        <label class="form-label" for="finish_time">{{ trans('cruds.appointment.fields.finish_time') }}</label>
        <x-date-picker class="form-control" wire:model="appointment.finish_time" id="finish_time" name="finish_time" />
        <div class="validation-message">
            {{ $errors->first('appointment.finish_time') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.appointment.fields.finish_time_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('appointment.comments') ? 'invalid' : '' }}">
        <label class="form-label" for="comments">{{ trans('cruds.appointment.fields.comments') }}</label>
        <textarea class="form-control" name="comments" id="comments" wire:model.defer="appointment.comments" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('appointment.comments') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.appointment.fields.comments_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('tests') ? 'invalid' : '' }}">
        <label class="form-label required" for="tests">{{ trans('cruds.appointment.fields.tests') }}</label>
        <x-select-list class="form-control" required id="tests" name="tests" wire:model="tests" :options="$this->listsForFields['tests']" multiple />
        <div class="validation-message">
            {{ $errors->first('tests') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.appointment.fields.tests_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.appointments.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>