
function addRoute()
{
    $.ajax({
        type: "POST",
        url: "/booking/route",
        data : $('#route').serialize(),
        success: function(resultData){
            alert(resultData);
        }
  });
}
