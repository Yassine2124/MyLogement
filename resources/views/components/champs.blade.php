  @props(['label','multiple'=>false, 'name', 'type' => 'text', 'select' => false, 'value' => ''])
  @if ($select)
      <div>
          <label class="label-premium">Type de logement</label>
          <select class="input-premium">
              <option>Appartement</option>
              <option>Maison</option>
              <option>Studio</option>
              <option>Villa</option>
          </select>
      </div>
  @else
      <div>
          <label class="label-premium" for="{{ $name }}">{{ $label }}</label> <br>
          @if ($type === 'textarea')
              <textarea class="input-premium" name="{{ $name }}" id="{{ $name }}">{{ old($name, $value) }}</textarea>
          @elseif ($type === 'file')
              <input name="{{ $name . ($multiple ? '[]':'') }}" @if($multiple) multiple @endif type="file"
                  class="block w-full text-sm text-slate-500
                       file:mr-4 file:py-2 file:px-4
                       file:rounded-lg file:border-0
                       file:bg-indigo-50 file:text-indigo-600
                       hover:file:bg-indigo-100">
          @else
              <input class="input-premium" type="{{ $type }}" name="{{ $name }}"
                  value="{{ old($name, $value) }}">
          @endif
          @error($name)
              <div class=" text-red-600">
                {{ $message }}
              </div>
          @enderror
      </div>
  @endif
