jQuery("#legalYes").on("click", function() {
    window.location = window.location.href + "home";
});

jQuery("#legalNo").on("click", function() {
     jQuery(".msgSection").hide();
    setTimeout(function(){
        jQuery(".legalNoMsg").addClass("animated shake");
        jQuery(".legalNoMsg").show();
    }, 300);
});

