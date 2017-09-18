	var market = "";
	var productType = "";
	var contentType = "";
	var contentTypeLS ="";

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
						
						$("#market").show();
						$("#productTypes").hide();
						$("#contentTypes").hide();
						$("#LSsubContentMarketing").hide();
						$("#LSsubContentVideo").hide();
						$("#resultContainer").hide();
    				}

    				function showResults(){
    					$("#resultContainer").show();
    					$("#titleResult").text("Content found for "
    						+market 
    						+" "+productType
    						+" "+contentType
    						+" "+contentTypeLS);
    					console.log("Market:"+market+" ,productType:"+productType+" ,contentType:"+contentType+" ,contentTypeLS:"+contentTypeLS);
    				}
});