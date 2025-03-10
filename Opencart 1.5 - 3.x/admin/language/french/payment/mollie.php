<?php
/**
 * Copyright (c) 2012-2019, Mollie B.V.
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
$method_list_logo                   = '<a href="https://www.mollie.com" target="_blank"><img src="../image/mollie/mollie_logo.png" alt="Mollie" title="Mollie" style="border:0px" /></a>';
$_['text_mollie_banktransfer']      = $method_list_logo;
$_['text_mollie_belfius']           = $method_list_logo;
$_['text_mollie_creditcard']        = $method_list_logo;
$_['text_mollie_ideal']             = $method_list_logo;
$_['text_mollie_kbc']               = $method_list_logo;
$_['text_mollie_bancontact']        = $method_list_logo;
$_['text_mollie_paypal']            = $method_list_logo;
$_['text_mollie_giftcard']          = $method_list_logo;
$_['text_mollie_eps']               = $method_list_logo;
$_['text_mollie_klarnapaylater']    = $method_list_logo;
$_['text_mollie_klarnapaynow']      = $method_list_logo;
$_['text_mollie_klarnasliceit']     = $method_list_logo;
$_['text_mollie_przelewy24']  	    = $method_list_logo;
$_['text_mollie_applepay']  	    = $method_list_logo;
$_['text_mollie_voucher']    	    = $method_list_logo;
$_['text_mollie_in3']    	        = $method_list_logo;
$_['text_mollie_mybank']      	    = $method_list_logo;
$_['text_mollie_billie']      	    = $method_list_logo;
$_['text_mollie_klarna']      	    = $method_list_logo;
$_['text_mollie_twint']      	    = $method_list_logo;
$_['text_mollie_blik']      	    = $method_list_logo;
$_['text_mollie_bancomatpay']       = $method_list_logo;
$_['text_mollie_trustly']           = $method_list_logo;
$_['text_mollie_alma']              = $method_list_logo;
$_['text_mollie_riverty']           = $method_list_logo;
$_['text_mollie_payconiq']          = $method_list_logo;
$_['text_mollie_satispay']          = $method_list_logo;

// Heading
$_['heading_title']           = "Mollie";
$_['title_global_options']    = "Paramètres";
$_['title_payment_status']    = "États de paiement";
$_['title_mod_about']         = "Sur ce module";
$_['footer_text']             = "Services paiement";
$_['title_mail']              = "Email";

// Module names
$_['name_mollie_bancontact']     = "Bancontact";
$_['name_mollie_banktransfer']   = "Virement bancaire";
$_['name_mollie_belfius']        = "Belfius Direct Net";
$_['name_mollie_creditcard']     = "Creditcard";
$_['name_mollie_ideal']          = "iDEAL";
$_['name_mollie_kbc']            = "Bouton de paiement KBC/CBC";
$_['name_mollie_paypal']         = "PayPal";
$_['name_mollie_giftcard']       = 'Giftcard';
$_['name_mollie_eps']            = 'EPS';
$_['name_mollie_klarnapaynow']   = 'Klarna Pay Now';
$_['name_mollie_klarnapaylater'] = 'Klarna Pay Later';
$_['name_mollie_klarnasliceit']  = 'Klarna Slice It';
$_['name_mollie_przelewy24']  	 = 'P24';
$_['name_mollie_applepay']  	 = 'Apple Pay';
$_['name_mollie_voucher']        = "Voucher";
$_['name_mollie_in3']            = "iDEAL in3";
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
$_['text_edit']                     = "Éditer Mollie";
$_['text_payment']                  = "Paiement";
$_['text_success']                  = "Succès: Vous avez réussi à modifier les paramètres Mollie!";
$_['text_missing_api_key']          = "S'il vous plaît remplir votre clé API dans l'onglet <a data-toggle='tab' href='#' class='settings'>Paramètres</a>.";
$_['text_activate_payment_method']  = 'Activer ce mode de paiement via le <a href="https://www.mollie.com/dashboard/settings/profiles/" target="_blank">Mollie dashboard</a>.';
$_['text_no_status_id']             = '- Ne pas mettre à jour le statut (non recommandé) -';
$_['text_enable']                   = "Activer";
$_['text_disable']                  = "Désactiver";
$_['text_connection_success']       = "Succès: Connexion à Mollie réussie!";
$_['text_error'] 			        = "Avertissement: quelque chose s'est mal passé. Veuillez réessayer plus tard!";
$_['text_creditcard_required']      = "Nécessite une carte de crédit";
$_['text_mollie_api']               = "Mollie API";
$_['text_mollie_app']               = "Mollie App";
$_['text_general'] 	                = "Général";
$_['text_enquiry'] 	                = "Comment pouvons-nous vous aider?";
$_['text_enquiry_success'] 	        = "Succès: Votre demande a été soumise. Nous reviendrons vers vous bientôt. Je vous remercie!";
$_['text_update_message']           = 'Mollie : Une nouvelle version (%s) est disponible. Cliquez <a href="%s">ici</a> pour mettre à jour. Vous ne voulez plus voir ce message ? Cliquez sur <a href="javascript:void(0);" onclick="document.cookie=\'hide_mollie_update_message_version=%s\'; $(this).parent().hide();">ici</a>.';
$_['text_update_message_warning']  = 'Mollie : Une nouvelle version (%s) est disponible. Veuillez mettre à jour votre version PHP vers %s ou une version ultérieure pour mettre à jour le module ou continuer à utiliser la version actuelle. Vous ne voulez plus voir ce message ? Cliquez sur <a href="javascript:void(0);" onclick="document.cookie=\'hide_mollie_update_message_version=%s\'; $(this).parent().hide();">ici</a>.';
$_['text_update_success']          = "Succès: le module Mollie a été mis à jour vers la version %s.";
$_['text_default_currency']        = "Devise utilisée dans le magasin";
$_['text_custom_css']              = "Custom CSS For Mollie Components";
$_['text_contact_us']              = "Contactez-nous - Support technique";
$_['text_bg_color']                = "Background color";
$_['text_color']                   = "Color";
$_['text_font_size']               = "Font size";
$_['text_other_css']               = "Other CSS";
$_['text_module_by']               = "Module by Quality Works - Technical Support";
$_['text_mollie_support']          = "Mollie - Support";
$_['text_contact']                 = "Contact";
$_['text_allowed_variables']       = "Variables autorisées: {firstname}, {lastname}, {next_payment}, {product_name}, {order_id}, {store_name}";
$_['text_browse']                  = 'Browse';
$_['text_clear']                   = 'Clear';
$_['text_image_manager']           = 'Image Manager';
$_['text_left']                    = 'Gauche';
$_['text_right']                   = 'Droite';
$_['text_more']                    = 'Suite';
$_['text_no_maximum_limit']        = 'Pas de limite de montant maximum';
$_['text_standard_total']          = 'Total standard: %s';
$_['text_advance_option']          = 'Options avancées pour %s';
$_['text_payment_api']             = 'API de paiement';
$_['text_order_api']               = 'API de commandes';
$_['text_info_orders_api']         = 'Pourquoi utiliser l\'API des commandes?';
$_['text_pay_link_variables']      = "Variables autorisées: {firstname}, {lastname}, {amount}, {order_id}, {store_name}, {payment_link}";
$_['text_pay_link_text']           = "Dear customer, <br /><br /> Click on the link below to complete your payment of {amount} for the order {order_id}.<br /><br /> {payment_link}<br /><br /><br /><br />Regards,<br /><br />{store_name}";
$_['text_recurring_payment']       = "Paiement récurrent";
$_['text_payment_link']            = "Lien de paiement";
$_['text_coming_soon']             = "À venir";

// Entry
$_['entry_payment_method']           = "Procédé de paiement";
$_['entry_activate']                 = "Activate";
$_['entry_sort_order']               = "Ordre de triage";
$_['entry_api_key']                  = "Clé API";
$_['entry_description']              = "Description";
$_['entry_show_icons']               = "Afficher des icônes";
$_['entry_show_order_canceled_page'] = "Afficher un message si le paiement est annulé";
$_['entry_geo_zone']                 = "Geo Zone";
$_['entry_client_id']                = "Client ID";
$_['entry_client_secret']            = "Client Secret";
$_['entry_redirect_uri']             = "Redirect URI";
$_['entry_payment_screen_language']  = "Langue par défaut de l'écran de paiement";
$_['entry_mollie_connect'] 			 = "Mollie connect";
$_['entry_name'] 			 		 = "Nom";
$_['entry_email'] 			 		 = "E-mail";
$_['entry_subject'] 			     = "Matière";
$_['entry_enquiry'] 			 	 = "Enquête";
$_['entry_debug_mode'] 			 	 = "Debug mode";
$_['entry_mollie_component'] 		 = "Mollie components";
$_['entry_mollie_component_base'] 	 = "Custom CSS for Base input field";
$_['entry_mollie_component_valid'] 	 = "Custom CSS for Valid input field";
$_['entry_mollie_component_invalid'] = "Custom CSS for Invalid input field";
$_['entry_default_currency'] 		 = "Payez toujours avec";
$_['entry_email_subject'] 		 	 = "Objet";
$_['entry_email_body'] 			 	 = "Corps";
$_['entry_title']	 			 	 = "Titre";
$_['entry_image']	 			 	 = "Image";
$_['entry_status']	 			 	 = "Status";
$_['entry_align_icons']              = "Aligner les icônes";
$_['entry_single_click_payment']     = "Paiement en un seul clic";
$_['entry_order_expiry_days']        = "Jours d'expiration de la commande";
$_['entry_partial_refund']           = "Remboursement partiel";
$_['entry_amount']                   = "Amount (exemple: 5, 5%)";
$_['entry_payment_fee']              = "Payment Fee";
$_['entry_payment_fee_tax_class']    = "Payment Fee Tax Class";
$_['entry_total']				     = "Le total";
$_['entry_minimum']				     = "Le minimum";
$_['entry_maximum']				     = "Maximum";
$_['entry_api_to_use']  		     = "API à utiliser";
$_['entry_payment_link']  		     = "Envoyer le lien de paiement";
$_['entry_payment_link_sep_email']   = "Envoyer dans un e-mail séparé";
$_['entry_payment_link_ord_email']   = "Envoyer un e-mail de confirmation de commande";
$_['entry_partial_credit_order']     = 'Créer une commande de crédit sur remboursement (partiel)';

// Help
$_['help_view_profile']             = 'Vous pouvez trouver votre clé API dans <a href="https://www.mollie.com/dashboard/settings/profiles/" target="_blank" class="alert-link">vos profils de site à Mollie</a>.';
$_['help_status']                   = "Activer le module";
$_['help_api_key']                  = 'Entrer ici le <code>api_key</code> du profil que vous souhaitez utiliser. Le cl&eacute; API commence par <code>test_</code> ou <code>live_</code>.';
$_['help_description']              = 'Cette description apparaîtra sur le relevé bancaire de votre client. Vous pouvez utiliser un maximum de 29 caractères. ASTUCE: Utilisez le <code>%</code>, il sera remplacé par l\'id de la commande du paiement. N\'oubliez pas que <code>%/code> peut devenir plusieurs caractères!';
$_['help_show_icons']               = 'Afficher les icônes à côté des méthodes de paiement Mollie sur la page de paiement.';
$_['help_show_order_canceled_page'] = 'Afficher un message au client si un paiement est annulé, avant de rediriger le client vers leur panier.';
$_['help_redirect_uri']				= 'L\'URI de redirection dans votre tableau de bord mollie doit correspondre à cet URI.';
$_['help_mollie_app']				= 'En enregistrant votre module en tant qu\'application sur le tableau de bord Mollie, vous débloquerez des fonctionnalités ajoutées. Ce n\'est pas nécessaire pour utiliser les paiements Mollie.';
$_['help_apple_pay']				= 'Apple Pay nécessite que la carte de crédit soit activée sur le profil de votre site Web. Veuillez activer la méthode de paiement carte de crédit en premier.';
$_['help_mollie_component']			= 'Les composants Mollie vous permettent d\'afficher les champs nécessaires pour les données du titulaire de la carte de crédit à votre propre caisse.';
$_['help_single_click_payment']		= 'Permettre à vos clients de débiter une carte de crédit précédemment utilisée en un seul clic.';
$_['help_total']					= 'Le montant minimum et maximum du paiement avant que ce mode de paiement ne devienne actif';
$_['help_payment_link']				= 'Lors de la création de commandes à partir de l\'administrateur, une méthode <strong>Lien de paiement Mollie</strong> sera disponible pour envoyer un lien de paiement au client pour paiement. Vous pouvez définir le texte de l\'e-mail sous l\'onglet e-mail.';

// Info
$_['entry_module']            = "Module";
$_['entry_mod_status']        = "État du module";
$_['entry_comm_status']       = "État de la communication";
$_['entry_support']           = "Assistance";

$_['entry_version']           = '<a href="https://github.com/mollie/OpenCart/releases" target="_blank">MollieOpenCart</a>';

// Error
$_['error_permission']         = "Attention: Vous n'avez pas l'autorisation de modifier les méthodes de paiement Mollie.";
$_['error_api_key']            = "La clé API est nécessaire!";
$_['error_api_key_invalid']    = "La clé API est invalide!";
$_['error_description']        = "Description est nécessaire!";
$_['error_file_missing']       = "Fichier ne existe pas";
$_['error_name']               = 'Attention: le nom doit comporter entre 3 et 25 caractères!';
$_['error_email']              = 'Attention: Adresse e-mail ne semble pas être valide!';
$_['error_subject']            = 'Attention: le sujet doit avoir 3 caractères!';
$_['error_enquiry']            = 'Attention: le texte de la requête doit comporter 25 caractères!';
$_['error_no_api_client']      = 'API client not found.';
$_['error_api_help']           = 'You can ask your hosting provider to help with this.';
$_['error_comm_failed']        = '<strong>Communicating with Mollie failed:</strong><br/>%s<br/><br/>Please check the following conditions. You can ask your hosting provider to help with this.<ul><li>Make sure outside connections to %s are not blocked.</li><li>Make sure SSL v3 is disabled on your server. Mollie does not support SSL v3.</li><li>Make sure your server is up-to-date and the latest security patches have been installed.</li></ul><br/>Contact <a href="mailto:info@mollie.nl">info@mollie.nl</a> if this still does not fix your problem.';
$_['error_no_api_key']         = 'No API key provided. Please insert your API key.';
$_['error_order_expiry_days']  = 'Attention: il n\'est pas possible d\'utiliser Klarna Slice it ou Klarna Pay plus tard comme méthode lorsque la date d\'expiration est plus de 28 jours dans le futur.';
$_['error_mollie_payment_fee'] = 'Attention: le total de la commande des frais de paiement Mollie est désactivé!';
$_['error_min_php_version']    = 'Attention : Ce module Mollie nécessite PHP version %s ou supérieure pour fonctionner. Veuillez contacter votre développeur Web pour résoudre ce problème!';

// Status
$_['entry_pending_status']            = "État de paiement attente";
$_['entry_failed_status']             = "État de paiement échoué";
$_['entry_canceled_status']           = "État de paiement annulé";
$_['entry_expired_status']            = "État de paiement expiré";
$_['entry_processing_status']         = "État de paiement traitement";
$_['entry_refund_status']	          = "État de paiement rembourser";
$_['entry_partial_refund_status']	  = "Statut de remboursement partiel";
$_['entry_shipping_status']           = "Statut de la commande expédiée";
$_['entry_shipment']       			  = "Créer un envoi";
$_['entry_create_shipment_status']    = "Créer un envoi après le statut de la commande";
$_['help_shipment'] 				  = "Envoi sera créé juste après la création de la commande. Sélectionnez «Non» pour créer une expédition lorsque la commande atteint un statut spécifique et sélectionnez le statut de la commande ci-dessous.";

$_['text_create_shipment_automatically']            = "Créer automatiquement l'envoi lors de la création de la commande";
$_['text_create_shipment_on_status']                = "Créer un envoi lors du réglage de la commande à ce statut";
$_['text_create_shipment_on_order_complete']        = "Créer une expédition lors du paramétrage de la commande pour passer à la commande";
$_['entry_create_shipment_on_order_complete'] 		= "Créer une expédition à la fin de la commande";

//Button
$_['button_update']         = "Mettre à jour";
$_['button_mollie_connect'] = "Connect via Mollie";
$_['button_advance_option'] = "Advance Option";
$_['button_save_close']     = "Sauvegarder et fermer";

//Error log
$_['text_log_success']	   = 'Succès: vous avez effacé avec succès votre journal des erreurs!';
$_['text_log_list']        = 'Liste des erreurs';
$_['error_log_warning']	   = 'Avertissement: votre fichier journal d\'erreur %s est %s!';
$_['button_download']	   = 'Télécharger';

// Summernote
$_['summernote']                    = 'fr-FR';
