@extends('layouts.default')

@section('content')
	<a href="{{route('tasks.create')}}"><i class="fa fa-plus"></i> Добавить задачу</a>
	<!-- Форма создания задачи... -->

	<!-- Текущие задачи -->
	@if (count($tasks) > 0)
		<div class="panel panel-default">
			<div class="panel-heading">
				Текущая задача
			</div>

			<div class="panel-body">
				<table class="table table-striped task-table">

					<!-- Заголовок таблицы -->
					<thead>
						<th>Task</th>
						<th>&nbsp;</th>
					</thead>

					<!-- Тело таблицы -->
					<tbody>
						@foreach ($tasks as $task)
							<tr>
								<!-- Имя задачи -->
								<td class="table-text">
									<div>{{ $task->name }}</div>
								</td>

								<td>
									<!-- TODO: Кнопка Удалить -->
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	@endif
@endsection
	<!-- TODO: Текущие задачи -->