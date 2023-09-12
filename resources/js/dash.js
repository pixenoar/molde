import './bootstrap';

import * as bootstrap from 'bootstrap'

window.onload = function(){

    // APERTURA Y CIERRE DE MODALES CON EVENTOS

    Livewire.on('open', modal => {
        var modaln = new bootstrap.Modal('#' + modal);
        modaln.show();
    });

    Livewire.on('close', modal => {
        var modaln = bootstrap.Modal.getInstance('#' + modal);
        modaln.hide();
    });

}