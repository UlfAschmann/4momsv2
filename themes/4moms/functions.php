<?php

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
            array(
                'page_title' => 'Home',
                'menu_title' => '',
                'menu_slug' => '',
                'capability' => 'edit_posts',
                'position' => false,
                'parent_slug' => '',
                'icon_url' => 'dashicons-admin-home',
                'redirect' => true,
                'post_id' => 'options',
                'autoload' => false,
            )
    );
}


/* Campos Extras para el HOME o INDEX */
if (function_exists('acf_add_local_field_group')):

    acf_add_local_field_group(array(
        'key' => 'group_5782ff6a25c56',
        'title' => 'Home',
        'fields' => array(
            array(
                'key' => 'field_5782ff12212',
                'label' => 'Banner',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_578aaaaaaaa3f',
                'label' => 'Mensajes',
                'name' => 'mensajes_banner',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => '',
                'max' => '',
                'layout' => 'row',
                'button_label' => 'Nuevo Item',
                'sub_fields' => array(
                    array(
                        'key' => 'field_578bbbbbbdffc7',
                        'label' => 'Título',
                        'name' => 'mensaje_banner_texto',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_5222222dffc7',
                        'label' => 'Subtítulo',
                        'name' => 'mensaje_banner_subtexto',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'field_5782ff71dffc2',
                'label' => 'Quienes Somos',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_57830011dffc7',
                'label' => 'Subtítulo',
                'name' => 'subtitulo_quienes',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array(
                'key' => 'field_5782ff98dffc3',
                'label' => 'Bienvenidos',
                'name' => 'bienvenidos',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 4,
                'new_lines' => 'wpautop',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array(
                'key' => 'field_5782ffbbdffc4',
                'label' => 'Nuestros Valores',
                'name' => 'nuestros_valores',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'basic',
                'media_upload' => 1,
            ),
            array(
                'key' => 'field_5782ffd4dffc5',
                'label' => 'Misión',
                'name' => 'mision',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'basic',
                'media_upload' => 1,
            ),
            array(
                'key' => 'field_5782ffe1dffc6',
                'label' => 'Visión',
                'name' => 'vision',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'basic',
                'media_upload' => 1,
            ),
            array(
                'key' => 'field_578300c69fb58',
                'label' => 'Nuestra Historia',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_578300e740686',
                'label' => 'Subtítulo',
                'name' => 'subtitulo_historia',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array(
                'key' => 'field_578300f440687',
                'label' => 'Contenido',
                'name' => 'contenido_historia',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'basic',
                'media_upload' => 1,
            ),
            array(
                'key' => 'field_578309cc2aa3e',
                'label' => 'Convencete',
                'name' => '_copiar',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_57830af02aa40',
                'label' => 'Subtítulo',
                'name' => 'subtitulo_convencete',
                'type' => 'text',
                'instructions' => '',
                'required' => '',
                'conditional_logic' => '',
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array(
                'key' => 'field_57830a0d2aa3f',
                'label' => 'Items',
                'name' => 'items_convencete',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => '',
                'max' => '',
                'layout' => 'row',
                'button_label' => 'Nuevo Item',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5783157fa705c',
                        'label' => 'Icono',
                        'name' => 'item_icono',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => '',
                        'conditional_logic' => '',
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'readonly' => 0,
                        'disabled' => 0,
                    ),
                    array(
                        'key' => 'field_5783158aa705d',
                        'label' => 'Título',
                        'name' => 'item_titulo',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => '',
                        'conditional_logic' => '',
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'readonly' => 0,
                        'disabled' => 0,
                    ),
                    array(
                        'key' => 'field_57831593a705e',
                        'label' => 'mensaje',
                        'name' => 'item_mensaje',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => '',
                        'conditional_logic' => '',
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'readonly' => 0,
                        'disabled' => 0,
                    ),
                ),
            ),
            array(
                'key' => 'field_578319a16397b',
                'label' => 'Paquetes',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_578319f612eeb',
                'label' => 'Subtítulo',
                'name' => 'subtitulo_paquetes',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array(
                'key' => 'field_5783193a8be84',
                'label' => 'Paquetes',
                'name' => 'items_paquetes',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => '',
                'max' => '',
                'layout' => 'row',
                'button_label' => 'Nuevo Item',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5783193a8be86',
                        'label' => 'Título',
                        'name' => 'item_titulo',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'readonly' => 0,
                        'disabled' => 0,
                    ),
                    array(
                        'key' => 'field_5783193a8be87',
                        'label' => 'mensaje',
                        'name' => 'item_mensaje',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'readonly' => 0,
                        'disabled' => 0,
                    ),
                    array(
                        'key' => 'field_5783194b8be88',
                        'label' => 'Imagen',
                        'name' => 'imagen_paquete',
                        'type' => 'image',
                        'instructions' => 'Tamaño de 750x450px',
                        'required' => '',
                        'conditional_logic' => '',
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'url',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                        'min_width' => 750,
                        'min_height' => 450,
                        'min_size' => '',
                        'max_width' => 750,
                        'max_height' => 450,
                        'max_size' => '',
                        'mime_types' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_578319dfafd63',
                'label' => 'Imagenes',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_57831a0d482b6',
                'label' => 'Subtítulo',
                'name' => 'subtitulo_imagenes',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array(
                'key' => 'field_57831a384430f',
                'label' => 'Item Imagenes',
                'name' => 'item_imagenes',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => '',
                'max' => '',
                'layout' => 'row',
                'button_label' => 'Agregar Fila',
                'sub_fields' => array(
                    array(
                        'key' => 'field_57831a5744310',
                        'label' => 'Imagen',
                        'name' => 'imagen_galeria',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'url',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                    ),
                    array(
                        'key' => 'field_57831aa30f754',
                        'label' => 'Tipo de Imagen',
                        'name' => 'imagen_tipo',
                        'type' => 'checkbox',
                        'instructions' => '',
                        'required' => '',
                        'conditional_logic' => '',
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            'instalaciones' => 'instalaciones',
                            'clases' => 'clases',
                        ),
                        'default_value' => array(
                        ),
                        'layout' => 'horizontal',
                        'toggle' => 0,
                    ),
                    array(
                        'key' => 'field_578311231230f754',
                        'label' => 'Título',
                        'name' => 'imagen_titulo',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_57831123eeee',
                        'label' => 'Mensaje',
                        'name' => 'imagen_mensaje',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'field_57831b2480e72',
                'label' => 'Contactanos',
                'name' => '_copiar',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_57831b3dd6e90',
                'label' => 'Subtítulo',
                'name' => 'subtitulo_contactanos',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array(
                'key' => 'field_57831b611c8f7',
                'label' => 'Dirección',
                'name' => 'direccion',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array(
                'key' => 'field_57831b79512f7',
                'label' => 'Teléfono',
                'name' => 'telefono',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array(
                'key' => 'field_57831b8d512f8',
                'label' => 'EMail',
                'name' => 'email',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array(
                'key' => 'field_57831b9b512f9',
                'label' => 'Skype',
                'name' => 'skype',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array(
                'key' => 'field_57831ba8512fa',
                'label' => 'Horario',
                'name' => 'horario',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-home',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));

endif;