Sidebar -->
<div id="sidebar">

	<div class="sidebar-tabs">
        <ul class="tabs-nav two-items">
            <li><a href="#general" title=""><i class="icon-reorder"></i></a></li>
            <li><a href="#stuff" title=""></a></li>
        </ul>

        <div id="general">

	        <!-- Sidebar user -->
	        
	        <!-- /sidebar user -->

		    <!-- Main navigation -->
		    <ul class="navigation widget">
		    	 <!-- "ATIVAR O MENU" class="active" -->
		    	<li><a href="<?php echo base_url('index.php')?>/inicio/home" title=""><i class="icon-home"></i>Administração</a></li>
				<?php
				foreach (getMenu() as $key => $menu) {
					# Nivel 1
					$qtdeMenu = count($menu);
					echo "<li><a href=\"".(!is_array($menu) ? base_url().$menu : '#')."\" title=\"\" class=\"expand\"><i class=\"icon-reorder\"></i>".$key.(!is_array($menu) ? "" : "<strong>".$qtdeMenu."</strong>")."</a>";
					
					if (count($menu) > 0) {
						# Nivel 2
						echo "<ul>";
						foreach ($menu as $key1 => $menu1) {
							echo "<li><a href=\"".base_url('index.php')."/".$menu1."\" title>".$key1."</a></li>";
						}
						echo "</ul>";
					}
					echo "</li>";
				}
				?>
			</ul>
	        <!-- /main navigation -->

        </div>

    </div>
</div>
<!-- /sidebar