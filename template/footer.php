                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
<!-- script JS para el correcto funcionamiento de Bootstrap NO QUITAR :P -->

<script src="js/bootstrap.min.js"></script>
<!-- Abajo de aqui poner los script JS propios -->
<div id='IrArriba'>
<a href='#Arriba'><span/></a>
</div>
<script type='text/javascript'>
	//
	// Botón para Ir Arriba

	$(document).ready(function()
    {
		$("#IrArriba").hide();
		$(function ()
        {
			$(window).scroll(function ()
            {
                if ($(this).scrollTop() > 200)
                {
                    $('#IrArriba').fadeIn();
                }
			    else
                {
				    $('#IrArriba').fadeOut();
			    }
			});
			$('#IrArriba a').click(function ()
            {
				$('body,html').animate({scrollTop: 0}, 800);
				return false;
			});
		});
	});
</script>
<footer>
	<div>
		<a href="https://www.facebook.com/DAReynald0/" target="_blank">
			<img alt="Follow us in FACEBOOK" height="48" src="http://cesavetlax.com.mx/images/Index/facebook.png" 
			title="Follow us in Facebook" width="48" />
		</a>
	</div>
	Powered by <a href="http://uninformatico.com">uninformatico.com</a> 2016 &copy;
</footer>
</div>
</body>
</html>