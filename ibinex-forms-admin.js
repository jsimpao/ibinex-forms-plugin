"use strict";
var $=jQuery.noConflict();

var new_form_modal = (function() {
    return {
        display_create_options: function() {
            var unselected = '#new-form-modal .unselected';
            var selected   = '#new-form-modal .selected';

            $(unselected).click(function() {
                $(selected).removeClass('selected').addClass('unselected');
                $(this).removeClass('unselected').addClass('selected');
            });
        }
    };
}());

$(document).ready(function() {
    new_form_modal.display_create_options();
});
