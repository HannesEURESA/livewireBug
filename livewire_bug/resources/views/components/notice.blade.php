<div>
	<div>
		<textarea class="focus:ring-vt-blue-500 block w-full rounded-md border-zinc-300 px-3 px-4 py-3 text-zinc-800 placeholder-zinc-200 shadow-sm focus:border-transparent focus:outline-none focus:ring focus:ring-opacity-75" autocomplete="off" wire:model.live="notice"></textarea>
	</div>
	<div class="@if ($char <= 100) text-green-500 @else text-red-500 @endif mt-1"> {{ $char }} Chars</div>
	<div>
		@if ($error)
			<div class="mt-1 text-xs text-red-500">{{ $error }}</div>
		@endif
	</div>
</div>
