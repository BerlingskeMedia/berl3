$(document).ready(function(){var a=0,t=3;$(".tabs").on("click","a",function(t){t.preventDefault();var e=$(this).data("link"),n=$(".tabs").find(".current"),r=$(".tab-container").find(".showMe");$(r).removeClass("showMe"),$("#tabContent"+e).addClass("showMe"),$(n).removeClass("current"),$(this).addClass("current"),$(".tab").find("ul").removeClass(),$(".tab").find("ul").addClass("counter-0"),a=0});var e=function(t){var e=$(t).closest(".tab").find("ul");$(e).removeClass(),$(e).addClass("counter-"+a),console.log(a)};$(".arrow-prev").click(function(t){t.preventDefault();var n=$(this);a>0&&(a--,e(n))}),$(".arrow-next").click(function(n){n.preventDefault();var r=$(this);t>a&&(a++,e(r))})});
//# sourceMappingURL=nidk.js.map
