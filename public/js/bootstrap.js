window._ = require('lodash');

try {
    window.Popper = require('@popperjs/core');
    window.axios = require('axios');
    window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
} catch (e) {
    console.error(e);
}
