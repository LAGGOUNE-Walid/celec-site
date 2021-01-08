<div>
	@if($activated == false)
	    <div class="flex space-x-1 justify-around">
		    <button wire:click="accept({{ $id }})" class="p-1 text-green-600 hover:bg-green-600 hover:text-white rounded">
		        Accepted
		    </button>
		</div>
	@else
		The user is activated
	@endif
</div>
