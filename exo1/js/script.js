// var chat = document.getElementById('chat');
//
// chat.addEventListener('click', function(){
//
//     var xhr = new XMLHttpRequest();
//     xhr.open('GET', 'chat.php');
//     xhr.send(null);
//     xhr.addEventListener('readystatechange', function(){
//
//         if(xhr.readyState === XMLHttpRequest.DONE){
//
//             if(xhr.status === 200){
//                 document.querySelector('#view').innerHTML = xhr.responseText;
//                 self.location.hash = '#chat'
//             } else {
//                 document.querySelector('#view').textContent = 'Erreur de récupération : '+xhr.status;
//             }
//
//         }
//
//     });
//
// });
//
// var chien = document.getElementById('chien');
//
// chien.addEventListener('click', function(){
//
//     var xhr = new XMLHttpRequest();
//     xhr.open('GET', 'chien.php');
//     xhr.send(null);
//     xhr.addEventListener('readystatechange', function(){
//
//         if(xhr.readyState === XMLHttpRequest.DONE){
//
//             if(xhr.status === 200){
//                 document.querySelector('#view').innerHTML = xhr.responseText;
//                 self.location.hash = '#chien'
//             } else {
//                 document.querySelector('#view').textContent = 'Erreur de récupération : '+xhr.status;
//             }
//
//         }
//
//     });
//
// });
//
// var poisson = document.getElementById('poisson');
//
// poisson.addEventListener('click', function(){
//
//     var xhr = new XMLHttpRequest();
//     xhr.open('GET', 'poisson.php');
//     xhr.send(null);
//     xhr.addEventListener('readystatechange', function(){
//
//         if(xhr.readyState === XMLHttpRequest.DONE){
//
//             if(xhr.status === 200){
//                 document.querySelector('#view').innerHTML = xhr.responseText;
//                 self.location.hash = '#poisson'
//             } else {
//                 document.querySelector('#view').textContent = 'Erreur de récupération : '+xhr.status;
//             }
//
//         }
//
//     });
//
// });

// $('#chat').click(function(){
//     $('#view').load('content/chat.php')
//     self.location.hash = '#chat'
// });
//
// $('#chien').click(function(){
//     $('#view').load('content/chien.php')
//     self.location.hash = '#chien'
// });
//
// $('#poisson').click(function(){
//     $('#view').load('content/poisson.php')
//     self.location.hash = '#poisson'
// });

$('#chat').click(function(){
    $.post('content/chat.php', function(data) {
        $('#view').html(data);
    })
});

$('#chien').click(function(){
    $.post('content/chien.php', function(data) {
        $('#view').html(data);
    })
});

$('#poisson').click(function(){
    $.post('content/poisson.php', function(data) {
        $('#view').html(data);
    })
});