const lodash = require('lodash')
const popper = require('popper.js').default
const $ = require('jquery')
require('bootstrap')
require('datatables.net-bs4')
require('datatables.net-buttons-bs4')

window._ = lodash;

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = popper;
    // window.$ = window.jQuery = jquery;
    window.$ = window.jQuery = $;


} catch (e) {
    console.log('error', e)
}

$('#dropdown-profile').click(function (e) {
    $('#dropdown-profile').dropdown('toggle')
})

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
