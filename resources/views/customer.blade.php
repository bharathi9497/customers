@section('content')
<section class="jumbotron text-center">


<div class="container">
<div class="row">
<h1>All Customers</h1>
<div><a href="{{ URL::to('register') }}"> Add Customer</a></div>
<br>
@if(Session::has('message'))
<div class="alert alert-info">
{{Session::get('message')}}</div>
@endif

<table style="border: 5px solid ##ffffff; width:600; border-collapse: collapse" class="table table-striped table-bordered">
<thead>
<tr>
<td style="font-weight: bold;">ID</td>
<td style="font-weight: bold;">Customer Name</td>
<td style="font-weight: bold;">Actions</td>
</tr>
</thead>
<tbody>
@foreach($customers as $key =>$value)
<tr>
<td>{{$value->id}}</td>
<td>{{$value->name}}</td>
<td>
<a class="btn btn-small btn-info" href="{{URL::to('create/'. $value->id. '/edit') }}">Edit </a></td>
<td>
{{ Form::open(array('url' => '/create/' .$value->id, 'class' => 'btn btn-small'))}}
{{ Form::hidden('_method','DELETE')}}
{{ Form::submit('Delete',array('class' =>'btn btn-danger'))}}
{{ Form::close()}}
</td>

</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</section>
