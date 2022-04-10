<x-button class="btn btn-primary">
    Meer informatie
</x-button>

<script>
    $('x-button').click(function(){
    console.log($(this).text());
    if($(this).text().trim() == 'Meer informatie' ){
        $(this).text({{$message}});
    }else{
         $(this).text('Meer informatie');
    }
});
</script>
