
$(document).ready(function(){
    /// Main search input
    $('.search-bar__form input[type="search"]').bind('focusin focusout', function(e){
        $(this).closest('.search-box').toggleClass('focus', e.type == 'focusin');
    });
     

    /// Live search
    var preLoadLoadGif = $('<img src="//cdn.shopify.com/s/files/1/0437/0454/9536/t/26/assets/loading.gif?v=9255329245202621775" />');
    var searchTimeoutThrottle = 500;
    var searchTimeoutID = -1;
    var currReqObj = null;                           
   var $infoblock = $('<div class="info-box" />').appendTo('.search-box');
    var $resultsBox = $('<ul class="results-box" />').appendTo('.search-box');
    
  
    $('.search-bar__form input[type="search"]').bind('keyup change', function(){
        //Only search if search string longer than 2, and it has changed
	if($(this).val().length > 2 && $(this).val() != $(this).data('oldval')) {
            //Reset previous value
            $(this).data('oldval', $(this).val());
            
            // Kill outstanding ajax request
            if(currReqObj != null) currReqObj.abort();
            
            // Kill previous search
            clearTimeout(searchTimeoutID);
          
          	var $form = $(this).closest('form');
          
          	//Search term
          	var term = '*' + $form.find('input[name="q"]').val() + '*';
      var keyVal = $form.find('input[name="q"]').val();
            
            //URL for full search page
            var linkURL = $form.attr('action') + '?type=product&q=' + term;
            
            //Show loading
            $resultsBox.html('<div class="load"></div>');
            
            // Do next search (in X milliseconds)
            searchTimeoutID = setTimeout(function(){
                //Ajax hit on search page
                currReqObj = $.ajax({
                  url: $form.attr('action'),
                  data: {
                    type: 'product',
                    view: 'json',
                    q: term,
                  },
                  dataType: "json",
                  success: function(data){
                        currReqObj = null;
                        if(data.results_total == 0) {
                            //No results
                            $resultsBox.html('<div class="note">'+ "Your search did not yield any results" +'</div>');
            
                        } else {
                            //Numerous results
                        //  console.log(term);
                            $resultsBox.empty();
                             $infoblock.empty();
                              $.each(data.results, function(index, item){
                                var xshow = 'wholesale'; //term for products we dont want to show
                                if(!(item.title.toLowerCase().indexOf(xshow) > -1)) {
                                  var $row = $('<a class="product-item"></a>').attr('href', item.url);
                                  
                                  $row.append('<div class="img"><img src="' + item.thumb + '" /></div>');
                                  $row.append('<div class="d-title">'+item.title+'</div>');
                                 // $row.append('<div class="d-price">'+item.price +'</div>');
                                  $row.wrap('<div></div>')
                                  $resultsBox.append($row);
                                }
                              });
                         $('.product-item').wrap('<li class=""></li>'); 						 
						 $infoblock.append('<p class="keyval">Your search for <strong>'+ keyVal + '</strong> revealed the following:</p>');
                          $infoblock.append('<div class="res-btn"><a href="' + linkURL + '"class="">See all products </a></div>');
                         
                          $( '<div class="border-div"></div>' ).insertAfter( ".res-btn" );

                          
                        }
                  }
                });
            }, searchTimeoutThrottle);
        } else if ($(this).val().length <= 2) {
            //Deleted text? Clear results
            $resultsBox.empty();
            $infoblock.empty();
        }
    }).attr('autocomplete', 'off').data('oldval', '').bind('focusin', function(){
        //Focus, show results
        $resultsBox.fadeIn(200);
		$infoblock.fadeIn(200);
                    
    }).bind('click', function(e){
        //Click, prevent body from receiving click event
        e.stopPropagation();
    });
    $('body').bind('click', function(){
        //Click anywhere on page, hide results
        $resultsBox.fadeOut(200);
         $infoblock.fadeOut(200); 
    });
  
    //Search box should mimic live search string: products only, partial match
    $('.search-form').on('submit', function(e){
      e.preventDefault();
      var term = '*' + $(this).find('input[name="q"]').val() + '*';
      var linkURL = $(this).attr('action') + '?type=product&q=' + term;
      window.location = linkURL;
    });

    // search ends
});