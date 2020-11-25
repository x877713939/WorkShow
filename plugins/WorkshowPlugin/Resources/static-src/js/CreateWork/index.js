$(function (){
    $('#publish').click(function (){
        let title = $('#title').val();
        let article = $('#article').val();
        let type = $('#dropdownText').text();
        $.ajax('/addwork',{
            type:'POST',
            data:{
                'title':title,
                'article':article,
                'type':type,
                'status':'published',
            },
            beforeSend(request) {
                request.setRequestHeader('X-CSRF-Token', $('meta[name=csrf-token]').attr('content'));
            }
        }).done(function (data){
            console.log(data)
        })
    });

    $('#draft').click(function (){
        let title = $('#title').val();
        let article = $('#article').val();
        let type = $('#dropdownText').text();
        $.ajax('/addwork',{
            type:'POST',
            data:{
                'title':title,
                'article':article,
                'type':type,
                'status':'draft',
            },
            beforeSend(request) {
                request.setRequestHeader('X-CSRF-Token', $('meta[name=csrf-token]').attr('content'));
            }
        }).done(function (data){
            console.log(data)
        })
    })
})