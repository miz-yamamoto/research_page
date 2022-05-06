$(function() {
    $.fn.autoKana('input[name="first_name"] ', 'input[name="first_name-f"]', {katakana:true});
    $.fn.autoKana('input[name="last_name"] ', 'input[name="last_name-f"]', {katakana:true});
});

// $(function(){
//     $("input,textarea").each(function(){
//         let parent = $(this).parent();
//         $(this).on("focus",function(){
//             $(parent).css({
//                 "transform": "scale(1,1)"
//             })
//         })
//     })
// })
