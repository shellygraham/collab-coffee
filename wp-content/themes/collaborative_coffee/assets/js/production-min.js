jQuery(document).ready(function(o){function n(n){n="string"==typeof n?n:o(this).attr("href");var e=120;if(0==n.indexOf("#")){var d=o(n);if(d.length&&(o("html, body").animate({scrollTop:d.offset().top-e}),history&&"pushState"in history))return history.pushState({},document.title,window.location.pathname+n),!1}}o(window).scroll(function(){if(o(window).width()>940){var n=o(window).scrollTop();n>=1?o(".site-header").addClass("shrunk"):o(".site-header").removeClass("shrunk")}}),o(window).width()<940&&o(".site-header").removeClass("always-shrunk"),o(window).width()>767&&(o(".node.farm-124, .farm-124.node-popout").hover(function(){o(".farm-124.node-popout, .node.farm-124").addClass("show-node")},function(){o(".farm-124.node-popout, .node.farm-124").removeClass("show-node")}),o(".node.farm-82, .farm-82.node-popout").hover(function(){o(".farm-82.node-popout, .node.farm-82").addClass("show-node")},function(){o(".farm-82.node-popout, .node.farm-82").removeClass("show-node")}),o(".node.farm-128, .farm-128.node-popout").hover(function(){o(".farm-128.node-popout, .node.farm-128").addClass("show-node")},function(){o(".farm-128.node-popout, .node.farm-128").removeClass("show-node")}),o(".node.farm-133, .farm-133.node-popout").hover(function(){o(".farm-133.node-popout, .node.farm-133").addClass("show-node")},function(){o(".farm-133.node-popout, .node.farm-133").removeClass("show-node")}),o(".node.farm-139, .farm-139.node-popout").hover(function(){o(".farm-139.node-popout, .node.farm-139").addClass("show-node")},function(){o(".farm-139.node-popout, .node.farm-139").removeClass("show-node")}),o(".node.farm-144, .farm-144.node-popout").hover(function(){o(".farm-144.node-popout, .node.farm-144").addClass("show-node")},function(){o(".farm-144.node-popout, .node.farm-144").removeClass("show-node")})),n(window.location.hash),o("body").on("click","a",n)});