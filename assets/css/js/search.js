jQuery(document).ready(function($){

const input = $("#search-input");
const results = $("#search-results");

input.on("keyup", function(){

let term = $(this).val();

if(term.length < 2){

results.hide();
return;

}

$.ajax({

url: gym_ajax.ajax_url,
type: "POST",

data:{
action:"gym_search",
term:term
},

success:function(data){

results.html(data);
results.show();

}

});

});


/* Close results when clicking outside */

$(document).click(function(e){

if(!$(e.target).closest("#gym-search").length){

results.hide();

}

});

});