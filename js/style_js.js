//加入追蹤清單
$('.wBtnAddTrace').click(function () {
    $(this).html('<i class="fas fa-heart"></i> 已加入追蹤清單');
    $(this).css('color', '#FF8888');

})

//網頁版頁碼focus顏色
$('.wWhitePGnumber').click(function () {
    $(this).css('backgroundColor', '#7FE0DC').siblings().css('backgroundColor', '#FFFFFF');
    newPg1 = $(this).text();
    $('.wWhiteNewPG').text(newPg1);
})
//網頁版頁碼下拉選單切換
$('.wWhiteSlePG').click(function () {
    $('.wWhiteJPPGarea').toggle();
})
//網頁版下拉頁碼讀取
$('.wWhiteJPPG').click(function () {
    let newPg2 = $(this).text();
    let newPg3 = parseInt(newPg2) - 1;
    $('.wWhiteNewPG').text(newPg2).css('textAlign', 'center');
    $('.wWhiteJPPGarea').css('display', 'none');
    $('.wWhitePGnumber').eq(newPg3).css('backgroundColor', '#7FE0DC').siblings().css('backgroundColor', '#FFFFFF');
})

//關閉彈跳視窗
$('.wWinDarkClo').click(function () {
    $(this).parent().css('display', 'none');
})


