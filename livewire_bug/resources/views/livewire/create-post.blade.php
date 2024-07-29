<div>
	<div>
		<textarea class="focus:ring-vt-blue-500 block w-full rounded-md border-zinc-300 px-4 py-3 text-black placeholder-zinc-200 shadow-sm focus:border-transparent focus:outline-none focus:ring focus:ring-opacity-75" autocomplete="off" wire:model.live="notice"></textarea>
	</div>
	<div style="color: @if ($char <= 100) #84cc16 @else #7c2d12 @endif" class="mt-1"> {{ $char }} Chars</div>
</div>
