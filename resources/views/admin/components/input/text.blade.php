<input
  {{ $attributes->merge([
    'type' => 'text',    
    'class' => 'form-control',
  ])->class([
    'border-red-400 pr-[37px]' => !!$error,
  ]) }}
  maxlength="255"
>
