define([
    'underscore',
    'Magento_Ui/js/grid/columns/select'
], function (_, Column) {
    'use strict';
    return Column.extend({
        defaults: {
            bodyTmpl: 'Learning_StatusColor/ui/grid/cells/text'
        },

        getStatusColor: function (row) {
            if (row.shipping_information == "Custom - No Custom") {
                require(['jquery'],
                    function ($) {
                        setTimeout(function(){
                            $('td:contains("Custom - No Custom")').css("background", "red");
                            $('td:contains("Custom - No Custom")').siblings().css("background", "red");

                        });
                    },500);
            }
            return '#303030';
        }

    });
});
