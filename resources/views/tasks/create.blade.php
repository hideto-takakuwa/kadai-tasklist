@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto px-4 py-8">

	{{-- 一覧へ戻る --}}
	<div class="mb-6">
		<a
			href="{{ route('tasks.index') }}"
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

			一覧へ戻る
		</a>
	</div>

	{{-- タスク追加 --}}
	<div class="card bg-base-100 shadow-sm border border-base-300">
		<div class="card-body">

			<h1 class="card-title text-2xl mb-4">
				タスク追加
			</h1>

			<form method="POST" action="{{ route('tasks.store') }}">
				@csrf

				{{-- タスク内容 --}}
				<div class="mb-6">
					<label for="status" class="label">
						<span class="label-text">ステータス</span>
					</label>
					<input
						type="text"
						id="status"
						name="status"
						placeholder="ステータスを入力してください"
						class="input input-bordered w-full"
						value="{{ old('status') }}"
						required
					/>
					<label for="content" class="label">
						<span class="label-text">内容</span>
					</label>
					<input
						type="text"
						id="content"
						name="content"
						placeholder="タスクを入力してください"
						class="input input-bordered w-full"
						value="{{ old('content') }}"
						required
					/>
				</div>

				{{-- 追加ボタン --}}
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
								d="M12 4.5v15m7.5-7.5h-15"
							/>
						</svg>
						追加
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection