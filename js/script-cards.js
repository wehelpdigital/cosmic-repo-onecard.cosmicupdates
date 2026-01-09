var card_container_width = $('#pack_cont').width();
var total_cards = $('.card').length; //any number of cards will work
var card_spacing = 0;

//shuffle plugin
(function($){
 
    $.fn.shuffle = function() {
 
        var allElems = this.get(),
            getRandom = function(max) {
                return Math.floor(Math.random() * max);
            },
            shuffled = $.map(allElems, function(){
                var random = getRandom(allElems.length),
                    randEl = $(allElems[random]).clone(true)[0];
                allElems.splice(random, 1);
                return randEl;
           });
 
        this.each(function(i){
            $(this).replaceWith($(shuffled[i]));
        });
 
        return $(shuffled);
 
    };
 
})(jQuery);
//shuffle plugin

//stacks all card with a relative margin, to give a 3d effect
function stack_cards(margin){
	var left = 0;
	var step = margin;
	var i = 0;
	$('.card').each(function(){
		$(this).css({'z-index' : i});					
		$(this).css({'margin-left':left+'px'});
		$(this).css({'margin-top':0+'px'});
		left = left + step;
		i++;

	});

	$('.card').removeClass('blip');
	$('.card').removeClass('flip');
	
}

//rotate all cards to a specific degree
//rotates all card from 0 to deg range
function animate_card(deg){
	var start = 0;
	var end = deg;
	var step = deg/total_cards;
	var angle = 0;
	$('.card').each(function(){
		$(this).css({
					'transform' : 'rotate('+ angle +'deg)',
					'-webkit-transform' : 'rotate('+ angle +'deg)',
					'-moz-transform' : 'rotate('+ angle +'deg)',
					'-ms-transform' : 'rotate('+ angle +'deg)',
		});
		angle += step;
	});
}

//seprates all cards instantly, row wise
function separate_instantly(){
	var left = 0;
	var top = 0;
	var card_width = $('.cards').width();
	var card_height = $('.cards').height();
	var left_step =  card_width + card_spacing;

	$('.card').each(function(){

		$('.card').addClass('flip');

		$(this).css({
			'margin-top':top+'px',
			'margin-left':left+'px',
		});
		left = left + left_step;
		if(left+card_width + card_spacing > card_container_width)
		{
			left = 0;
			top += card_height + card_spacing;
		}
	});

	flip();

}

//slowly separate all cards in a line
function separate_one_by_one(){
var left = 0;
var card_width = $('.card').width();
var card_height = $('.card').height();
//initial top margin for card placement
var top = card_height;
//initial left margin for card placement
var left_step =  card_width + card_spacing;
	
	//time lag between each card placement
	var sec_step = 100;
	var time = 0;

	//loop through all cards
	$('.card').each(function(){
		var card = $(this);
		setTimeout(function(){
			card.css({
				'margin-top':top+'px',
				'margin-left':left+'px',
			});

			left = left + left_step;
			//if card cannot fit in current row then place it card in next row
			if(left+card_width + card_spacing > card_container_width)
			{
				left = 0;
				top += card_height + card_spacing;
			}
		},time);
		//add time lag for next card placement
		time += sec_step;
	});
}

//show all card
function open_all_cards(){
	$('.card').addClass('open');
	setTimeout(function(){
		$('.card').addClass('opened');
	},300);
}

//hide all card faces
function close_all_cards(){
	$('.card').removeClass('open');
	setTimeout(function(){
		$('.card').removeClass('opened');
	},300);	
}


function shuffle(o){ //v1.0
    for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    return o;
};


function spread_cards() { 

var i = 0;
var time = 0;
var shuffle_time = 5;
var counter = 0;
var diff = 0;
var percents = 0;
stack_cards(0);
	$($('.card').get().reverse()).not(':first').each(function(){
		var card = $(this);
		$('.card').addClass('blip');
		setTimeout(function(){
			diff +=35;
			card.animate({ 'margin-left' : '3.75%' });
			i++;
		},time);
		time += 2;
		counter++; 
	});

	// blip();

}



function shufle_cards() {

//shuffle all cards in DOM
 
//create shuffle effect(just to show it to user)
var i = 0;
var time = 0;
var shuffle_time = 15;
var counter = 0;

$($('.card').get().reverse()).each(function(){
	var card = $(this);
	setTimeout(function(){
		
		card.animate({ 'margin-left' : '30px', 'margin-top': '-15x' },1);
		setTimeout(function(){
			card.animate({ 'z-index' : i });
			card.animate({ 'margin-left' : '0px', 'margin-top': '0px' },20);
		},100);
		i--;
	},time);
	time += 100;
	counter++;
	stack_cards(0);
});

stack_cards(0);

}

function blip() { 

	$('.blip').one('click', function(){
		var card = $(this);
		var top = $(this).css("margin-top");

		var settop = parseInt(parseInt(top)-parseInt(30));
	
		setTimeout(function(){
			card.animate({ 'margin-top' : settop },1);
		},50);
		
	});

}

function flip() { 

	$('.flip').click(function(){
	
				var card = $(this);
				card.toggleClass('open');
				setTimeout(function(){
					card.toggleClass('opened');
				},300);
		
	});

}


$(document).ready(function(){
	stack_cards(0);
	//  alert("test");
});

