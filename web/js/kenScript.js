/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function cajasTexto() {
    $('input[type=text]').each(function() {
        $(this).addClass('form-control');
        $(this).addClass('input-medium');
    });
     $('select').each(function() {
        $(this).addClass('form-control');
        $(this).addClass('input-medium');
    });
}
$(document).ready(function() {
    $(".datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    cajasTexto();
})