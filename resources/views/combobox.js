<script>
    $('#area').on('change', function(e){
        console.log(e);
        var state_id = e.target.value;
 
        $.get('{{ url('barang') }}/create/ajax-state?area=' + state_id, function(data) {
            console.log(data);
            $('#ruang').empty();
            $.each(data, function(index,subCatObj){
                $('#ruang').append(''+subCatObj.name+'');
            });
        });
    });
</script>