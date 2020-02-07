@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error'))
<div class="message"> Whoops! Looks like something went wrong. Try clearing your cookies and <a href="{{ route('login') }}">logging in</a> again.</div>
