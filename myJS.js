jQuery(document).ready(function($){
    $('.black').on({
        'click':function(){
            $('#change-image').attr('src','Nebula.JPG');
            $("img").width(600);
            
        }
    });

    $('.red').on({
        'click':function(){
            $('#change-image').attr('src','LightInTheDarkness.jpg');
            $("img").width(600);
        }
    });

    $('.purple').on({
        'click':function(){
            $('#change-image').attr('src','HeartNebula.jpeg');
            $("img").width(600);
        }
    });

    $('.pink').on({
        'click':function(){
            $('#change-image').attr('src','Orion.jpg');
            $("img").width(600);
        }
    });
});