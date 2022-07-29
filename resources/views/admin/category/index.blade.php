@extends('layouts.admin')
@section('content')
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">

                    {{ trans('cruds.category.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('contact_company_create')
                    <a class="btn btn-indigo" href="{{ route('admin.category.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.category.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('category.index')

    </div>
@endsection
