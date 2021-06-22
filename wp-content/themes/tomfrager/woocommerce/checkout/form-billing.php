<?php
/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 * @global WC_Checkout $checkout
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="woocommerce-billing-fields">
	<?php if ( wc_ship_to_billing_address_only() && WC()->cart->needs_shipping() ) : ?>

<!--		<h3>--><?php //esc_html_e( 'Billing &amp; Shipping', 'woocommerce' ); ?><!--</h3>-->

	<?php else : ?>

<!--		<h3>--><?php //esc_html_e( 'Billing details', 'woocommerce' ); ?><!--</h3>-->

	<?php endif; ?>

<!--	--><?php //do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>
	<div class="woocommerce-billing-fields__field-wrapper">
        <p>*champs obligatoires</p>
        <?php
		$fields = $checkout->get_checkout_fields( 'billing' );

		foreach ( $fields as $key => $field ) {
			woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );
		}
		?>
	</div>

	<?php do_action( 'woocommerce_after_checkout_billing_form', $checkout ); ?>

    <button type="button" class="btn btn-orange">Valider mes informations</button>
</div>

<?php if ( ! is_user_logged_in() && $checkout->is_registration_enabled() ) : ?>
	<div class="woocommerce-account-fields">
		<?php if ( ! $checkout->is_registration_required() ) : ?>

			<p class="form-row form-row-wide create-account">
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" id="createaccount" <?php checked( ( true === $checkout->get_value( 'createaccount' ) || ( true === apply_filters( 'woocommerce_create_account_default_checked', false ) ) ), true ); ?> type="checkbox" name="createaccount" value="1" /> <span><?php esc_html_e( 'Create an account?', 'woocommerce' ); ?></span>
				</label>
			</p>

		<?php endif; ?>

		<?php do_action( 'woocommerce_before_checkout_registration_form', $checkout ); ?>

		<?php if ( $checkout->get_checkout_fields( 'account' ) ) : ?>

			<div class="create-account">
				<?php foreach ( $checkout->get_checkout_fields( 'account' ) as $key => $field ) : ?>
					<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>
				<?php endforeach; ?>
				<div class="clear"></div>
			</div>

		<?php endif; ?>

		<?php do_action( 'woocommerce_after_checkout_registration_form', $checkout ); ?>
	</div>
<?php endif; ?>

<style>
    label{
        position: absolute;
        left: 13%;
        top: -25%;
        background: white;
        padding: 10px 10px 0 10px
    }
    p.form-row{
        position: relative;
        width: 90% !important;
    }

    span input{
        border-radius: 15px;
        border: 1px solid;
        line-height: 56px !important;
        padding: 0 15px 0 15px;
    }
    .woocommerce-billing-fields__field-wrapper{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 25px;
    }

    .select2-selection__rendered,.select2-selection__arrow{
        position: absolute;
        top: 50% !important;
        transform: translateY(-50%) !important;
    }

    .select2-selection{
        position: relative;
        border-radius: 15px !important;
        border: 1px solid black !important;
        height: 56px !important;
    }

    #billing_company_field,#order_comments_field,#ce4wp_checkout_consent_checkbox_field{
        display: none;
    }
</style>