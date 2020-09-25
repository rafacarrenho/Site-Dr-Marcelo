<?php

/**
 * Shantal Theme Customizer
 *
 * @package Shantal
 */

 function shantal_customizer( $wp_customize ){

  /***********************\
  * Sessão de endereço
  \***********************/
 	$wp_customize->add_section(
 		'sec_endereco', array(
 			'title'			=> 'Endereço',
 			'description'	=> 'Configuração de endereço'
 		)
 	);

    // Item Sessão
	 	// Rua - Numero - Complemento
	 	$wp_customize->add_setting(
	 		'set_endereco_rua', array(
	 			'type'					=> 'theme_mod',
	 			'default'				=> 'Rua Alameda, Nº 401, Bl 5',
	 			'sanitize_callback'		=> 'sanitize_text_field'
	 		)
	 	);

	  	$wp_customize->add_control(
	 		'set_endereco_rua', array(
	 			'label'				=> 'Rua, Numero, Complemento',
	 			'description'		=> 'Ex: Rua Alameda, Nº 401, Bl 5',
	 			'section'			=> 'sec_endereco',
	 			'type'				=> 'text'
	 		)
     );	
     
    // Item Sessão
    // Bairro - Cidade - Estado
	 	$wp_customize->add_setting(
      'set_endereco_cidade', array(
        'type'					=> 'theme_mod',
        'default'				=> 'Bairro - Cidade - SP',
        'sanitize_callback'		=> 'sanitize_text_field'
      )
    );

     $wp_customize->add_control(
      'set_endereco_cidade', array(
        'label'				=> 'Bairro - Cidade - Estado',
        'description'		=> 'Ex: Bela Vista - São Paulo - SP',
        'section'			=> 'sec_endereco',
        'type'				=> 'text'
      )
    );	

    // CEP
	 	$wp_customize->add_setting(
      'set_endereco_cep', array(
        'type'					=> 'theme_mod',
        'default'				=> 'CEP',
        'sanitize_callback'		=> 'absint',
        'max-length'      => '4'
      )
    );

     $wp_customize->add_control(
      'set_endereco_cep', array(
        'label'				=> 'CEP',
        'description'		=> 'Ex: 00000000 <br> *Usar apenas Numeros!',
        'section'			=> 'sec_endereco',
        'type'				=> 'number'
      )
    );	

  /***************************************************/
  /***********************\
  * Sessão de Contato
  \***********************/
 	$wp_customize->add_section(
    'sec_contato', array(
      'title'			=> 'Contato',
      'description'	=> 'Configuração de contato'
    )
  );

   // Item Sessão
    // Telefone 1
    $wp_customize->add_setting(
      'set_contato_tel_1', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'absint'
      )
    );

     $wp_customize->add_control(
      'set_contato_tel_1', array(
        'label'				=> 'Telefone Principal com DDD',
        'description'		=> 'Ex: 11999999999 <br> *Usar apenas Numeros!',
        'section'			=> 'sec_contato',
        'type'				=> 'number'
      )
    );	

    // Item Sessão
    // Telefone 2
    $wp_customize->add_setting(
      'set_contato_tel_2', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'absint'
      )
    );

     $wp_customize->add_control(
      'set_contato_tel_2', array(
        'label'				=> 'Telefone Secundario com DDD',
        'description'		=> 'Ex: 11999999999 <br> *Usar apenas Numeros!',
        'section'			=> 'sec_contato',
        'type'				=> 'number'
      )
    );
    
    // Item Sessão
    // WhatsApp
    $wp_customize->add_setting(
      'set_contato_whats', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'absint'
      )
    );

     $wp_customize->add_control(
      'set_contato_whats', array(
        'label'				=> 'Whatsapp com DDD',
        'description'		=> 'Ex: 11999999999 <br> *Usar apenas Numeros!',
        'section'			=> 'sec_contato',
        'type'				=> 'number'
      )
    );	

    // Item Sessão
    // E-Mail
    $wp_customize->add_setting(
      'set_contato_email', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_email'
      )
    );

     $wp_customize->add_control(
      'set_contato_email', array(
        'label'				=> 'E-mail',
        'description'		=> 'Ex: contato@empresa.com.br',
        'section'			=> 'sec_contato',
        'type'				=> 'text'
      )
    );	

    // Item Sessão
    // Horario de funcionamento
    $wp_customize->add_setting(
      'set_contato_horario', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field'
      )
    );

     $wp_customize->add_control(
      'set_contato_horario', array(
        'label'				=> 'Horario de funcionamento',
        'description'		=> 'Ex: De segunda a sexta das 8h as 21h',
        'section'			=> 'sec_contato',
        'type'				=> 'text'
      )
    );	
	
 }
 add_action( 'customize_register', 'shantal_customizer' );
