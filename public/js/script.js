(function(){
    
    $.getJSON('json/data.json', function(data){
        $('#hospital').val(data.hospitals[0].name);
        $.each(data.hospitals, function(){
            $('#hospital-list').append('<li class="mdl-menu__item" data-id="'+this.id+'">'+this.name+' ('+this.initials+')</li>');
        });
        $('#occupation').val(data.occupations[0].occupation);
        $.each(data.occupations, function(){
            $('#occupation-list').append('<li class="mdl-menu__item" data-id="'+this.id+'">'+this.occupation+'</li>');
        });
    });
    
}());