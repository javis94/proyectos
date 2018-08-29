var slider = $('#slider');
var siguiente = $('#slider_btn_next');
var anterio = $('#slider_btn_prev');

$('#slider section:last').insertBefore('#slider section:first');

slider.css('margin-left','-'+100+'%');

function moverDerecha(){
    slider.animate({
        marginLeft:'-'+200+'%'
    } ,700, function(){
        $('#slider section:first').insertAfter('#slider section:last');
        slider.css('margin-left', '-'+100+'%');
    });
}

function moverIzquierda(){
    slider.animate({
        marginLeft:0
    },700, function(){
        $('#slider section:last').insertBefore('#slider section:first');
        slider.css('margin-left', '-' + 100 + '%');
    });
}


siguiente.on('click',function(){
    moverDerecha();
});

anterio.on('click',function(){
    moverIzquierda();
});

function autoplay() {
    interval = setInterval(function(){
        moverDerecha();
    },10000);
}

autoplay();

var inicio=function () {
	$(".cantidad").keyup(function(e){
		if($(this).val()!=''){
			if(e.keyCode==13){
				var id=$(this).attr('data-id');
                alert(id);
				var precio=$(this).attr('data-precio');
				var cantidad=$(this).val();
				$(this).parentsUntil('.producto').find('.subtotal').text('Subtotal: '+(precio*cantidad));
				$.post('./js/modificarDatos.php',{
					Id:id,
					Precio:precio,
					Cantidad:cantidad
				},function(e){
						$("#total").text('Total: '+e);
				});
			}
		}
	});
	$(".eliminar").click(function(e){
		e.preventDefault();
		var id=$(this).attr('data-id');
		$(this).parentsUntil('.producto').remove();
		$.post('./js/eliminar.php',{
			Id:id
		},function(a){
			
			if(a=='0'){
				location.href="./carrito.php";
			}
		});

	});
}	
$(document).on('ready',inicio);