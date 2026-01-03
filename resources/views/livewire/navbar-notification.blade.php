
<div class="relative">
    <button wire:click="toggle" class=" relative inline-flex items-center">
        <i class=" fa-solid fa-bell text-gray-600 text-xl"></i>
        @if ($count > 0)
            <span
                class=" absolute -top-2 -right-2 bg-red-600 text-white text-xs w-5 h-5 flex items-center justify-center rounded-full">
                {{ $count }}
            </span>
        @endif

    </button>
    @if ($open)
        <div class=" absolute right-0 mt-2 w-80 bg-white shadow-lg rounded-lg z-50">
            <div class=" p-3 border-b font-semibold">
                Notifications
            </div>
            <div class=" max-h-64 overflow-y-auto">
                @forelse ($notifications as $notification)
                    <a target="_blank" href="{{ route('frontend.property.show', ['slug' => $notification->data['property']['title'], 'property' => $notification->data['property']['id'],'notify'=>$notification->id]) }}"
                        wire:click="readNotification('{{ $notification->id }}')"
                        class=" block w-full text-left px-4 py-2 hover:bg-gray-100
                        {{ $notification->read_at ? 'bg-white' : 'bg-gray-50 font-semibold' }}
                        ">{{ $notification->data['mesData']['message'] }}</a>
                    
                @empty
                    <div class=" p-4 text-gray-500 text-sm">Aucune notification</div>
                @endforelse
            </div>
        </div>
    @endif
</div>
