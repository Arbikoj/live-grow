import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

var Turbolinks = require("turbolinks")
Turbolinks.start()

$(document).ready(function() {
    $('#table_id').DataTable();
});