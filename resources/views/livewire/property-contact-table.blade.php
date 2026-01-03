<div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow">

    @if ($sending)
        <h2 class="text-2xl font-bold mb-6 text-center">
            Contacter le propriétaire
        </h2>
        <form wire:submit="sendMessage" action="{{ route('frontend.property.contact', $property) }}" method="POST"
            class="space-y-4">
            @csrf
            <div>
                <label for="name" class=" label-premium">Votre nom</label>
                <input id="name" type="text" class=" input-premium" wire:model="name">
                @error('name')
                    <div class=" text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class=" label-premium" for="telephone">Téléphone</label><br>
                <input id="telephone" type="text" class=" input-premium" wire:model="telephone">
                @error('telephone')
                    <div class=" text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class=" label-premium" for="message">Message</label><br>
                <textarea wire:model="message" id="message" class="input-premium"></textarea>
                @error('message')
                    <div class=" text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div class=" flex gap-3">
                <button
                    class=" flex justify-center items-center gap-2 px-4 bg-indigo-600 text-white py-3 rounded-xl hover:bg-indigo-700">
                    <div wire:loading
                        class="w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin"></div>
                    <span>Envoyer</span>
                </button>


                <button type="button" wire:click="isSending"
                    class=" px-4 bg-red-600 text-white py-3 rounded-xl hover:bg-red-700">
                    Annuler
                </button>
            </div>
        </form>
    @else
        <div>
            <button wire:click="isSending" type="button"
                class=" w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700">
                Envoyer une demande à propos de ce bien
            </button>
        </div>
    @endif
</div>
