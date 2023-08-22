<template>
<!--  <div class="text-gray-800 text-3xl font-semibold">-->
<!--      hCCCCCCCCCCCCC-->
<!--  </div>-->

    <div class="w-1/3 align-center mx-auto p-12">
        <div class="text-center">
            <h3 class="text-2xl">Messages</h3>
            <div v-for="msg in messages" class="messages  rounded-ss-xl border  py-2 px-4 m-4 bg-blue-200 align-center text-center">{{msg}}</div>
        </div>
        <div class="text-center align-center"><input id="chatInput" v-model="message" class="border py-2 px-8 w-full m-2" contenteditable="" @keyup.enter="add" placeholder="Your message"></div>
    </div>

</template>

<script>
 export default {
     name: "Chat",
     data(){
         return{
         messages: [],
             message: '',
             socket:  window.io(':4001')
         }
     },
     mounted(){
         // let adress = '127.0.0.1';
         // let socket_port = '3000';
         // let socket = io(adress + ':' + socket_port);

         this.socket.on('connection');
         console.log(this.socket)
         // if(e.key === 'Enter' && ! e.shiftKey) {
         //     this.socket.emit('sendMessage', this.message);
         //     this.messages.push(this.message);
         // }
         this.socket.on('sentToClient', function(data){
             this.messages.push(data)
             console.log(data + '555');
         }.bind(this));

     },
     methods: {
         add(e){

               if(e.key === 'Enter' && ! e.shiftKey){
                 this.socket.emit('sendMessage', this.message);
                 console.log(this.message);
                  this.message = '';
                 //return false;
             }

         }
     }
 }
</script>

