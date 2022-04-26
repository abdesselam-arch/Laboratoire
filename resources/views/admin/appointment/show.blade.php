@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.appointment.title_singular') }}:
                    {{ trans('cruds.appointment.fields.id') }}
                    {{ $appointment->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.appointment.fields.id') }}
                            </th>
                            <td>
                                {{ $appointment->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.appointment.fields.client') }}
                            </th>
                            <td>
                                @if($appointment->client)
                                    <span class="badge badge-relationship">{{ $appointment->client->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.appointment.fields.start_time') }}
                            </th>
                            <td>
                                {{ $appointment->start_time }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.appointment.fields.finish_time') }}
                            </th>
                            <td>
                                {{ $appointment->finish_time }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.appointment.fields.comments') }}
                            </th>
                            <td>
                                {{ $appointment->comments }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.appointment.fields.tests') }}
                            </th>
                            <td>
                                @foreach($appointment->tests as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->name }}</span>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('appointment_edit')
                    <a href="{{ route('admin.appointments.edit', $appointment) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.appointments.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection