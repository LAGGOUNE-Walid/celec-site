<div>
	@if($activated == false)
	    <div class="flex space-x-1 justify-around">
		    <button wire:click="accept({{ $id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
		        Accept!
		    </button>
		</div>
	@else
		The user is activated
	@endif
</div>
