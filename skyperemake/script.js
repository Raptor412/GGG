$(document).ready(function() {
    $('.users li').on('click', function() {
        var userId = $(this).data('userid');
        var userName = $(this).text();
        if ($('#chat-' + userId).length === 0) { // Check if chat window already exists
            var chatWindow = '<div id="chat-' + userId + '" class="chat-window">' +
                '<h2>Chat with ' + userName + '</h2>' +
                '<div class="messages"></div>' +
                '<input type="text" class="message-input">' +
                '<button class="send-message">Send</button>' +
                '</div>';
            $('#chat-container').append(chatWindow);
        }
    });

    $('#chat-container').on('click', '.send-message', function() {
        var message = $(this).siblings('.message-input').val();
        $(this).siblings('.messages').append('<p>' + message + '</p>');
        $(this).siblings('.message-input').val('');
    });
});
