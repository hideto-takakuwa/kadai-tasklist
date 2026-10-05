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

	{{-- タスク詳細 --}}
	<div class="card bg-base-100 shadow-sm border border-base-300">
		<div class="card-body">

			<h1 class="card-title text-2xl mb-4">
				タスク詳細
			</h1>

			{{-- タスク内容 --}}
			<div class="py-6">
				<p class="text-lg">
					{{ $task->content }}
				</p>
			</div>

			<div class="divider"></div>

			{{-- 日時 --}}
			<div class="text-sm text-base-content/60 space-y-1">
				<p>
					作成日時：
					{{ $task->created_at->format('Y/m/d H:i') }}
				</p>

				<p>
					更新日時：
					{{ $task->updated_at->format('Y/m/d H:i') }}
				</p>
			</div>

			{{-- 操作ボタン --}}
			<div class="flex justify-end items-center gap-2 mt-6">

				{{-- 編集 --}}
				<a
					href="{{ route('tasks.edit', $task->id) }}"
					class="btn btn-outline"
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
							d="m16.862 4.487 1.687-1.688a1.875
								1.875 0 1 1 2.652 2.652L10.582
								16.07a4.5 4.5 0 0 1-1.897
								1.13L6 18l.8-2.685a4.5
								4.5 0 0 1 1.13-1.897l8.932-8.931Z"
						/>
					</svg>

					編集
				</a>
			</div>
		</div>
	</div>
</div>

@endsection