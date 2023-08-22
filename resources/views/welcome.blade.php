<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ChatApp</title>
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body>
    <script src="https://cdn.socket.io/4.5.4/socket.io.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
        // $(function(){
        //
        //     let adress = '127.0.0.1';
        //     let socket_port = '3000';
        //     let socket = io(adress + ':' + socket_port);
        //
        //    socket.on('connection');
        //
        //     let chatInput = $('#chatInput');
        //     chatInput.keypress(function(e){
        //         let message = $(this).html();
        //         console.log(message);
        //         if(e.key === 'Enter' && ! e.shiftKey){
        //             //alert(1);
        //             socket.emit('sendMessage', message);
        //             chatInput.html('');
        //             return false;
        //         }
        //     });
        //
        //     socket.on('sentToClient', (message) => {
        //          $('.messages').append(message);
        //     })
        //
        //
        // })
    </script>
{{--    <div class="w-1/3 align-center mx-auto p-12">--}}
{{--             <div>Messages--}}
{{--                 <div class="messages  rounded-ss-xl border  py-2 px-8 m-2 bg-blue-200"></div>--}}

{{--             </div>--}}
{{--             <div><input type="text" id="chatInput" class="border"></div>--}}
{{--        <div id="chatInput" class="border py-2" contenteditable=""></div>--}}
{{--    </div>--}}


       <div id="app">
         <chat></chat>
      </div>
    </body>
</html>
