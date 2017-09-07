@extends('layouts.default')

@section('body')

<?php
    $page_title="{$ad->name}";
?>

    <h1>{{$ad->name}}</h1>   
    
    <div>
        <label>Service type: {{$ad->service}}</label></br>
        
        @if($ad->quote == '0')
            <label>Quote cost: FREE</label></br> 
        @else
            <label>Quote cost: {{$ad->quote}}</label></br>
        @endif 
        <label>Description: {{$ad->body}}</label></br></br>
        
        <label>Contact Information:</label></br>
        <label>{{ $user->name }} </label></br>
        <label>Phone: {{$ad->phone}}</label></br>
        <label>Email: {{$ad->email}}</label></br>
        <label>Location: {{$ad->location}}</label></br></br>


    </div>
    <small>Created on {{$ad->created_at}}</small></br></br>
    
@endsection