@if (count($tasks) > 0)
	<div class="panel panel-default">
		<div class="panel-heading">Current Cart </div>
		<div class="panel-body">
			<table class="table table-striped task-table"> 
				<thead>
					<th>Name</th>
					<th>Price</th>
					<th>&nbsp;</th>
				</thead>
				<tbody>
					@foreach ($tasks as $task)
					<tr>
						<!-- Task Name -->
						<td class="table-text"><div>{{ $task->name }}</div></td>
						<td class="table-text"><div>{{ $task->price }}</div></td>
						<td><!-- TODO: Delete Button -->
							<form action="{{url('task')}}/{{$task->id}}" method="POST">
           						{{ csrf_field() }}
           						{{ method_field('DELETE') }}
					            <button class="btn btn-danger">delete item</button>
       						</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endif