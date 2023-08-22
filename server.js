// const express = require('express');
//
// const ap = express();
//
// const server = require('http').createServer(ap);
//
// const io = require('socket.io')(server,  {
//     cors: {origin: "*"}
// });
//
// io.on('connection', (socket) => {
//     console.log('cccccccccc');
//
//     socket.on('sendMessage', (message) => {
//         console.log(message);
//
//         io.sockets.emit('sentToClient', message);
//     });
//
//     socket.on('disconnect', (socket) => {
//         console.log('Disconnect');
//     })
// })
//
// server.listen(3000, () => {
//     console.log('Ura, Server is runing!')
// })

import express from 'express';

const ap = express();

import { createServer } from "http";

const server = createServer(ap);
import { Server } from "socket.io";

const io = new Server(server, {
    cors: {origin: "*"}
});


io.on('connection', (socket) => {
    console.log('cccccccccc');

    socket.on('sendMessage', (message) => {
        console.log(message);

        io.sockets.emit('sentToClient', message);
    });

    socket.on('disconnect', (socket) => {
        console.log('Disconnect');
    })
})

server.listen(3000, () => {
    console.log('Ura, Server is runing!')
})

