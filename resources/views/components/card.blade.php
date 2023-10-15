<div>
   <div class="card-header">
    <h3 class="card-title">{{ $title}}</h3>
   </div>

   <div {{$atributes->merge(['class' => '']) }}>
    {{$slot}}
   </div>
</div>