/**
 * @file
 * Default JavaScript file for Modal Page.
 */

$(document).ready(function () {

  'use strict';

  var modalPage = $('#js-modal-page-show-modal');

  if (modalPage.length) {
    modalPage.modal();
  }
});
