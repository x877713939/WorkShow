// $(function (){
//     //全部按钮ajax及样式改变
//     $('#work-class-all').click(function (){
//         $('#work-class-all').attr('class','button-056X1')
//         $('#work-class-algorithm').attr('class','button-057X1');
//         $('#work-class-game').attr('class','button-057X1');
//         $('#work-class-other').attr('class','button-057X1')
//     })
//     //算法按钮ajax及样式改变
//     $('#work-class-algorithm').click(function (){
//         $('#work-class-algorithm').attr('class','button-056X1');
//         $('#work-class-all').attr('class','button-057X1');
//         $('#work-class-game').attr('class','button-057X1');
//         $('#work-class-other').attr('class','button-057X1')
//         let data = $('#work-class-algorithm').text();
//         $.ajax('/searchclass',{
//             type:'get',
//             data:{'data':data}
//         }).done(function (data){
//             console.log(data);
//             $('#content').html(data);
//         })
//     })
//     //游戏按钮ajax及样式改变
//     $('#work-class-game').click(function (){
//         $('#work-class-game').attr('class','button-056X1');
//         $('#work-class-all').attr('class','button-057X1');
//         $('#work-class-algorithm').attr('class','button-057X1');
//         $('#work-class-other').attr('class','button-057X1')
//         let data = $('#work-class-game').text();
//         $.ajax('/searchclass',{
//             type:'get',
//             data:{'data':data}
//         }).done(function (data){
//             console.log(data);
//             $('#content').html(data);
//         })
//     })
//     $('#work-class-other').click(function (){
//         $('#work-class-other').attr('class','button-056X1');
//         $('#work-class-all').attr('class','button-057X1');
//         $('#work-class-algorithm').attr('class','button-057X1');
//         $('#work-class-game').attr('class','button-057X1')
//         let data = $('#work-class-other').text();
//         $.ajax('/searchclass',{
//             type:'get',
//             data:{'data':data}
//         }).done(function (data){
//             console.log(data);
//             $('#content').html(data);
//         })
//     })
// })