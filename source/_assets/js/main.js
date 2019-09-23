window.docsearch = require('docsearch.js');

import hljs from 'highlight.js/lib/highlight';
require('jquery/dist/jquery.min');
require('bootstrap/dist/js/bootstrap.bundle.min');
require('owl.carousel/dist/owl.carousel');
require('../js/jquery.slicknav.min');
require('../js/jquery.magnific-popup.min');
require('../js/jquery.sticky-sidebar.min');
require('../js/jquery.sticky-sidebar.min');
require('../js/custom');

hljs.registerLanguage('bash', require('highlight.js/lib/languages/bash'));
hljs.registerLanguage('css', require('highlight.js/lib/languages/css'));
hljs.registerLanguage('html', require('highlight.js/lib/languages/xml'));
hljs.registerLanguage('javascript', require('highlight.js/lib/languages/javascript'));
hljs.registerLanguage('json', require('highlight.js/lib/languages/json'));
hljs.registerLanguage('markdown', require('highlight.js/lib/languages/markdown'));
hljs.registerLanguage('php', require('highlight.js/lib/languages/php'));
hljs.registerLanguage('scss', require('highlight.js/lib/languages/scss'));
hljs.registerLanguage('yaml', require('highlight.js/lib/languages/yaml'));

document.querySelectorAll('pre code').forEach((block) => {
    hljs.highlightBlock(block);
});