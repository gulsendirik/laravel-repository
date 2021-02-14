require('./bootstrap');

import $ from "jquery"

$(function(){
    let result = $('#result');
    $('#fetch-users').on('click', function (e){
      $.post(ajax_url, {_token: token}, function (response){
        $.each(response, function (key, user){
          result.append('<div>' + user.name + '</div>');
        })
    }, 'json');
    })

    
})