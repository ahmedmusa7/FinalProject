@extends('layouts.app')
@section('content')
<div class="container-fluid">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
</ul>
</div>
@endif
<div class="card">
    <div class="card-header">
        Create a new Project
</div>
<div class="card-body">
    <form method="POST" action="{{route(project.store)}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for ="type">Project Type</label>
                <select name="type" id="type" type="text" class="form-control">
                    <option value="Consultancy Project">Consultancy Project</option>
                    <opion value="Research Grant Project">Research Grant Project</option>
</select>
</div>
<div class="form-group col-md-4">
    <label for="client">Client</label>
    <input name="client" id="client" type="text" class="form-control" 
    value="{{old('client')}}">
</div>
<div class="form group col-md-6">
    <label for="team_id">Team</label>
    <select pleader_name="team_id" class="form-control">
        <option>--Please Select--</option>
        @foreach($teams as $team)
        <option vlaue="{{$team->id}}">{{$team->pmanager_name}}</option>
        @endforeach
</select>
</div>
</div>
<div class="form-row">
    <div class="form-group col-md-12 text-center">
        <input type="submit" class="btn btn-primary">&nbsp;
        <input type="reset" class="btn btn-warning">&nbsp;
        <a class="btn btn-success" href="{{ route('project.index') }}">Back</a>
</div>
</div>
</form>
</div>