<x-mail::message>
# Nouvelle contact pour un bien <br>
Mr/Mm {{ $data['name'] }} souhaiterais discuter du bien <a href="{{ route('frontend.property.show',['slug'=>$property->getSlug(),'property'=>$property,'notify'=>0]) }}">{{ $property->title }}</a> 

Téléphone: {{ $data['telephone'] }} <br>
    ** Messaage
  {{ $data['message'] }}

</x-mail::message>
