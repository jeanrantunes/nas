(function() {
    $.getJSON('json/dataPatient.json', function(data){
        $.each(data.comorbidities, function(){
            if(this.initials != null)
                $('#comorbidities').append('<option value="'+this.id+'">'+this.name+' ('+this.initials+')</option>')
            else
            $('#comorbidities').append('<option value="'+this.id+'">'+this.name+'</option>')
        });
        $.each(data.origins, function(){
            $('#origin').append('<option value="'+this.id+'">'+this.name+'</option>')
        });
        $.each(data.hospitalizationReasons, function(){
            $('#hospitalization_reasons').append('<option value="'+this.id+'">'+this.name+'</option>')
        });
    });
}());