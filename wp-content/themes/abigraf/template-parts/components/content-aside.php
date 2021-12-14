<aside>
    <h2>
        <?php
            if(get_field('utilizar_titulo_da_pagina')){
                echo get_the_title();
            } else {
                echo get_field('titulo_da_pagina');
            }
        ?>
    </h2>
</aside>