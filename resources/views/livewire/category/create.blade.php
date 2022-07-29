<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('category.name') ? 'invalid' : '' }}">
        <label class="form-label" for="name">{{ trans('cruds.category.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" wire:model.defer="category.name">
        <div class="validation-message">
            {{ $errors->first('category.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.category.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.category.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
