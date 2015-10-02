/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
/*jshint browser:true jquery:true*/
/*global alert*/
define(
    [
        'jquery',
        'uiComponent',
        'Magento_Checkout/js/model/quote',
        'Magento_Checkout/js/model/shipping-service',
        'Magento_Checkout/js/model/step-navigator'
    ],
    function($, Component, quote, shippingService, stepNavigator) {
        'use strict';
        return Component.extend({
            defaults: {
                template: 'Magento_Checkout/shipping-information'
            },

            isVisible: function() {
                return !quote.isVirtual() && stepNavigator.isProcessed('shipping');
            },

            getShippingMethodTitle: function() {
                return shippingService.getTitleByCode(quote.shippingMethod())
            },

            back: function() {
                // Temp solution for closing summary sliding panel on mobile MAGETWO-3864
                $('#opc-sidebar').modal('toggleModal');
                stepNavigator.back();
            }
        });
    }
);
