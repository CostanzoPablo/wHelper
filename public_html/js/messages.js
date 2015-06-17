var timer_get_messages;
function get_messages(){
    
    var $messages_box = $('#messages');
    var contact_id = $messages_box.data('id');
    var last_message = 0;
    var $loader = $messages_box.find('.loader');
    
    var loopStart = new Date();
    while ($messages_box.hasClass('submiting')){
        var loopNow = new Date();
        if (loopStart.getTime() + 30000 < loopNow.getTime()){
            $messages_box.removeClass('submiting');   
            clearTimeout(timer_get_messages); 
        }
    }
    
    if ($messages_box.find('.message').length > 0){
        last_message = $messages_box.find('.message').last().data('id');        
    }
    
    $messages_box.addClass('submiting');
    
    $.ajax({
        url: '/ajax/get_messages',
        method: 'post',
        data: {
            contact_id: contact_id,
            last_message: last_message
        },
        success: function(response){
            var html = '';     
            response.messages.forEach(function(message){
                var iam = (message.who === 'sender') ? 'iam' : '' ;
                var sent = new Date(message.sent_at * 1000);
                html += '<div data-id="' + message.id + '" class="message ' + iam + '" title="' + sent.toLocaleString() + '">';
                html += '   <div class="message-inner">';
                html += '       <div class="name">' + message.username + '</div>';
                html += '       <div class="text">' + message.message + '</div>';
                html += '   </div>';
                html += '</div>';
            });
            $loader.addClass('hidden'); 
            $messages_box.append(html);
        },
        error: function(response){
            console.log(response);
        },
        complete: function(){
            $messages_box.removeClass('submiting');   
            setTimeout(get_messages, 3000);   
        }
    });
    
}
function change_contact(contact_id){
    clearTimeout(timer_get_messages);
    var $messages_box = $('#messages');
    var current_contact_id = $messages_box.data('id');
    var $loader = $messages_box.find('.loader');
    
    if (current_contact_id == contact_id){
        return;
    }
    
    $messages_box.data('id', contact_id);
    $messages_box.find('.message').remove();    
    $loader.removeClass('hidden');
    get_messages();
}
$(document).ready(function(){
    get_messages();
    $('.contact').click(function(e){
       var $contact = $(this);
       change_contact($contact.data('id'));
    });
});