	var market = "";
	var productType = "";
	var contentType = "";
	var contentTypeLS ="";
	var numberResult = 0;

$(document).ready(function() {	
										// handles market buttons
    				$("[name ='market_btn']").click(function(event) {
        				market = this.id;
						$("#market").hide();        				
        				$("#productTypes").show();
        				// Canada and NL have Bathroom Safety
        				if((market == 'CA') || (market == 'NL')) {
							$("#BS_productTypes").show();
						}else{
							$("#BS_productTypes").hide();
						};
    				});

    				// handles product buttons
    				$("[name ='productTypes_btn']").click(function(event) {
        				productType = this.id;
        				$("#productTypes").hide();
        				
        				// Corporate has no subcategory and goes to results page
						if(productType == 'C'){
							showResults();
						}else{
							$("#contentTypes").show();
						}
						
						// Bathroom safety has no Video and Presentation
						if(productType == 'BS'){
							$("#PcontentTypesContainer").hide();
							$("#VcontentTypesContainer").hide();
						}else{
							$("#PcontentTypesContainer").show();
							$("#VcontentTypesContainer").show();
						}
    				});

    				// handles content buttons
					$("[name ='contentTypes_btn']").click(function(event) {
						contentType = this.id;
						// lifting solutions has special cases for marketing and video
						if(productType == 'LS'&& contentType =='MS'){ 
								$("#LSsubContentMarketing").show();
						}else if(productType == 'LS'&& contentType =='V'){
								$("#LSsubContentVideo").show();
						}else{
							//display results
							showResults();
						}
						//hide content types
						$("#contentTypes").hide();
    				});

					// Handles LS buttons 
					$("[name ='contentTypesLS_btn']").click(function(event) {
						contentTypeLS = this.id;
						$("#LSsubContentMarketing").hide();
						$("#LSsubContentVideo").hide();
						showResults();//hide content types
    				});
    				
					// Reset all choices
					$("#logo").click(function(event) {
						reset();
					});


    				function reset(){
    					market = "";
						productType = "";
						contentType = "";
						contentTypeLS ="";
						numberResult = 0;
						
						$("#market").show();
						$("#productTypes").hide();
						$("#contentTypes").hide();
						$("#LSsubContentMarketing").hide();
						$("#LSsubContentVideo").hide();
						$("#resultContainer").hide();

						$("#resultContainer").children("div").hide();
    				}

    				function showResults(){
    					$("#market").hide();
						$("#productTypes").hide();
						$("#contentTypes").hide();
						$("#LSsubContentMarketing").hide();
						$("#LSsubContentVideo").hide();
    					$("#resultContainer").show();
    					
    					$("div[name*=resultBox]").each(function(index) {
  							var marketChoice = $(this).find("#span-ma").text();
  							var productChoice = $(this).find("#span-pt").text();
							var contentChoice = $(this).find("#span-ct").text();
							var contentChoiceLSMS = $(this).find("#span-CTLSMS").text();
							var contentChoiceLSSV = $(this).find("#span-CTLSV").text();
							var contentChoiceLS = (contentChoiceLSMS + contentChoiceLSSV );

							if ((marketChoice === market)
    						&& (productChoice === productType) 
    						&& (contentChoice === contentType)
    						&& (contentChoiceLS === contentTypeLS))
    						{ 
    								$(this).closest('div').show();
    								numberResult++;
    						};
						});

    				}

    				/* IPAD HACK TO HIDE SCROLL BAR */
    				if(navigator.userAgent.match(/Android/i)){
    				window.scrollTo(0,1);
 					}				

 					/* HANDLES THE OFFLINE BUTTON */
					$( "#offlineBtn" ).click(function() {
  						document.location.href = 'offline.php';
  						
					});

					/* HANDLES OFFLINE "SELECTION" */
					var resultBox = $("div[name*=resultBox]");
					
					resultBox.each(function() {
						var res = $(this);
  						var btn = res.find('button:first');
  						
  						btn.click(function() {
  							var id = $(this).attr('id');
  							var className = $(this).attr('class');
  							var btnText = $(this).find('h3:first');
  							
							$.ajax({
       							url: "checkOfflineFunction.php",
        						type: 'POST',
        						data: {
            						var_id: id
       								},
       							cache:false,
       							error:function(data){	

       							},
                		    	success: function(data)
                    			{
                    				if(data === "true"){
                    					btn.removeClass("saveOfflineOff");
  										btn.addClass("saveOfflineOn");
 										btnText.text("Available Offline");
 									}else{
 										btn.removeClass("saveOfflineOn");
       									btn.addClass("saveOfflineOff");
  										btnText.text("Make Available Offline");
 									}
                    			}
    						});
  							
  						});
					});

					
					$("#logoOffline").click(function() {						
  						document.location.href = 'index.php';
					});

					

});