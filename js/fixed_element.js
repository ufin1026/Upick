//UMA上下移動效果
setInterval(() => {
    $('.umaCircleBG-CL').css('backgroundPosition', '25px 28px').css('transition', '1s');

}, 300);

setInterval(() => {
    $('.umaCircleBG-CL').css('backgroundPosition', '25px 20px').css('transition', '1s');
}, 600);

//UMA hover時門開啟不關,對話區上滑
$('.umaCircle-CL').mouseover(function () {
    $('.umaCircle-CL div:nth-child(2)').removeClass('umaDoorAnima-CL');
    $('.umaConvert-CL').css('top', '48%').css('transition', '1s');
})
//UMA hover時門關閉,對話區下滑
$('.umaCircle-CL').mouseout(function () {
    $('.umaCircle-CL div:nth-child(2)').addClass('umaDoorAnima-CL');
})
//mouse離開umaHelper,但進入對話框時,對話框維持上滑,
$('.umaHelper-CL').mouseout(function () {
    $('.umaConvert-CL').css('top', '82%').css('transition', '1s');

    $('.umaConvert-CL').mouseover(function () {
        $(this).css('top', '48%');
        //門開啟不關
        $('.umaCircle-CL div:nth-child(2)').removeClass('umaDoorAnima-CL');
    })
    //mouse完全離開對話框時,對話框下滑,門關閉
    $('.umaConvert-CL').mouseout(function () {
        $('.umaConvert-CL').css('top', '82%');
        $('.umaCircle-CL div:nth-child(2)').addClass('umaDoorAnima-CL');
        //mouse離開對話框,但進入小框時,對話框維持上滑
        $('.umaConvert-CL div').mouseover(function () {
            $('.umaConvert-CL').css('top', '48%');
        })
    })
})
//對話區小框mouseover效果
$('.umaQ-CL').mouseover(function () {
    $(this).css('boxShadow', '1px 1px 1px rgb(51, 51, 51)').siblings().css('boxShadow', '1px 1px 6px rgb(51, 51, 51)');
    //點選對話小框則回答出現,關閉鈕也出現

    $(this).css('height', '75%');
    $(this).children('.umaAnser-CL').css('display', 'block');

    //取得該小框與父層的高度
    let umaUpTo = $(this).position().top;

    //滑進小框時全區上移高度為positioin與父層的距離,以確保展開的窗口會完整顯示
    $('.umaQLl-CL').css('transform', 'translateY(-' + umaUpTo + 'px)').css('transition', '1s');


    $(this).mouseout(function () {
        $(this).css('height', '26%');
        $(this).children('.umaAnser-CL').css('display', 'none');
        //滑出小框時全區移回原本position位置也就是0px以確保位置回復原地
        $('.umaQLl-CL').css('transform', 'translateY(0px)').css('transition', '1s');

        //mouseout時陰影恢復為6px
        $('.umaQ-CL').css('boxShadow', '1px 1px 6px rgb(51, 51, 51)');
    })

})













