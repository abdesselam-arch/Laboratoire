<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('test.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.test.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="test.name">
        <div class="validation-message">
            {{ $errors->first('test.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.test.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('test.type') ? 'invalid' : '' }}">
        <label class="form-label required" for="type">{{ trans('cruds.test.fields.type') }}</label>
        <input class="form-control" type="text" name="type" id="type" required wire:model.defer="test.type">
        <div class="validation-message">
            {{ $errors->first('test.type') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.test.fields.type_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('test.price') ? 'invalid' : '' }}">
        <label class="form-label required" for="price">{{ trans('cruds.test.fields.price') }}</label>
        <input class="form-control" type="number" name="price" id="price" required wire:model.defer="test.price" step="0.01">
        <div class="validation-message">
            {{ $errors->first('test.price') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.test.fields.price_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.tests.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>