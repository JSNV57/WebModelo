
<!-- pager -->
<nav>
	<div class="center-block">
		<ul class="pager">
		<?php
		if ($totalpage > $limit) {
			if ($page == 1)
			{ ?>
				<li class="next"><a href="?pagina=<?php echo $_GET['pagina'] ?>&numero=<?php echo $page + 1; ?>">Siguiente &raquo;<span class="sr-only">Siguiente</span></a></li>
			<?php  
			}elseif ($page == $totalpage) {
			?>
				<li class="previous"><a href="?pagina=<?php echo $_GET['pagina'] ?>&numero=<?php echo $page - 1; ?>">&laquo; Anterior <span class="sr-only">Anterior</span></a></li>
			<?php	
			}else
			{ ?>
				<li class="previous"><a href="?pagina=<?php echo $_GET['pagina'] ?>&numero=<?php echo $page - 1; ?>">&laquo; Anterior <span class="sr-only">Anterior</span></a></li>
				<li class="next"><a href="?pagina=<?php echo $_GET['pagina'] ?>&numero=<?php echo $page + 1; ?>">Siguiente &raquo;<span class="sr-only">Siguiente</span></a></li>
		<?php
			}
		}
		?>
		</ul>
	</div>
</nav>