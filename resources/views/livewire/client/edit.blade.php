<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('client.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.client.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="client.name">
        <div class="validation-message">
            {{ $errors->first('client.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.client.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('client.email') ? 'invalid' : '' }}">
        <label class="form-label required" for="email">{{ trans('cruds.client.fields.email') }}</label>
        <input class="form-control" type="email" name="email" id="email" required wire:model.defer="client.email">
        <div class="validation-message">
            {{ $errors->first('client.email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.client.fields.email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('client.phone') ? 'invalid' : '' }}">
        <label class="form-label" for="phone">{{ trans('cruds.client.fields.phone') }}</label>
        <input class="form-control" type="text" name="phone" id="phone" wire:model.defer="client.phone">
        <div class="validation-message">
            {{ $errors->first('client.phone') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.client.fields.phone_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.clients.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>