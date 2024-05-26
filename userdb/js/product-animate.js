$(document).ready(function(){
   
    $("#adtinfo").hide();
    $("#returnpolicy").hide();
    $("#reviwcont").hide();
    
    $("#disc").click(function(){
        $("#discription_overall").show();
        $("#adtinfo").hide();
        $("#returnpolicy").hide();
        $("#reviwcont").hide();
    });
    
    $("#adt-inf").click(function(){
        $("#adtinfo").show();
        $("#discription_overall").hide();
        $("#returnpolicy").hide();
        $("#reviwcont").hide();
    });

    $("#return-policy").click(function(){
        $("#returnpolicy").show();
        $("#discription_overall").hide();
        $("#adtinfo").hide();
        $("#reviwcont").hide();
    });

    $("#reviw-cont").click(function(){
        $("#reviwcont").show();
        $("#discription_overall").hide();
        $("#adtinfo").hide();
        $("#returnpolicy").hide();
    });
});

