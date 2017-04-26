$(function(){

    function addAdmin()
    {
       var form_data = {};
       var response = $('.add_form h6').first();

       $('.add_form div input').each(function(){
           form_data[$(this).attr('name')] = $(this).val();
       });

        response.empty();
        response.removeClass();

       $.post('/admin_add',form_data,function(resp){
           resp = JSON.parse(resp);

           keys = $.map(resp,function(element,key){ return key});

           if( keys[0].indexOf('success') >= 0)
           {
               response.attr('class','alert alert-success');
           }

           else
           {
               response.attr('class','alert alert-danger');
           }

           var error = resp[keys[0]].charAt(0).toUpperCase() + resp[keys[0]].slice(1);
           var text = document.createTextNode(error);
           response.append(text);
       });
    }

    function modifyAdmin()
    {
        var form_data = {};

        var inputs = $('.modify_form div input');
        var responses = $('.modify_form h6');

        responses.each(function(){
            $(this).remove();
        });

        inputs.each(function(){
            form_data[$(this).attr('name')] = $(this).val();
        });

        $.post('/admin_modify',form_data,function(resp){
                resp = JSON.parse(resp);
                keys = $.map(resp,function(element,key){ return key; });

                for(var i in keys)
                {
                    var keyy = keys[i];
                    keyy = keyy.replace('_fail','');
                    keyy = keyy.replace('_success','');

                    var input = inputs.filter("input[name='"+keyy+"']");

                    var error = '';
                    if( keys[i].indexOf('success') >= 0 )
                    {
                        error = '<br><h6 class="alert alert-success">'+resp[keys[i]]+'</h6>';
                    }
                    else
                    {
                        error = '<h6 class="alert alert-danger">'+resp[keys[i]]+'</h6>';
                    }

                    input.parent().append(error);
                }
        });
    }

    function deleteAdmin()
    {
        var form_data = {};

        var inputs = $('.delete_form div input');
        var response = $('.delete_form h6').first();

        response.empty();
        response.removeClass();

        inputs.each(function(){
           form_data[$(this).attr('name')] = $(this).val();
        });

        $.post('/admin_delete',form_data,function(resp){
            resp = JSON.parse(resp);

            var key = $.map(resp,function(element,key){ return key; })[0];

            if( key.indexOf('success') >= 0)
            {
                response.attr('class','alert alert-success');
            }
            else
            {
                response.attr('class','alert alert-danger');
            }

            var error = resp[key].charAt(0).toUpperCase() + resp[key].slice(1);
            response.append(document.createTextNode(error));
        });
    }

    function cleanModal(event)
    {
        var form_class = event.target.id.replace('Modal','_form');

        if( form_class === 'modify_form')
        {
            var responses = $('.'+form_class+' h6');
            responses.each(function(){
                $(this).remove();
            });
        }

        else
        {
            var response = $('.'+form_class+' h6').first();
            response.replaceWith('<h6 id="response"></h6>');
        }

        var inputs = $('.'+form_class+' div input');

        inputs.each(function(){
            $(this).val('');
        });
    }

    var add = $("#add");
    add.click(addAdmin);

    var modify = $('#modify');
    modify.click(modifyAdmin);

    var del = $('#delete');
    del.click(deleteAdmin);

    $('#addModal').on('hidden.bs.modal',cleanModal);
    $('#modifyModal').on('hidden.bs.modal',cleanModal);
    $('#deleteModal').on('hidden.bs.modal',cleanModal);
});