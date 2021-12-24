@extends('layouts.app')
@section('content')
@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<div class="container-fluid">
    <div class="card">
    <div class="card-header">
        List of Projects
</div>
<div class="card-body">
<div class="text-right">
    <a class="btn-primary mb-3" href="{{route('project.create')}}">Add New Project</a>
</div>
<table class="table table-responsive table-bordered">
<thead>
    <tr>
        <th>No.</th>
        <th>Type</th>
        <th>Start</th>
        <th>End</th>
        <th>Duration</th>
        <th>Cost</th>
        <th>Client</th>
        <th>Stage</th>
        <th>Status</th>
</tr>
</thead>
<tbody>
    <?php $i=1 ?>
    @foreach($projects as $project)
<tr>
    <td>{{ $i++ }}</td>
    <td>{{ $project->type }}</td>
    <td>{{ $project->start }}</td>
    <td>{{ $project->end }}</td>
    <td>{{ $project->duration }}</td>
    <td>{{ $project->cost }}</td>
    <td>{{ $project->client }}</td>
    <td>{{ $project->stage }}</td>
    <td>{{ $project->status }}</td>
    <td>
        <a class="btn btn-primary" href="{{ route('project.show',$project->id) }}">Show</a>
        <a class="btn btn-warning" href="{{ route('project.edit',$project->id) }}">Edit</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
@endsection

