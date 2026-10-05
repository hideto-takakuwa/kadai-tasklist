@extends('layouts.app')

@section('content')

@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto px-4 py-8">

	{{-- 詳細へ戻る --}}
	<div class="mb-6">
		<a
			href="{{ route('tasks.show', $task->id) }}"
			class="btn btn-ghost gap-2"
		>
			<svg
				xmlns="http://www.w3.org/2000/svg"
				fill="none"
				viewBox="0 0 24 24"
				stroke-width="2"
				stroke="currentColor"
				class="size-5"
			>
				<path
					stroke-linecap="round"
					stroke-linejoin="round"
					d="m15 18-6-6 6-6"
				/>
			</svg>

			詳細へ戻る
		</a>
	</div>

	{{-- タスク編集 --}}
	<div class="card bg-base-100 shadow-sm border border-base-300">
		<div class="card-body">

			<h1 class="card-title text-2xl mb-4">
				タスク編集
			</h1>

			<form
				method="POST"
				action="{{ route('tasks.update', $task->id) }}"
			>
				@csrf
				@method('PUT')

				{{-- タスク内容 --}}
				<div class="mb-6">
					<label for="content" class="label">
						<span class="label-text">タスク内容</span>
					</label>

					<input
						type="text"
						id="content"
						name="content"
						value="{{ $task->content }}"
						class="input input-bordered w-full"
						required
					/>
				</div>

				{{-- 更新ボタン --}}
				<div class="flex justify-end">
					<button
						type="submit"
						class="btn btn-primary"
					>
						<svg
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke-width="2"
							stroke="currentColor"
							class="size-5"
						>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								d="M4.5 12.75 10.5 18.75 19.5 5.25"
							/>
						</svg>

						更新する
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection

@endsection