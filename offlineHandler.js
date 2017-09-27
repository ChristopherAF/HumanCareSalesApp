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

                  /*Send IDs to delete function */
                  //"269,271"
                  $.ajax({
                      url: "removeAllOfflineFunction.php",
                      type: 'POST',
                      data: {
                          var_imgID:imgIDbatch,
                        },
                      cache:false,
                      error:function(data){
                         //alert("failed to sync with database. Please verify your intenret connection.");
                      },
                      success: function(data)
                      {
                         //alert("Sync succeeded" + data);
                      }
                  });

              } //end check if pictures != 0 
          });
});