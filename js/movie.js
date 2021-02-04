//current
$(document).ready(function(){
    $.ajax({
        url: "/js/movie.json",
        dataType: "json",
        success: function(data){
            var movieData = data.movie;
            
            var currentMovieData = movieData.filter(function (movie) {
                return movie.isOpen == 'TRUE';
            });
            
            //currentPrint 선언
            function currentPrint(currentMovieData){
                if(currentMovieData.length > 0){
                    var ul = $('<ul />');
                    for(var movieIndex=0; movieIndex<currentMovieData.length; movieIndex++){
                        var li = $('<li />');
                        var img = $('<a class="imgBox" />');
                        var h3 = $('<h3 />');
                        var $img = currentMovieData[movieIndex].img;
                        var $age = currentMovieData[movieIndex].age;
                        var $name = currentMovieData[movieIndex].name;
                        var $rate = currentMovieData[movieIndex].rate;
                        var $grade = currentMovieData[movieIndex].grade;
                        
                        li.append(
                            $(img).append($('<img />').attr({
                                src: $img,
                                alt: '현재상영작 영화 포스터 이미지'
                            })),
                            $(h3).text($age + '세'),
                            $('<h4 />').text($name),
                            $('<p class="rate" />').text('예매율 ' + $rate),
                            $('<p class="grade" />').text('평점 ' + $grade + '점')
                        );
                        
                        if($age == 12){
                            $(h3).css('background-color', 'yellow');
                        }else if($age == 15){
                            $(h3).css('background-color', 'green');
                        }else{
                            $(h3).css('background-color', 'red');
                        }
                        
                        $(ul).append(li);
                    
                    }
        
                    $('#currentMovie').append(ul);
                }
            }
            
            //현재상영작 출력
            currentPrint(currentMovieData);
            
           
        },
        error: function(error){
            $('#currentMovie').append('데이터를 가져오지 못했습니다. 고객센터에 문의하세요.');
        }
    });
});

//future
$(document).ready(function(){
    $.ajax({
        url: "/js/movie.json",
        dataType: "json",
        success: function(data){
            var movieData = data.movie;
            
            var futureMovieData = movieData.filter(function (movie) {
                return movie.isOpen == 'FALSE';
            });
            
            //futurePrint 선언
            function futurePrint(futureMovieData){
                if(futureMovieData.length > 0){
                    var ul = $('<ul />');
                    for(var movieIndex=0; movieIndex<futureMovieData.length; movieIndex++){
                        var li = $('<li />');
                        var img = $('<a class="imgBox" />');
                        var h3 = $('<h3 />');
                        var $img = futureMovieData[movieIndex].img;
                        var $age = futureMovieData[movieIndex].age;
                        var $name = futureMovieData[movieIndex].name;
                        var $rate = futureMovieData[movieIndex].rate;
                        var $grade = futureMovieData[movieIndex].grade;
                        
                        li.append(
                            $(img).append($('<img />').attr({
                                src: $img,
                                alt: '상영예정작 영화 포스터 이미지'
                            })),
                            $(h3).text($age + '세'),
                            $('<h4 />').text($name),
                            $('<p class="rate" />').text('예매율 ' + $rate),
                            $('<p class="grade" />').text('평점 ' + $grade + '점')
                        );
                        
                        if($age == 12){
                            $(h3).css('background-color', 'yellow');
                        }else if($age == 15){
                            $(h3).css('background-color', 'green');
                        }else{
                            $(h3).css('background-color', 'red');
                        }
                        
                        $(ul).append(li);
                    
                    }
        
                    $('#futureMovie').append(ul);
                }
            }
            
            //상영예정작 출력
            futurePrint(futureMovieData);
        },
        error: function(error){
            $('#futureMovie').append('데이터를 가져오지 못했습니다. 고객센터에 문의하세요.');
        }
    });
});

//exhibit
$(document).ready(function(){
    $.ajax({
        url: "/js/exhibit.json",
        dataType: "json",
        success: function(data){
            var exhibitMovieData = data.exhibit;
    
            //exhibitPrint 선언
            function exhibitPrint(exhibitMovieData){
                if(exhibitMovieData.length > 0){
                    var ul = $('<ul />');
                    for(var movieIndex=0; movieIndex<exhibitMovieData.length; movieIndex++){
                        var li = $('<li />');
                        var $img = exhibitMovieData[movieIndex].img;
                        var $title = exhibitMovieData[movieIndex].title;
                            
                        li.append(
                            $('<img />').attr({
                                src: $img,
                                alt: '기획전 포스터 이미지'
                            }),
                            $('<h3 />').text($title)
                        );
                        
                        $(ul).append(li);
                    }
        
                    $('#exhibitMovie').append(ul);
                }
            }
            
            //기획전 출력
            exhibitPrint(exhibitMovieData);
        },
        error: function(error){
            $('#exhibitMovie').append('데이터를 가져오지 못했습니다. 고객센터에 문의하세요.');
        }
    });
});














