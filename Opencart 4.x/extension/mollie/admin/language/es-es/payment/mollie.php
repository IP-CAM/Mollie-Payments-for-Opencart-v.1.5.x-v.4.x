<?php
/**
 * Copyright (c) 2012-2015, Mollie B.V.
 * All rights reserved. 
 * 
 * Redistribution and use in source and binary forms, with or without 
 * modification, are permitted provided that the following conditions are met: 
 * 
 * - Redistributions of source code must retain the above copyright notice, 
 *    this list of conditions and the following disclaimer.
 * - Redistributions in binary form must reproduce the above copyright 
 *    notice, this list of conditions and the following disclaimer in the
 *    documentation and/or other materials provided with the distribution.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR AND CONTRIBUTORS ``AS IS'' AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED 
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE 
 * DISCLAIMED. IN NO EVENT SHALL THE AUTHOR OR CONTRIBUTORS BE LIABLE FOR ANY 
 * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES 
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR 
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER 
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT 
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY 
 * OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH 
 * DAMAGE. 
 *
 * @package     Mollie
 * @license     Berkeley Software Distribution License (BSD-License 2) http://www.opensource.org/licenses/bsd-license.php
 * @author      Mollie B.V. <info@mollie.com>
 * @copyright   Mollie B.V.
 * @link        https://www.mollie.com
 */

// These are called automatically by the Payment modules list - do not change the names
$method_list_logo                = '<a href="https://www.mollie.com" target="_blank"><img src="../image/mollie/mollie_logo.png" alt="Mollie" title="Mollie" style="border:0px" /></a>';
$_['text_mollie_banktransfer']   = $method_list_logo;
$_['text_mollie_belfius']        = $method_list_logo;
$_['text_mollie_creditcard']     = $method_list_logo;
$_['text_mollie_ideal']          = $method_list_logo;
$_['text_mollie_kbc']            = $method_list_logo;
$_['text_mollie_bancontact']     = $method_list_logo;
$_['text_mollie_paypal']         = $method_list_logo;
$_['text_mollie_giftcard']       = $method_list_logo;
$_['text_mollie_eps']            = $method_list_logo;
$_['text_mollie_klarnapaylater'] = $method_list_logo;
$_['text_mollie_klarnapaynow']   = $method_list_logo;
$_['text_mollie_klarnasliceit']  = $method_list_logo;
$_['text_mollie_przelewy_24']  	 = $method_list_logo;
$_['text_mollie_applepay']  	 = $method_list_logo;
$_['text_mollie_voucher']    	 = $method_list_logo;
$_['text_mollie_in_3']     	     = $method_list_logo;
$_['text_mollie_mybank']      	 = $method_list_logo;
$_['text_mollie_billie']      	 = $method_list_logo;
$_['text_mollie_klarna']      	 = $method_list_logo;
$_['text_mollie_twint']      	 = $method_list_logo;
$_['text_mollie_blik']      	 = $method_list_logo;
$_['text_mollie_bancomatpay']    = $method_list_logo;
$_['text_mollie_trustly']        = $method_list_logo;
$_['text_mollie_alma']           = $method_list_logo;
$_['text_mollie_riverty']        = $method_list_logo;
$_['text_mollie_payconiq']       = $method_list_logo;
$_['text_mollie_satispay']       = $method_list_logo;

// Heading
$_['heading_title']         = "Mollie";
$_['title_global_options']  = "Ajustes";
$_['title_payment_status']  = "Estados de pago";
$_['title_mod_about']       = "Acerca de este módulo";
$_['footer_text']           = "Servicios de pago";
$_['title_mail']              = "Email";

// Module names
$_['name_mollie_bancontact']     = "Bancontact";
$_['name_mollie_banktransfer']   = "Transferencia bancaria";
$_['name_mollie_belfius']        = "Belfius Direct Net";
$_['name_mollie_creditcard']     = "Creditcard";
$_['name_mollie_ideal']          = "iDEAL";
$_['name_mollie_kbc']            = "KBC/CBC-Betaalknop";
$_['name_mollie_paypal']         = "PayPal";
$_['name_mollie_giftcard']       = 'Giftcard';
$_['name_mollie_eps']            = 'EPS';
$_['name_mollie_klarnapaylater'] = 'Klarna Pay Later';
$_['name_mollie_klarnapaynow']   = 'Klarna Pay Now';
$_['name_mollie_klarnasliceit']  = 'Klarna Slice It';
$_['name_mollie_przelewy_24']  	 = 'P24';
$_['name_mollie_applepay']  	 = 'Apple Pay';
$_['name_mollie_voucher']        = "Voucher";
$_['name_mollie_in_3']           = "iDEAL in3";
$_['name_mollie_mybank']         = "MyBank";
$_['name_mollie_billie']         = "Billie";
$_['name_mollie_klarna']         = "Pay with Klarna";
$_['name_mollie_twint']          = "Twint";
$_['name_mollie_blik']           = "Blik";
$_['name_mollie_bancomatpay']    = "Bancomat Pay";
$_['name_mollie_trustly']        = "Trustly";
$_['name_mollie_alma']           = "Alma";
$_['name_mollie_riverty']        = "Riverty";
$_['name_mollie_payconiq']       = "Payconiq";
$_['name_mollie_satispay']       = "Satispay";

// Text
$_['text_edit']                     = "Corregir Mollie";
$_['text_extension']                = 'Extensions';
$_['text_success']                  = "Realizado con éxito: ¡los ajustes para el módulo han sido modificados!";
$_['text_missing_api_key']          = "Por favor, complete su clave API en la pestaña <a data-toggle='tab' href='javascript:void(0);' class='settings'>Configuración</a>.";
$_['text_activate_payment_method']  = 'Active esta forma de pago a través del <a href="https://www.mollie.com/dashboard/settings/profiles/" target="_blank">panel de control de Mollie</a>.';
$_['text_no_status_id']             = "- No cambiar de estado (no recomendado) -";
$_['text_enable']                   = "Activar";
$_['text_disable']                  = "Desactivar";
$_['text_connection_success']       = "Éxito: ¡La conexión con Mollie tiene éxito!";
$_['text_error'] 			        = "Advertencia: algo salió mal. ¡Por favor, inténtelo de nuevo más tarde!";
$_['text_creditcard_required']      = "Requiere tarjeta de crédito";
$_['text_mollie_api']               = "Mollie API";
$_['text_mollie_app']               = "Mollie App";
$_['text_general'] 	                = "General";
$_['text_enquiry'] 	                = "Como podemos ayudarte?";
$_['text_enquiry_success'] 	        = "Éxito: su consulta ha sido enviada. Nos pondremos en contacto con usted pronto. ¡Gracias!";
$_['text_update_message']           = 'Mollie: Hay una versión actualizada (%s) disponible del módulo Mollie. Haga clic <a href="%s">aquí</a> para actualizar. ¿No quieres volver a ver este mensaje? Haga clic en <a href="javascript:void(0);" onclick="document.cookie=\'hide_mollie_update_message_version=%s\'; $(this).parent().hide();">aquí</a>.';
$_['text_update_message_warning']  = 'Mollie: Hay una versión actualizada (%s) disponible del módulo Mollie. Actualice su versión de PHP a %s o posterior para actualizar el módulo o continuar usando la versión actual. ¿No quieres volver a ver este mensaje? Haga clic en <a href="javascript:void(0);" onclick="document.cookie=\'hide_mollie_update_message_version=%s\'; $(this).parent().hide();">aquí</a>.';
$_['text_update_success']          = "Éxito: el módulo Mollie se ha actualizado a la versión %s.";
$_['text_default_currency']        = "Moneda utilizada en la tienda";
$_['text_custom_css']              = "Custom CSS For Mollie Components";
$_['text_contact_us']              = "Contáctenos - Soporte técnico";
$_['text_bg_color']                = "Background color";
$_['text_color']                   = "Color";
$_['text_font_size']               = "Font size";
$_['text_other_css']               = "Other CSS";
$_['text_module_by']               = "Module by Quality Works - Technical Support";
$_['text_mollie_support']          = "Mollie - Support";
$_['text_contact']                 = "Contact";
$_['text_allowed_variables']       = "Variables permitidas: {firstname}, {lastname}, {next_payment}, {product_name}, {order_id}, {store_name}";
$_['text_browse']                  = 'Browse';
$_['text_clear']                   = 'Clear';
$_['text_image_manager']           = 'Image Manager';
$_['text_left']                    = 'Izquierda';
$_['text_right']                   = 'Derecha';
$_['text_more']                    = 'Más';
$_['text_no_maximum_limit']        = 'Sin límite de cantidad máxima';
$_['text_standard_total']          = 'Total estándar: %s';
$_['text_advance_option']          = 'Opciones avanzadas para %s';
$_['text_payment_api']             = 'API de pagos';
$_['text_order_api']               = 'API de pedidos';
$_['text_info_orders_api']         = '¿Por qué utilizar la API de pedidos?';
$_['text_pay_link_variables']      = "Variables permitidas: {firstname}, {lastname}, {amount}, {order_id}, {store_name}, {payment_link}";
$_['text_pay_link_text']           = "Dear customer, <br /><br /> Click on the link below to complete your payment of {amount} for the order {order_id}.<br /><br /> {payment_link}<br /><br /><br /><br />Regards,<br /><br />{store_name}";
$_['text_subscription_payment']    = "Pago de suscripción";
$_['text_payment_link']            = "Enlace de pago";
$_['text_coming_soon']             = "Muy pronto";

// Entry
$_['entry_payment_method']           = "Método de pago";
$_['entry_activate']                 = "Activar";
$_['entry_sort_order']               = "Orden de clasificación";
$_['entry_api_key']                  = "Clave API";
$_['entry_description']              = "Descripción";
$_['entry_show_icons']               = "Mostrar iconos";
$_['entry_show_order_canceled_page'] = "Mostrar notificación en caso de cancelación de pagos";
$_['entry_geo_zone']                 = "Zona Geo";
$_['entry_client_id']                = "Client ID";
$_['entry_client_secret']            = "Client Secret";
$_['entry_redirect_uri']             = "Redirect URI";
$_['entry_payment_screen_language']  = "Idioma predeterminado de la pantalla de pago";
$_['entry_mollie_connect'] 			 = "Mollie connect";
$_['entry_name'] 			 		 = "Nombre";
$_['entry_email'] 			 		 = "E-mail";
$_['entry_subject'] 			     = "Tema";
$_['entry_enquiry'] 			 	 = "Investigación";
$_['entry_debug_mode'] 			 	 = "Debug mode";
$_['entry_mollie_component'] 		 = "Mollie components";
$_['entry_mollie_component_base'] 	 = "Custom CSS for Base input field";
$_['entry_mollie_component_valid'] 	 = "Custom CSS for Valid input field";
$_['entry_mollie_component_invalid'] = "Custom CSS for Invalid input field";
$_['entry_default_currency'] 		 = "Paga siempre con";
$_['entry_email_subject'] 		 	 = "Asunto";
$_['entry_email_body'] 			 	 = "Cuerpo";
$_['entry_title']	 			 	 = "Título";
$_['entry_image']	 			 	 = "Imagen";
$_['entry_status']	 			 	 = "Status";
$_['entry_align_icons']              = "Alinear iconos";
$_['entry_single_click_payment']     = "Pago con un solo clic";
$_['entry_order_expiry_days']        = "Días de caducidad del pedido";
$_['entry_partial_refund']           = "Reembolso parcial";
$_['entry_amount']                   = "Amount (ejemplo: 5, 5%)";
$_['entry_payment_fee']              = "Payment Fee";
$_['entry_payment_fee_tax_class']    = "Payment Fee Tax Class";
$_['entry_total']				     = "Total";
$_['entry_minimum']				     = "Mínima";
$_['entry_maximum']				     = "Máxima";
$_['entry_api_to_use']  		     = "API para usar";
$_['entry_payment_link']  		     = "Enviar enlace de pago";
$_['entry_payment_link_sep_email']   = "Enviar en un correo electrónico separado";
$_['entry_payment_link_ord_email']   = "Enviar correo electrónico de confirmación del pedido";
$_['entry_partial_credit_order']     = 'Crear orden de crédito en reembolso (parcial)';

// Help
$_['help_view_profile']             = 'Puede encontrar su clave API en  <a href="https://www.mollie.com/dashboard/settings/profiles/" target="_blank" class="alert-link">sus 
perfiles de la web de Mollie</a>.';
$_['help_status']                   = "Activar módulo";
$_['help_api_key']                  = "Introduzca aquí la <code>clave_api</code> del perfil de la web que desea utilizar. La clave API comienza con <code>test_</code> o <code>live_</code>.";
$_['help_description']              = "La descripción aparecerá en el estado de cuenta de su cliente y se puede encontrar en la administración de Mollie. Puede utilizar hasta 29 caracteres. CONSEJO: Use<code>%</code>, que será reemplazado por el número de pedido. ¡El número de pedido puede tener algunos caracteres más!";
$_['help_show_icons']               = "Mostrar iconos junto a los métodos de pago de Mollie en la página de pago.";
$_['help_show_order_canceled_page'] = "Mostrar una notificación al cliente si un pago es cancelado, antes de redirigir al cliente de nuevo a la cesta de la compra.";
$_['help_redirect_uri']				= 'La redirección de URI en su panel de control de mollie debe coincidir con esta URI.';
$_['help_mollie_app']				= 'Al registrar su módulo como una aplicación en el panel de Mollie, desbloqueará funcionalidades adicionales. Esto no es necesario para utilizar los pagos de Mollie.';
$_['help_apple_pay']				= 'Apple Pay requiere que la tarjeta de crédito esté habilitada en el perfil de su sitio web. Por favor, active primero el método de tarjeta de crédito.';
$_['help_mollie_component']			= 'Los componentes de Mollie le permiten mostrar los campos necesarios para los datos del titular de la tarjeta de crédito en su propio pago.';
$_['help_single_click_payment']		= 'Permitiendo a sus clientes cargar una tarjeta de crédito utilizada anteriormente con un solo clic.';
$_['help_total']					= 'La cantidad mínima y máxima de pago antes de que este método de pago se active.';
$_['help_payment_link']				= 'Al crear pedidos desde el administrador, un método de <strong>Enlace de pago de Mollie</strong> estará disponible para enviar el enlace de pago al cliente para el pago. Puede configurar el texto del correo electrónico en la pestaña de correo electrónico.';

// Info
$_['entry_module']          = "Module";
$_['entry_mod_status']      = "Modulestatus";
$_['entry_comm_status']     = "Estado de comunicación";
$_['entry_support']         = "Ayuda";

$_['entry_version']         = '<a href="https://github.com/mollie/OpenCart/releases" target="_blank">Mollie Opencart</a>';

// Error
$_['error_permission']        = "Advertencia: no tienes permiso para modificar el módulo.";
$_['error_api_key']           = "¡La clave API de Mollie es obligatoria!";
$_['error_api_key_invalid']   = "¡Clave inválida de Mollie API!";
$_['error_description']       = "¡La descripción es obligatoria!";
$_['error_file_missing']      = "El archivo no existe";
$_['error_name']              = 'Advertencia: el nombre debe tener entre 3 y 25 caracteres';
$_['error_email']             = 'Advertencia: ¡La dirección de correo electrónico no parece ser válida!';
$_['error_subject']           = 'Advertencia: ¡El asunto debe tener 3 caracteres!';
$_['error_enquiry']           = 'Advertencia: ¡El texto de la consulta debe tener 25 caracteres de longitud!';
$_['error_no_api_client']     = 'API client not found.';
$_['error_api_help']          = 'You can ask your hosting provider to help with this.';
$_['error_comm_failed']       = '<strong>Communicating with Mollie failed:</strong><br/>%s<br/><br/>Please check the following conditions. You can ask your hosting provider to help with this.<ul><li>Make sure outside connections to %s are not blocked.</li><li>Make sure SSL v3 is disabled on your server. Mollie does not support SSL v3.</li><li>Make sure your server is up-to-date and the latest security patches have been installed.</li></ul><br/>Contact <a href="mailto:info@mollie.nl">info@mollie.nl</a> if this still does not fix your problem.';
$_['error_no_api_key']        = 'No API key provided. Please insert your API key.';
$_['error_order_expiry_days'] = 'Advertencia: No es posible utilizar Klarna Slice it o Klarna Pay más tarde como método cuando la fecha de caducidad es de más de 28 días en el futuro.';
$_['error_mollie_payment_fee'] = 'Advertencia: ¡El total del pedido de la tarifa de pago de Mollie está deshabilitado!';
$_['error_file']               = 'Advertencia: no se pudo encontrar el archivo %s!';
$_['error_address']            = 'La dirección de facturación está desactivada, los pedidos digitales no podrán pagarse. Puede activar la dirección de facturación en la <a href="%s">configuración</a>.';
$_['error_telephone']          = 'Algunos métodos de pago requieren el campo Teléfono. Habilítelo desde la <a href="%s">configuración</a> y hágalo obligatorio.';

// Status
$_['entry_pending_status']           = "¡Clave de API Mollie inválida!";
$_['entry_failed_status']            = "Estado de pago creado";
$_['entry_canceled_status']          = "Estado del pago fallido";
$_['entry_expired_status']           = "Estado del pago cancelado";
$_['entry_processing_status']        = "Estado del pago vencido";
$_['entry_refund_status']	         = "Estado del pago reembolso";
$_['entry_partial_refund_status']	 = "Estado de reembolso parcial";
$_['entry_shipping_status']          = "Estado del pedido enviado";
$_['entry_shipment']       			 = "Crear envío";
$_['entry_create_shipment_status']   = "Crear envío después del estado del pedido";
$_['help_shipment'] 				 = "El envío se creará justo después de crear el pedido. Seleccione 'No' para crear el envío cuando el pedido llegue a un estado específico y seleccione el estado del pedido a continuación.";

$_['text_create_shipment_automatically']            = "Crear envío automáticamente al crear el pedido";
$_['text_create_shipment_on_status']                = "Crear envío al establecer orden a este estado";
$_['text_create_shipment_on_order_complete']        = "Crear envío al establecer orden para ordenar estado completo";
$_['entry_create_shipment_on_order_complete'] 		= "Crear envío al completar el pedido";

//Button
$_['button_update']         = "Actualizar";
$_['button_mollie_connect'] = "Connect via Mollie";
$_['button_advance_option'] = "Advance Option";
$_['button_save_close']     = "Guardar cerrar";

//Error log
$_['text_log_success']	   = 'Éxito: ¡Ha borrado con éxito su registro de errores!';
$_['text_log_list']        = 'Lista de errores';
$_['error_log_warning']	   = 'Advertencia: ¡Su archivo de registro de errores %s es %s!';
$_['button_download']	   = 'Descargar';

//admin/language/es-es/sale/order.php
$_['button_refund'] = 'Reembolso';
$_['text_order_not_found'] = '¡No se han encontrado los detalles del pedido de Mollie!';
$_['text_no_refund'] = '¡No se puede procesar el reembolso!';
$_['text_refunded_already'] = '¡El reembolso ya se ha procesado!';
$_['text_refund_success']     = '¡El reembolso ha sido procesado con éxito!';
$_['text_confirm_refund']     = 'Está a punto de reembolsar este pago, esto no se puede deshacer. ¿Estás seguro de que te gustaría continuar?';
$_['entry_amount']     = 'Amount';
$_['button_partial_refund']     = 'Reembolso parcial';
$_['error_refund_amount']       = 'Advertencia: ¡Ingrese una cantidad correcta para reembolsar!';
$_['text_partial_refund_success']     = '¡El reembolso parcial de la cantidad %s se ha procesado correctamente!';
$_['entry_partial_refund_type']     = 'Tipo de reembolso';
$_['text_custom_amount']     = 'Reembolso de cantidad personalizada';
$_['text_productline']       = 'Reembolso de la línea de productos';
$_['entry_productline']      = 'Líneas de productos';
$_['entry_quantity']         = 'Cantidad';
$_['help_quantity']          = 'Cantidad a reembolsar. No debe exceder la cantidad pedida.';
$_['error_productline']      = 'Advertencia: ¡Seleccione una línea de productos para reembolsar!';
$_['tab_mollie']             = 'Mollie';
$_['text_mollie_payment']    = 'Pagos';
$_['text_mollie_refund']     = 'Reembolsos';
$_['column_date_added']      = 'Fecha Agregada';
$_['column_payment_method']  = 'Payment Method';
$_['column_amount']          = 'Monto';
$_['column_status']          = 'Estado';
$_['button_payment_link']    = 'Enviar enlace de pago';
$_['column_stock_mutation']   = 'Mutación común';
$_['help_stock_mutation']    = 'Seleccione si desea reabastecer los productos acreditados';
$_['entry_mollie_payment_link'] = 'Enviar enlace de pago a Mollie';

//admin/language/es-es/catalog/product.php
$_['entry_voucher_category']            = 'Categoría de cupón';
$_['help_voucher_category']             = 'Seleccione de las categorías para usar los pagos con vales de mollie.';
