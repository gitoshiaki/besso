var $ = require("jquery");
import scrollAnimation from "./scrollAnimation";

window.jQuery = window.$ = $;

// $('#hero_svg').attr('width', $(window).width() );
// $('#hero_svg').attr('height', $(window).height() );

scrollAnimation("about", 1);
