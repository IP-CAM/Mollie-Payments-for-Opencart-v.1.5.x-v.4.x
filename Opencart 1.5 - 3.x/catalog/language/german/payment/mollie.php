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

/**
 * German language file for iDEAL by Mollie
 */

// Text
$_['heading_title']             = 'Zahlung via Mollie';
$_['ideal_title']               = 'Ihre Zahlung';
$_['text_title']                = 'Online bezahlen';
$_['text_redirected']           = 'Der Kunde wurde auf den Zahlungs-Bildschirm umgeleitet';
$_['text_issuer_giftcard']      = 'Wählen Sie Ihre Giftcard';
$_['text_issuer_kbc']           = 'Wählen Sie Ihren Bezahl-Button';
$_['text_issuer_voucher']       = 'Wähle Deine Marke';
$_['text_card_details']         = 'Bitte geben Sie Ihre Kreditkartendaten ein.';
$_['text_mollie_payments']      = 'Sichere Zahlungen von %s';
$_['text_subscription_desc']    = 'Bestellung %s, %s - %s, Alle %s für %s';
$_['text_subscription']		    = '%s alle %s %s';
$_['text_length']			    = ' für %s Zahlungen';
$_['text_trial']			    = '%s alle %s %s für %s Zahlungen dann ';
$_['text_error_report_success']	= 'Fehler wurde erfolgreich gemeldet!';
$_['text_payment_link_title']	= 'Mollie-Zahlungslink';
$_['text_payment_link_email_subject']	= 'Payment Link';
$_['text_payment_link_email_text']	= "Dear customer, <br /><br /> Click on the link below to complete your payment of {amount} for the order {order_id}.<br /><br /> {payment_link}<br /><br /><br /><br />Regards,<br /><br />{store_name}";
$_['text_link']             = 'Um Ihre Bestellung anzuzeigen, klicken Sie auf den folgenden Link:';
$_['text_footer']           = 'Bitte antworten Sie auf diese E-Mail, wenn Sie Fragen haben.';
$_['text_payment_link_full_title']	    = 'Mollie-Zahlungslink - Gesamtbetrag';
$_['text_payment_link_open_title']	    = 'Mollie-Zahlungslink - Offener Betrag';
$_['text_cancelled']                    = 'Die Dauerzahlung wurde storniert';
$_['text_subscription_cancel_confirm']  = 'Möchten Sie das Abonnement kündigen?';

// Button
$_['button_retry']          = 'Erneut versuchen, abzurechnen';
$_['button_report']         = 'Report Error';
$_['button_submit']         = 'Einreichen';
$_['button_subscription_cancel'] = 'Abonnement kündigen';

// Entry
$_['entry_card_holder']     	= 'Card Holder Name';
$_['entry_card_number']     	= 'Card Number';
$_['entry_expiry_date']     	= 'Expiry Date';
$_['entry_verification_code']	= 'CVV';

// Error
$_['error_card']				= 'Bitte überprüfen Sie Ihre Kartendaten.';
$_['error_missing_field']	    = 'Fehlende erforderliche Informationen. Bitte überprüfen Sie, ob grundlegende Adressdaten angegeben sind.';
$_['error_not_cancelled']       = 'Fehler: %s';

// Status page: payment failed (e.g. cancelled).
$_['heading_failed']     = 'Ihre Zahlung ist nicht abgeschlossen';
$_['msg_failed']         = 'Leider ist die Zahlung fehlgeschlagen. Klicken Sie auf die folgende Schaltfläche, um zum Abrechnungs-Bildschirm zurückzukehren.';

// Status page: payment pending.
$_['heading_unknown']    = 'Wir warten noch auf Ihre Zahlung';
$_['msg_unknown']        = 'Wir haben Ihre Zahlung noch nicht erhalten. Wir werden eine Bestätigungsmail verschicken, sobald die Zahlung eingegangen ist.';

// Status page: API failure.
$_['heading_error']      = 'Beim Erstellen der Zahlung ist ein Fehler aufgetreten';
$_['text_error']         = 'Beim Erstellen der Zahlung bei Mollie ist ein Fehler aufgetreten. Klicken Sie auf die folgende Schaltfläche, um zum Abrechnungs-Bildschirm zurückzukehren.';

// Payment link
$_['heading_payment_success'] = 'Die Zahlung ist eingegangen';
$_['text_payment_success'] = 'Ihre Zahlung wurde erfolgreich abgeschlossen. Danke schön!';
$_['heading_payment_failed'] = 'Die Zahlung ist unbekannt';
$_['text_payment_failed'] = 'Ihre Zahlung ist noch nicht eingegangen oder der Zahlungsstatus ist unbekannt. Wir informieren Sie, sobald die Zahlung eingegangen ist.';

// Response
$_['response_success']   = 'Die Zahlung wurde erhalten';
$_['response_none']      = 'Wir warten noch auf die Zahlung. Sie erhalten eine E-Mail, sobald uns der Status Ihrer Zahlung bekannt ist.';
$_['response_cancelled'] = 'Der Kunde hat die Zahlung annulliert';
$_['response_failed']    = 'Die Zahlung ist leider fehlgeschlagen. Versuchen Sie es bitte erneut.';
$_['response_expired']   = 'Die Zahlung ist verstrichen';
$_['response_unknown']   = 'Es ist ein unbekannter Fehler aufgetreten';
$_['shipment_success']   = 'Sendung wird erstellt';
$_['refund_cancelled']   = 'Die Rückerstattung wurde storniert.';
$_['refund_success'] 	 = 'Rückerstattung wurde erfolgreich bearbeitet!';

// Methods
$_['method_ideal']          = 'iDEAL';
$_['method_creditcard']     = 'Creditcard';
$_['method_mistercash']     = 'Bancontact';
$_['method_banktransfer']   = 'Übertragung';
$_['method_belfius']        = 'Belfius Direct Net';
$_['method_kbc']            = 'KBC/CBC-Betaalknop';
$_['method_paypal']         = 'PayPal';
$_['method_giftcard']       = 'Giftcard';
$_['method_eps']            = 'EPS';
$_['method_klarnapaylater'] = 'Klarna Pay Later';
$_['method_klarnapaynow']   = 'Klarna Pay Now';
$_['method_klarnasliceit']  = 'Klarna Slice It';
$_['method_przelewy24']     = 'P24';
$_['method_applepay']    	= 'Apple Pay';
$_['method_voucher']    	= 'Voucher';
$_['method_in3']    	    = 'iDEAL in3';
$_['method_mybank']         = 'MyBank';
$_['method_billie']         = 'Billie';
$_['method_klarna']         = 'Bezahlen Sie mit Klarna';
$_['method_twint']          = 'Twint';
$_['method_blik']           = 'Blik';
$_['method_bancomatpay']    = 'Bancomat Pay';
$_['method_trustly']        = 'Trustly';
$_['method_alma']           = 'Alma';
$_['method_riverty']        = 'Riverty';
$_['method_payconiq']       = 'Payconiq';
$_['method_satispay']       = 'Satispay';

//Round Off Description
$_['roundoff_description']  = 'Rundungsdifferenzen aufgrund von Währungsumrechnungen';

//Warning
$_['warning_secure_connection']  = 'Bitte stellen Sie sicher, dass Sie eine sichere Verbindung verwenden.';
