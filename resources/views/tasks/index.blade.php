@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto px-4 py-8">

    {{-- ヘッダー --}}
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">
            タスク一覧
        </h1>

        {{-- 新規作成 --}}
        <a
            href="#"
            class="btn btn-primary btn-circle"
            aria-label="タスクを新規作成"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="size-6"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 4.5v15m7.5-7.5h-15"
                />
            </svg>
        </a>
    </div>

    {{-- タスク一覧 --}}
    <div class="space-y-3">

        @forelse ($tasks as $task)

            <div class="card bg-base-100 shadow-sm border border-base-300">
                <div class="card-body flex-row items-center justify-between py-4">

                    {{-- タスク内容 --}}
                    <p class="text-base">
                        {{ $task->content }}
                    </p>

                    {{-- 詳細ページ --}}
                    <a
                        href="#"
                        class="btn btn-ghost btn-circle"
                        aria-label="タスクの詳細を表示"
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
                                d="m9 18 6-6-6-6"
                            />
                        </svg>
                    </a>

                </div>
            </div>

        @empty

            <div class="text-center py-12 text-base-content/60">
                タスクはまだありません。
            </div>

        @endforelse

    </div>

</div>

@endsection