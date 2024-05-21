import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import $ from 'jquery';
window.$ = window.jQuery = $;
//Import seletec2
import select2 from 'admin-lte/plugins/select2/js/select2.full.min.js'
select2()

//Import sweetalert2
import Swal from 'sweetalert2'
window.Swal = Swal;
