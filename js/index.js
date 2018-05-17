$(document).ready(function(){
    // 初始化内容
    var $width = $(window).width();//获取浏览器的宽度
    var $height = $(window).height();//获取浏览器的宽度

    var $topHeight = $(".top").height();
    var $footHeight = $(".foot").height();

    $(".main").height($height - $topHeight - $footHeight-20);
});