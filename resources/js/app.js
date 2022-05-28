import $ from 'jquery';
window.$ = window.jQuery = $;

require('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js');
import 'jquery-ui/ui/widgets/datepicker.js';

window.toastr = require('toastr');
import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()
