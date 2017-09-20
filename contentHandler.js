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
					$(".topDiv").click(function(event) {
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
    					
    					
    					$("#titleResult").text("Search result for "
    						+market 
    						+" "+productType
    						+" "+contentType
    						+" "+contentTypeLS);
	

    					$("div[name*=resultBox]").each(function(index) {
  							var str = $(this).children('span').text();
			
    						if ((str.indexOf(market) >= 0)
    						&& (str.indexOf(productType) >= 0)
    						&& (str.indexOf(contentType) >= 0)
    						&& (str.indexOf(contentTypeLS) >= 0)
    							)

    						{ 
    								$(this).closest('div').show();
    								numberResult++;
    						};
	
						});

						var numberResultTitle = $("#titleResultNumber");
    						if(numberResult == 0){
    							numberResultTitle.empty().append("0 document found.");
    						}else{
								numberResultTitle.empty().append(numberResult+" document(s) found.");
    						}
    					
    				}
});
