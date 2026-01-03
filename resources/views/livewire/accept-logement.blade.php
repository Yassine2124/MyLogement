<div class="bg-gray-100 py-16 text-center flex gap-5 justify-center items-center ">
    @if ($open)
        <a href="#" wire:click="handleAccept()" class=" text-blue-700">
            <i class=" fa fa-check"></i>
            Accepter
        </a>
        <a href="#" wire:click="handleRefuse()" class=" text-red-700">
            <i class="fa fa-times"></i>
            Refuser
        </a>
        <a href="#" wire:click="handleDelete()" class=" text-red-700">
            <i class="fa-solid fa-trash"></i>
            Supprimer
        </a>
    @endif
</div>
