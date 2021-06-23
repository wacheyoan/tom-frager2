<?php
/**
 * Output a single payment method
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/payment-method.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<li class="wc_payment_method payment_method_<?php echo esc_attr( $gateway->id ); ?>">
    <div style="display: flex;align-items: center">
    <label style="float: left;margin-right: 10px">
	<input id="payment_method_<?php echo esc_attr( $gateway->id ); ?>" type="radio" class="input-radio" name="payment_method" value="<?php echo esc_attr( $gateway->id ); ?>" <?php checked( $gateway->chosen, true ); ?> data-order_button_text="<?php echo esc_attr( $gateway->order_button_text ); ?>" />
    <svg width="22" height="22" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M40.3333 20.8299C40.275 19.8826 40.1002 19.0467 39.9253 18.3223C39.6338 16.3162 39.1092 14.7559 38.293 13.4185C37.4186 12.0254 36.4277 10.7437 34.9703 9.01629C34.6206 8.62622 34.2708 8.3476 33.921 8.01325C33.7461 7.84608 33.5713 7.67891 33.3964 7.56746C33.2215 7.45601 32.9883 7.28884 32.8135 7.17739C32.4054 6.89876 32.0556 6.62014 31.7059 6.39724C31.2978 6.17435 30.9481 5.95145 30.54 5.72855C28.9661 4.94841 27.2756 4.27972 25.2353 3.66675C25.0021 3.88965 24.7689 4.05682 24.4192 4.11254C24.0694 4.22399 23.7197 4.27972 23.3116 4.27972C22.4372 4.27972 21.4462 4.22399 20.3386 4.16827C19.231 4.16827 18.0652 4.16827 17.0159 4.44689C16.7244 4.50261 16.4912 4.55834 16.2581 4.66979C16.0249 4.78124 15.7917 4.89269 15.5585 5.00413C15.0922 5.17131 14.6841 5.44993 14.451 5.72855C12.7022 6.84304 12.3524 8.06898 13.8097 7.79036C11.6529 9.07202 11.6529 7.95753 10.1372 9.57354C10.1372 9.23919 10.1955 8.90484 10.1955 8.51477C10.0207 8.5705 9.84578 8.68195 9.61261 8.73767C9.43772 8.79339 9.20455 8.90484 9.02967 9.01629C8.62161 9.23919 8.27185 9.46209 7.98038 9.85216C7.92209 10.298 7.86379 10.7437 7.8055 11.1895C7.16427 11.5239 6.81451 11.9697 6.46475 12.4155C6.28987 12.6384 6.17328 12.8613 6.05669 13.0842C5.94011 13.3071 5.88181 13.5857 5.76522 13.8086C5.59034 14.3101 5.41547 14.8116 5.24059 15.3132C5.06571 15.8147 4.77424 16.3719 4.42447 16.9849C5.53205 15.5361 4.54106 17.8765 5.124 17.8765C5.00741 17.9322 4.89082 18.0994 4.77424 18.2665C4.65765 18.4337 4.59935 18.6566 4.48277 18.8238C4.30789 19.1581 4.13301 19.381 4.13301 19.1024C4.01642 19.381 3.95813 19.6597 3.89983 19.9383C3.84154 20.2169 3.84154 20.4955 3.84154 20.7741C3.84154 21.0528 3.84154 21.2757 3.84154 21.5543C3.84154 21.8329 3.89983 22.0558 3.89983 22.2787C3.95813 22.7802 3.95812 23.1703 3.95812 23.6161C3.95812 24.0062 3.89983 24.3962 3.66666 24.7306C3.78324 25.0092 3.89983 25.2878 4.01642 25.5107C4.59935 26.7924 4.36618 27.9626 4.71594 29.2443L5.0657 29.3C5.53205 30.0244 6.17328 31.4175 6.28987 32.1419C6.81451 33.145 7.68891 34.0923 8.6799 34.8724L9.43772 35.4297C9.6709 35.5968 9.96237 35.764 10.2538 35.9312C10.5453 36.0984 10.7785 36.2655 11.0116 36.377C11.3031 36.4884 11.5363 36.6556 11.7695 36.7671C11.9443 36.9342 12.1775 37.1014 12.2941 37.2129C12.469 37.3243 12.5856 37.38 12.7022 37.4358C12.9353 37.5472 13.1102 37.5472 13.2851 37.5472C13.6349 37.5472 13.9263 37.4915 14.859 37.8258C15.3837 38.2159 16.1998 38.4388 16.9576 38.6617C17.7154 38.8289 18.4149 39.0518 18.7647 39.2747C17.8903 39.1075 17.3656 39.1075 16.841 39.1075C16.5495 39.1075 16.3164 39.0518 15.9666 38.996C15.6751 38.9403 15.2671 38.8289 14.859 38.606C15.1505 38.8846 14.3927 38.606 13.6932 38.3831C13.0519 38.1602 12.469 37.9373 13.1685 38.4945C14.9756 39.1075 16.9576 39.7762 18.9979 40.1105C19.5225 40.1662 19.9889 40.2777 20.5135 40.2777C21.0381 40.2777 21.5045 40.2777 22.0291 40.3334C23.0201 40.222 23.9528 40.1662 24.7106 39.8876C24.6523 40.0548 24.8855 40.0548 25.3519 40.0548C25.7599 40.0548 26.3429 39.8876 26.9841 39.7204C27.2756 39.6647 27.6253 39.5533 27.9168 39.3861C28.2083 39.2747 28.558 39.1632 28.8495 39.0518C29.4324 38.7731 29.8988 38.4945 30.2485 38.3273L30.3651 38.3831C30.9481 38.1044 31.4144 37.8258 31.9973 37.4915C32.2888 37.3243 32.522 37.1014 32.8717 36.8228C33.0466 36.7113 33.1632 36.5442 33.3381 36.4327C33.513 36.2655 33.6879 36.0984 33.8627 35.9312C35.6698 34.3152 37.0689 32.4206 38.0016 30.6931C38.7011 29.4114 39.1675 27.8511 39.4589 26.5138C39.5172 26.1794 39.5755 25.8451 39.5755 25.5107C39.5755 25.3435 39.6338 25.2321 39.6338 25.0649C39.6338 24.8978 39.6338 24.7863 39.6338 24.6191C39.6338 24.0619 39.6338 23.6161 39.6338 23.3375C39.5755 25.1207 39.284 26.7924 38.8177 28.3527C38.5262 29.0771 38.293 29.8572 37.885 30.4702C37.7101 30.8045 37.5352 31.1389 37.3603 31.4175C37.1272 31.6961 36.9523 31.9748 36.7191 32.2534C37.4769 31.2503 37.7101 30.6374 38.0016 30.1358C38.1182 29.8572 38.2348 29.6343 38.3513 29.3C38.4679 29.0214 38.5845 28.687 38.7594 28.2412C38.6428 28.5756 38.5262 28.8542 38.3513 29.1328L38.6428 28.4084C38.5262 28.5756 38.5845 28.4641 38.6428 28.2412C38.7011 28.074 38.7011 27.7954 38.7011 27.8511C38.5845 28.2969 38.3513 28.7427 38.1765 29.1885C38.0599 29.4114 38.0016 29.6343 37.885 29.8572L37.5352 30.4702C38.3513 29.1328 37.885 30.0244 37.7101 30.4702L37.3603 31.1389C37.2438 31.3618 37.0689 31.529 36.9523 31.7519C37.1855 31.4732 37.7101 30.6931 37.1272 31.6404C36.9523 31.919 36.7774 32.1977 36.5442 32.4763C36.3111 32.7549 36.0779 33.0335 35.8447 33.2564C36.0779 32.9221 36.3111 32.5877 36.4859 32.2534C35.4367 33.7579 34.1542 34.4824 32.7552 35.5968C32.522 35.6526 32.3471 35.6526 32.1139 35.7083C31.6476 35.9869 31.1229 36.2655 30.5983 36.4884L30.7149 36.3213L29.7822 36.7113C29.4907 36.8228 29.141 36.8785 28.8495 36.99C28.6163 37.1014 28.4414 37.1571 28.2666 37.2129C28.0917 37.2686 27.9751 37.3243 27.9168 37.38C27.7419 37.4915 27.6836 37.5472 27.6253 37.6586C26.8092 37.8815 26.0514 38.0487 25.7016 37.993C25.9931 37.8815 26.2846 37.7144 26.576 37.6029L25.7016 37.6586C26.2846 37.6586 25.0021 37.9373 24.8272 37.993C24.3609 37.993 24.0111 38.0487 23.7779 38.0487C23.5448 38.0487 23.3699 37.993 23.2533 37.993C23.0201 37.9373 22.8452 37.9373 22.2623 37.7701C21.6794 37.7701 20.9798 37.7144 20.4552 37.6029C19.9306 37.4915 19.5808 37.38 19.4642 37.6029C17.3074 36.8785 15.3254 35.764 13.7514 34.5381L12.877 34.2037C12.5273 33.7022 12.1775 33.3679 11.8861 32.9778C11.5946 32.5877 11.3031 32.3091 11.0116 31.9748C10.7202 31.6404 10.4287 31.3061 10.1372 30.9717C10.0207 30.7488 9.84578 30.5816 9.72919 30.3587C9.6709 30.2473 9.55431 30.1358 9.49602 30.0244C9.43772 29.913 9.37943 29.7458 9.32114 29.6343L9.55431 29.7458C9.26284 29.4114 8.91308 29.0771 8.62161 28.687C8.56332 28.2412 8.44673 27.8511 8.33014 27.5168C8.21356 27.1825 8.09697 26.8481 7.98038 26.5695C7.8638 26.2351 7.74721 25.9008 7.74721 25.5107C7.74721 25.2878 7.68891 25.1207 7.68891 24.8978C7.68891 24.6749 7.74721 24.3962 7.8055 24.1733C7.86379 23.8947 7.8638 23.6161 7.8638 23.3932C7.92209 23.1703 7.92209 22.9474 7.92209 22.7245C7.92209 22.5016 7.92209 22.3344 7.8638 22.1115C7.8638 21.9444 7.86379 21.7772 7.8055 21.61C7.68891 20.9413 7.39745 20.4398 7.10598 19.994C7.10598 19.7154 7.16427 19.381 7.22256 19.0467C7.33915 18.7681 7.51403 18.4337 7.68891 18.1551C7.8055 18.0436 7.8638 17.8765 7.98038 17.765C8.09697 17.6536 8.21356 17.4864 8.27185 17.375C8.50503 17.1521 8.67991 16.9292 8.79649 16.7063L8.7382 17.4307C8.97138 17.2078 9.20455 17.0406 9.49602 16.8734C10.1955 15.6475 10.487 15.7032 11.478 14.1429C13.6932 12.7498 12.4107 11.914 13.0519 10.688C13.5183 10.5766 14.0429 10.5209 14.5093 10.4094C14.9756 10.3537 15.5003 10.298 15.9666 10.298L15.7917 10.1308C16.0249 9.68499 16.1998 9.46209 16.433 9.29491C16.6078 9.12774 16.841 9.01629 17.1325 8.90484C17.4239 8.79339 17.7737 8.7934 18.2983 8.68195C18.823 8.5705 19.5225 8.51477 20.5135 8.3476L20.2803 7.73463C20.9799 8.01325 21.4462 7.9018 21.9708 7.73463C22.4955 7.56746 23.0784 7.40028 24.0111 7.45601C24.2443 7.45601 24.5358 7.56746 24.9438 7.67891C25.1187 7.73463 25.3519 7.79036 25.5268 7.9018C25.7599 8.01325 25.9348 8.06898 26.168 8.18043C27.1007 8.51477 28.0334 8.84912 28.8495 8.79339C29.4907 9.23919 30.1319 9.40636 30.7149 9.68499C31.0063 9.79643 31.2978 9.90788 31.5893 10.0193C31.8808 10.1308 32.1139 10.2422 32.4054 10.3537C32.6969 10.4651 32.93 10.5766 33.2215 10.688C33.4547 10.7995 33.7462 10.9666 33.9793 11.1338C34.2125 11.301 34.504 11.4682 34.7371 11.6353C34.9703 11.8582 35.2035 12.0811 35.4367 12.3598C35.5533 12.5269 35.6698 12.6941 35.7864 12.8056C35.903 12.9727 36.0196 13.0842 36.1362 13.2513C36.3694 13.53 36.5442 13.7529 36.7191 13.9758C37.0689 14.3658 37.2438 14.7002 37.1855 14.9231L37.0106 14.7002C37.0106 14.9231 37.0106 15.146 37.0106 15.3689L37.2438 15.3132C37.7101 16.149 38.3513 17.375 38.4679 18.2108C38.5845 18.378 38.6428 18.5452 38.7594 18.7123L38.9926 19.2139C39.1092 19.5482 39.284 19.9383 39.4006 20.2726C39.2257 19.7154 39.1092 19.1581 38.9343 18.5452V18.6009C38.8177 18.3223 38.6428 17.8765 38.4679 17.375C38.4096 17.2635 38.3513 17.1521 38.3513 17.0406C38.2931 16.9292 38.2348 16.8177 38.1765 16.7063C38.0599 16.4834 38.0016 16.3162 37.9433 16.149L38.3513 16.8734C38.0016 15.9818 38.4096 16.6505 38.5262 16.9292C39.1092 18.7681 39.1092 18.2108 39.4589 19.6039C39.5172 19.7711 39.5172 19.994 39.5755 20.1612C39.5755 20.3284 39.5755 20.4398 39.5755 20.3284C39.6338 20.7741 39.7504 21.4986 39.8087 22.1673C39.8087 22.836 39.867 23.3932 39.9253 23.4489C39.9253 23.5046 39.9253 23.5604 39.9253 23.6161C39.9836 23.4489 40.0419 23.1703 40.1002 22.7245C40.1584 22.5016 40.1584 22.223 40.2167 22.0001C40.275 21.4428 40.275 21.1642 40.3333 20.8299Z"
              fill="#326867"/>
    </svg>
    <svg width="10" height="10" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="radio-active">
        <path d="M10.1312 19.1108C14.9926 19.1108 18.9335 15.3435 18.9335 10.6964C18.9335 6.04923 14.9926 2.28198 10.1312 2.28198C5.26976 2.28198 1.32883 6.04923 1.32883 10.6964C1.32883 15.3435 5.26976 19.1108 10.1312 19.1108Z" fill="#326867"/>
        <path d="M19.1667 9.41481C19.1375 8.94115 19.0501 8.52322 18.9626 8.16101C18.8169 7.15797 18.5546 6.37783 18.1465 5.70914C17.7093 5.01258 17.2138 4.37175 16.4852 3.50802C16.3103 3.31299 16.1354 3.17368 15.9605 3.0065C15.8731 2.92292 15.7856 2.83933 15.6982 2.78361C15.6108 2.72788 15.4942 2.6443 15.4067 2.58857C15.2027 2.44926 15.0278 2.30995 14.8529 2.1985C14.6489 2.08705 14.474 1.9756 14.27 1.86415C13.483 1.47408 12.6378 1.13974 11.6176 0.833252C11.5011 0.944701 11.3845 1.02829 11.2096 1.05615C11.0347 1.11187 10.8598 1.13974 10.6558 1.13974C10.2186 1.13974 9.7231 1.11187 9.16931 1.08401C8.61552 1.08401 8.03259 1.08401 7.50794 1.22332C7.36221 1.25119 7.24562 1.27905 7.12903 1.33477C7.01245 1.3905 6.89586 1.44622 6.77927 1.50194C6.5461 1.58553 6.34207 1.72484 6.22548 1.86415C5.35108 2.4214 5.1762 3.03437 5.90487 2.89506C4.82644 3.53589 4.82644 2.97864 4.06862 3.78665C4.06862 3.61947 4.09777 3.4523 4.09777 3.25726C4.01033 3.28513 3.92289 3.34085 3.8063 3.36871C3.71886 3.39658 3.60227 3.4523 3.51483 3.50802C3.31081 3.61947 3.13593 3.73092 2.99019 3.92596C2.96104 4.14885 2.9319 4.37175 2.90275 4.59465C2.58214 4.76182 2.40726 4.98472 2.23238 5.20762C2.14493 5.31907 2.08664 5.43052 2.02835 5.54197C1.97005 5.65341 1.94091 5.79273 1.88261 5.90417C1.79517 6.15493 1.70773 6.40569 1.62029 6.65645C1.53285 6.90721 1.38712 7.18584 1.21224 7.49232C1.76603 6.7679 1.27053 7.93812 1.562 7.93812C1.5037 7.96598 1.44541 8.04956 1.38712 8.13315C1.32882 8.21674 1.29968 8.32819 1.24138 8.41177C1.15394 8.57895 1.0665 8.6904 1.0665 8.55108C1.00821 8.6904 0.979063 8.82971 0.949916 8.96902C0.920769 9.10833 0.92077 9.24764 0.92077 9.38695C0.92077 9.52626 0.92077 9.63771 0.92077 9.77702C0.92077 9.91633 0.949916 10.0278 0.949916 10.1392C0.979063 10.39 0.979062 10.585 0.979062 10.8079C0.979062 11.003 0.949915 11.198 0.833328 11.3652C0.891622 11.5045 0.949915 11.6438 1.00821 11.7552C1.29968 12.3961 1.18309 12.9812 1.35797 13.622L1.53285 13.6499C1.76603 14.0121 2.08664 14.7086 2.14493 15.0708C2.40725 15.5724 2.84446 16.046 3.33995 16.4361L3.71886 16.7147C3.83545 16.7983 3.98118 16.8819 4.12692 16.9655C4.27265 17.0491 4.38924 17.1326 4.50582 17.1884C4.65156 17.2441 4.76815 17.3277 4.88473 17.3834C4.97217 17.467 5.08876 17.5506 5.14705 17.6063C5.23449 17.662 5.29279 17.6899 5.35108 17.7178C5.46767 17.7735 5.55511 17.7735 5.64255 17.7735C5.81743 17.7735 5.96316 17.7456 6.42951 17.9128C6.69183 18.1078 7.09989 18.2193 7.4788 18.3307C7.8577 18.4143 8.20747 18.5258 8.38235 18.6372C7.94515 18.5536 7.68282 18.5536 7.4205 18.5536C7.27477 18.5536 7.15818 18.5258 6.9833 18.4979C6.83757 18.47 6.63354 18.4143 6.42951 18.3029C6.57525 18.4422 6.19634 18.3029 5.84658 18.1914C5.52596 18.08 5.23449 17.9685 5.58426 18.2471C6.48781 18.5536 7.4788 18.888 8.49893 19.0551C8.76125 19.083 8.99443 19.1387 9.25675 19.1387C9.51907 19.1387 9.75225 19.1387 10.0146 19.1666C10.5101 19.1109 10.9764 19.083 11.3553 18.9437C11.3262 19.0273 11.4428 19.0273 11.6759 19.0273C11.88 19.0273 12.1714 18.9437 12.492 18.8601C12.6378 18.8322 12.8127 18.7765 12.9584 18.6929C13.1041 18.6372 13.279 18.5815 13.4247 18.5258C13.7162 18.3864 13.9494 18.2471 14.1243 18.1635L14.1826 18.1914C14.474 18.0521 14.7072 17.9128 14.9987 17.7456C15.1444 17.662 15.261 17.5506 15.4359 17.4113C15.5233 17.3555 15.5816 17.272 15.669 17.2162C15.7565 17.1326 15.8439 17.0491 15.9314 16.9655C16.8349 16.1575 17.5344 15.2102 18.0008 14.3464C18.3505 13.7056 18.5837 12.9255 18.7295 12.2568C18.7586 12.0896 18.7878 11.9224 18.7878 11.7552C18.7878 11.6717 18.8169 11.6159 18.8169 11.5323C18.8169 11.4488 18.8169 11.393 18.8169 11.3094C18.8169 11.0308 18.8169 10.8079 18.8169 10.6686C18.7878 11.5602 18.642 12.3961 18.4088 13.1762C18.2631 13.5384 18.1465 13.9285 17.9425 14.235C17.8551 14.4021 17.7676 14.5693 17.6802 14.7086C17.5636 14.8479 17.4761 14.9873 17.3596 15.1266C17.7385 14.625 17.8551 14.3186 18.0008 14.0678C18.0591 13.9285 18.1174 13.817 18.1757 13.6499C18.234 13.5106 18.2923 13.3434 18.3797 13.1205C18.3214 13.2877 18.2631 13.427 18.1757 13.5663L18.3214 13.2041C18.2631 13.2877 18.2923 13.2319 18.3214 13.1205C18.3506 13.0369 18.3505 12.8976 18.3505 12.9255C18.2923 13.1483 18.1757 13.3712 18.0882 13.5941C18.0299 13.7056 18.0008 13.817 17.9425 13.9285L17.7676 14.235C18.1757 13.5663 17.9425 14.0121 17.8551 14.235L17.6802 14.5693C17.6219 14.6808 17.5344 14.7644 17.4761 14.8758C17.5927 14.7365 17.8551 14.3464 17.5636 14.8201C17.4761 14.9594 17.3887 15.0987 17.2721 15.238C17.1555 15.3773 17.0389 15.5166 16.9224 15.6281C17.0389 15.4609 17.1555 15.2937 17.243 15.1266C16.7183 15.8788 16.0771 16.2411 15.3776 16.7983C15.261 16.8262 15.1735 16.8262 15.057 16.854C14.8238 16.9933 14.5615 17.1326 14.2991 17.2441L14.3574 17.1605L13.8911 17.3555C13.7454 17.4113 13.5705 17.4391 13.4247 17.4949C13.3082 17.5506 13.2207 17.5784 13.1333 17.6063C13.0458 17.6342 12.9875 17.662 12.9584 17.6899C12.871 17.7456 12.8418 17.7735 12.8127 17.8292C12.4046 17.9406 12.0257 18.0242 11.8508 17.9964C11.9965 17.9406 12.1423 17.8571 12.288 17.8013L11.8508 17.8292C12.1423 17.8292 11.5011 17.9685 11.4136 17.9964C11.1804 17.9964 11.0056 18.0242 10.889 18.0242C10.7724 18.0242 10.6849 17.9964 10.6266 17.9964C10.5101 17.9685 10.4226 17.9685 10.1312 17.8849C9.83969 17.8849 9.48992 17.8571 9.2276 17.8013C8.96528 17.7456 8.7904 17.6899 8.73211 17.8013C7.65368 17.4391 6.66269 16.8819 5.87572 16.2689L5.43852 16.1017C5.26364 15.851 5.08876 15.6838 4.94303 15.4888C4.79729 15.2937 4.65156 15.1544 4.50582 14.9873C4.36009 14.8201 4.21436 14.6529 4.06862 14.4857C4.01033 14.3743 3.92289 14.2907 3.86459 14.1793C3.83545 14.1235 3.77715 14.0678 3.74801 14.0121C3.71886 13.9564 3.68972 13.8728 3.66057 13.817L3.77715 13.8728C3.63142 13.7056 3.45654 13.5384 3.31081 13.3434C3.28166 13.1205 3.22337 12.9255 3.16507 12.7583C3.10678 12.5911 3.04848 12.4239 2.99019 12.2846C2.9319 12.1174 2.8736 11.9503 2.8736 11.7552C2.8736 11.6438 2.84446 11.5602 2.84446 11.4488C2.84446 11.3373 2.8736 11.198 2.90275 11.0865C2.9319 10.9472 2.9319 10.8079 2.9319 10.6965C2.96105 10.585 2.96104 10.4736 2.96104 10.3621C2.96104 10.2507 2.96105 10.1671 2.9319 10.0556C2.9319 9.97206 2.9319 9.88847 2.90275 9.80488C2.84446 9.47054 2.69872 9.21978 2.55299 8.99688C2.55299 8.85757 2.58214 8.6904 2.61128 8.52322C2.66958 8.38391 2.75702 8.21674 2.84446 8.07743C2.90275 8.0217 2.9319 7.93812 2.99019 7.88239C3.04848 7.82667 3.10678 7.74308 3.13593 7.68736C3.25251 7.57591 3.33995 7.46446 3.39825 7.35301L3.3691 7.71522C3.48569 7.60377 3.60227 7.52018 3.74801 7.4366C4.09777 6.82363 4.2435 6.85149 4.739 6.07135C5.84658 5.37479 5.20535 4.95686 5.52596 4.34389C5.75914 4.28817 6.02146 4.2603 6.25463 4.20458C6.48781 4.17672 6.75013 4.14885 6.9833 4.14885L6.89586 4.06527C7.01245 3.84237 7.09989 3.73092 7.21648 3.64733C7.30392 3.56375 7.4205 3.50802 7.56624 3.4523C7.71197 3.39658 7.88685 3.39658 8.14917 3.34085C8.41149 3.28513 8.76126 3.25726 9.25675 3.17368L9.14017 2.86719C9.48993 3.0065 9.7231 2.95078 9.98542 2.86719C10.2477 2.78361 10.5392 2.70002 11.0056 2.72788C11.1221 2.72788 11.2679 2.78361 11.4719 2.83933C11.5593 2.86719 11.6759 2.89506 11.7634 2.95078C11.88 3.0065 11.9674 3.03437 12.084 3.09009C12.5503 3.25726 13.0167 3.42444 13.4247 3.39658C13.7454 3.61947 14.066 3.70306 14.3574 3.84237C14.5032 3.8981 14.6489 3.95382 14.7946 4.00954C14.9404 4.06527 15.057 4.12099 15.2027 4.17672C15.3484 4.23244 15.465 4.28817 15.6108 4.34389C15.7273 4.39961 15.8731 4.4832 15.9897 4.56679C16.1062 4.65037 16.252 4.73396 16.3686 4.81755C16.4852 4.929 16.6017 5.04045 16.7183 5.17976C16.7766 5.26334 16.8349 5.34693 16.8932 5.40265C16.9515 5.48624 17.0098 5.54197 17.0681 5.62555C17.1847 5.76486 17.2721 5.87631 17.3596 5.98776C17.5344 6.1828 17.6219 6.34997 17.5927 6.46142L17.5053 6.34997C17.5053 6.46142 17.5053 6.57287 17.5053 6.68432L17.6219 6.65645C17.8551 7.07439 18.1757 7.68736 18.234 8.10529C18.2923 8.18888 18.3214 8.27246 18.3797 8.35605L18.4963 8.60681C18.5546 8.77398 18.642 8.96902 18.7003 9.13619C18.6129 8.85757 18.5546 8.57895 18.4671 8.27246V8.30032C18.4088 8.16101 18.3214 7.93812 18.234 7.68736C18.2048 7.63163 18.1757 7.57591 18.1757 7.52018C18.1465 7.46446 18.1174 7.40873 18.0882 7.35301C18.0299 7.24156 18.0008 7.15797 17.9716 7.07439L18.1757 7.4366C18.0008 6.9908 18.2048 7.32515 18.2631 7.46446C18.5546 8.38391 18.5546 8.10529 18.7295 8.80184C18.7586 8.88543 18.7586 8.99688 18.7878 9.08047C18.7878 9.16405 18.7878 9.21978 18.7878 9.16405C18.8169 9.38695 18.8752 9.74916 18.9043 10.0835C18.9043 10.4179 18.9335 10.6965 18.9626 10.7243C18.9626 10.7522 18.9626 10.7801 18.9626 10.8079C18.9918 10.7243 19.0209 10.585 19.0501 10.3621C19.0792 10.2507 19.0792 10.1114 19.1084 9.99992C19.1375 9.7213 19.1375 9.58199 19.1667 9.41481Z" fill="#326867"/>
    </svg>
    </label>
	<label for="payment_method_<?php echo esc_attr( $gateway->id ); ?>">
		<?php echo $gateway->get_title(); /* phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped */ ?> <?php echo $gateway->get_icon(); /* phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped */ ?>
	</label>
    </div>
	<?php if ( $gateway->has_fields() || $gateway->get_description() ) : ?>
		<div class="payment_box payment_method_<?php echo esc_attr( $gateway->id ); ?>" <?php if ( ! $gateway->chosen ) : /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>style="display:none;"<?php endif; /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>>
			<?php $gateway->payment_fields(); ?>
		</div>
	<?php endif; ?>
</li>
