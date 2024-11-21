$(document).ready(function(){
    $("#buyBtn").on('click',function(){
        $.post('Php/Pedido/newPedido.php',{id: prodId, nombre: prodNombre, precio:prodPrecio},function(res){
            console.log(res);
            
            $('#contAlert').fadeIn();
            $('#alert').addClass("animate__animated animate__fadeInRight")
        })
    });

    $("#contAlert").on('click',function(){
        $(this).fadeOut();
    })
});