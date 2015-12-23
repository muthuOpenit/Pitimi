@extends('layouts.master')

@section('id', 'edit-congregation-page')
@section('title', 'Edit Congregation')

@section('content')
    <h2>
        <i class="fa fa-building-o"></i>
        Edit Congregation
    </h2>
    {!! Form::model($congregation) !!}
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Congregation Name</label>
                {!! Form::text('name', null, [
                        'class'       => 'form-control',
                        'id'          => 'name',
                        'placeholder' => 'Name',
                        'autofocus'   => 'autofocus',
                    ])
                !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="checkbox">
                <label for="is_group">
                    {!! Form::hidden('is_group', 'false') !!}
                    {!! Form::checkbox('is_group', 'true', null, ['id' => 'is_group' ]) !!}
                    Is Group?
                </label>
            </div>
        </div>
    </div>
    <label for="public_meeting_day_of_week">Public Meeting Day and Time</label>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::select('public_meeting_day_of_week', $days_of_week, $congregation->public_meeting_at->dayOfWeek, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-1">
            <div class="form-group">
                {!! Form::select('public_meeting_time_hour', $hours, $congregation->public_meeting_at->hour, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-1">
            <div class="form-group">
                {!! Form::select('public_meeting_time_minute', $minutes, $congregation->public_meeting_at->minute, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <a href="{{ route('list-congregations') }}" class="btn btn-default">Cancel</a>
    <button class="btn btn-primary">Save</button>
    {!! Form::close() !!}
@endsection