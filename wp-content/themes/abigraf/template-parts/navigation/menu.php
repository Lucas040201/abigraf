<?php
// classe com as variáveis que você quer puxar do back end
class Menu
{
	public $titulo;
	public $id;
	public $url;
	public $submenu;
}

$menu_name = 'header-menu';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object($locations[$menu_name]);
$menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));
$submenu = false;
$id_anterior = 0;
$set_menu = false;
foreach ($menuitems as $item) :

	//adiciona o menu
	if (!$item->menu_item_parent) {
		// o menu precisa ser adicionado depois de setar seus filhos logo 
		//a variavel setmenu vai certificar que você consiga setar os 
		//filhos do menu corretamente
		if ($set_menu == true) {
			$menus[] = $myMenu;
			$set_menu = false;
		}
		if ($set_menu == false) {
			$set_menu = true;
		}

		$myMenu = new Menu();
		$myMenu->titulo = $item->title;
		$myMenu->id = $item->ID;
		$myMenu->url = $item->url;
	} else {
		//adiciona o submenu
		if ($id_anterior != $item->menu_item_parent) {
			$mySubmenu = new Menu();
			$mySubmenu->titulo = $item->title;
			$mySubmenu->id = $item->ID;
			$mySubmenu->url = $item->url;
			$myMenu->submenu[] = $mySubmenu;
		}
		//adiciona o submenu

		//adiciona o subsubmenu
		if ($id_anterior == $item->menu_item_parent) {
			$mySubSubmenu = new Menu();
			$mySubSubmenu->titulo = $item->title;
			$mySubSubmenu->id = $item->ID;
			$mySubSubmenu->url =  $item->url;
			$mySubmenu->submenu[] = $mySubSubmenu;
		}
		if ($id_anterior != $item->menu_item_parent) {
			$id_anterior = $item->ID;
		}
		//adiciona o subsubmenu
	}
endforeach;
//necessário para adicionar o último ítem do menu
$menus[] = $myMenu;
?>
<header class="header">
	<section class="header__top">
		<div class="wrapper">
			<span class="header__menu">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/menu.svg" alt="">
			</span>
			<a href="<?php echo get_field('twitter', 'option'); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/twitter.svg" alt=""></a>
			<a href="<?php echo get_field('youtube', 'option'); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/youtube.svg" alt=""></a>
			<a href="<?php echo get_field('facebook', 'option'); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook.svg" alt=""></a>
			<a href="login" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/user.svg" alt=""></a>
		</div>
	</section>
	<section class="header__mid">
		<div class="wrapper">
			<?php
			$imagem = get_field('imagem_da_logo');
			$urlFinal = get_template_directory_uri() . "/assets/images/logo.svg";
			if ($imagem) {
				$urlFinal = $imagem;
			}
			$link = get_field('link_home');
			$linkFinal = home_url();
			if ($link) {
				$linkFinal = $link;
			}
			?>
			<a href="<?php echo $linkFinal; ?>">
				<h1>Abigraf Nacional <img src="<?php echo $urlFinal; ?>" alt="Abigraf Nacional"></h1>
			</a>
			<form action="#" method="post" class="form">
				<div class="form__box">
					<input class="form__text" id="search" type="text" name="search" placeholder="O que você busca?">
					<button class="form__submit" type="submit">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/search.svg" alt="" srcset="">
					</button>
				</div>
			</form>
		</div>
	</section>
	<nav class="nav">
		<div class="wrapper">
			<ul>
				<?php foreach ($menus as $menu) { ?>
					<li>
						<a href="<?php echo $menu->url; ?>"><?php echo $menu->titulo; ?></a>
						<?php if ($menu->submenu) { ?>
							<div class="nav__submenu">
								<?php foreach ($menu->submenu as $submenu) { ?>
									<a href="<?php echo $submenu->url; ?>"><?php echo $submenu->titulo; ?></a>
								<?php } ?>
							</div>
						<?php } ?>
					</li>
				<?php } ?>
			</ul>
		</div>
	</nav>
</header>