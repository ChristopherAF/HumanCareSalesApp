$(document).ready(function() {  
          

          $("#backSelectionBtn").click(function() {
              document.location.href = 'index.php';
          });


          var container = $("#resultContainer");

          $("#removeAllBtn").click(function() {
              var imgIDbatch = "";
              var imgID = $(container).find("img");
              var numberImg = $(imgID).length;
  
                if(numberImg !== 0){
                  imgID.each(function(index,element) {
                  imgIDbatch += "'"+($(this).attr('id'))+"'";

                  if(index !== (numberImg - 1)){
                      imgIDbatch += ",";  
                  }
                  });


                  //Send IDs to delete function 

                  $.ajax({
                      url: "removeAllOfflineFunction.php",
                      type: 'POST',
                      data: {
                          var_imgID:imgIDbatch,
                        },
                      cache:false,
                      error:function(data){
                        top.location.href="offline.php?deleted=0";//redirection     
                      },
                      success: function(data)
                      {
                         top.location.href="offline.php?deleted=1";//redirection
                      }
                  });         
              } //end check if pictures != 0 */
          });
});