@props(['name', 'prefix' => null])

<label class="input w-full">
    @if($prefix)
        <span class="text-base-content">{{ $prefix }}</span>
    @endif
    <input class="grow text-base-content" name="{{  $name  }}" {{  $attributes  }}/>
    @error($name)
        <div class="text-sm text-error">{{  $message  }}</div>
    @enderror
</label>
