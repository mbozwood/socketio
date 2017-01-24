# Laravel - SocketIO

Begin by installing this package through Composer. Run the following from the terminal:  
``` composer require "mbozwood/socketio": "dev-master"```  

Next, add your new provider to the `providers` array of `config/app.php`:
```
'providers' => [
    // ...
    MBozwood\SocketIO\SocketServiceProvider::class,
    // ...
  ],
```  
Finally, add a the alias to the `aliases` array of `config/app.php`:
```
'aliases' => [
    // ...
    'Socket' => MBozwood\SocketIO\SocketFacade::class,
    // ...
  ],
```  

To emit a socket event, ensure your node server is running on the port and it is correctly specified in your ENV file as `SOCKET_URL`  
An example of emitting an event:  
```
Socket::emit('foo', []);
```  

To explain, `foo` is the event name, and the array is the data element. 

```
Socket::emit('foo', [
    'message'  => 'bar',
]);
```
and in the node server file:

```
io.on('connection', function (socket) {
  
  socket.on('foo', function(data) {
    console.log(data.message);
  });
  // bar is output
  
});
```

