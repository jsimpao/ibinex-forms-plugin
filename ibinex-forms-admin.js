"use strict";
var $=jQuery.noConflict();

var new_form_modal = (function() {
    var unselected = '#new-form-modal .unselected';
    var selected   = '#new-form-modal .selected';
    var change_template = '#new-form-modal .change-template-btn';

    return {
        display_new_form_options: function() {
            $(unselected).click(function() {
                $(selected).addClass('d-none');
                $(unselected).removeClass('d-none');

                $(this).addClass('d-none');
                $(this).next().removeClass('d-none');

                $(this).next().children('div:nth-child(1)').html(
                    $(this).children('div:nth-child(1)').html()
                );
                $(this).next().children('div:nth-child(2)').html(
                    '<div>' +
                        '<input type="text" class="selected-input-name" placeholder="Form Name" title="Please fill out this field." />' +
                    '</div>' +
                    '<div>' +
                        '<button type="button" class="selected-btn create-form-btn btn btn-sm text-left">' +
                            '<span class="dashicons dashicons-welcome-add-page"></span>Create Form' +
                        '</button>' +
                    '</div>' +
                    '<div>' +
                        '<button type="button" class="selected-btn change-template-btn btn btn-sm text-left">' +
                            '<span class="dashicons dashicons-admin-page"></span>Change Template' +
                        '</button>' +
                    '</div>'
                );
            });
        },

        change_template: function() {
            $(selected).on('click', '.change-template-btn', function() {
                $(selected).addClass('d-none');
                $(unselected).removeClass('d-none');
            });
        }
    };
}());

$(document).ready(function() {
    new_form_modal.display_new_form_options();
    new_form_modal.change_template();
});
