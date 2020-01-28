@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))

@if (Route::has('login'))
                @auth
                <li class="float-right"><a href="{{ route('logout') }}"">LOG OUT</a></li>
                @else
                <li class="float-right"><a href="{{ route('logout') }}"">LOG IN</a></li>
                @endauth
            @endif
