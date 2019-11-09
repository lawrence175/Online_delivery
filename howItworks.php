<HTML>
<HEAD>
<TITLE>ShakaZulu Foods</TITLE>
<style type="text/css">
	*{font-family: 'Roboto', sans-serif;}
   a:link {color: #ffffff}
   a:visited {color: #ffffff}
   a:hover {color: #ffffff}
   a:active {color: #ffffff}
#grad {
background: linear-gradient(to right, aqua , white);
}
	#panel, #flip {
    padding: 2px;
    text-align: left;
}
#panel1,#panel2,#panel3,#panel4,#panel5,#panel6,#voucher{
    display:none;
 }
.ptr {
    text-decoration: none;
    cursor: pointer;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#flip1").click(function(){
        $("#panel1").slideToggle("slow");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip2").click(function(){
        $("#panel2").slideToggle("slow");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip3").click(function(){
        $("#panel3").slideToggle("slow");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip4").click(function(){
        $("#panel4").slideToggle("slow");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip5").click(function(){
        $("#panel5").slideToggle("slow");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip6").click(function(){
        $("#panel6").slideToggle("slow");
    });
});
$(document).mouseup(function (e)
{
    var container = $(".panel");
    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.hide("slow");
    }
});
$(document).ready(function(){
    $("#banner").mouseenter(function(){
		$("#voucher").show();
        $("#voucher").animate({left: '500px'});
    });
});
</script>
<script>
$(document).ready(function(){
    $("#banner").dblclick(function(){
        alert("Error!!! You have double clicked. Please retry.");
    });
});
$(document).ready(function(){
    $("#voucher").mousedown(function(){
        var $temp = $("<input>");
	$("body").append($temp);
	$temp.val($("#voucher").text()).select();
	document.execCommand("copy");
	$temp.remove();
    });
});
</script>
</HEAD>
<BODY background="ads.jpg">
<?php include("header.php"); ?>
<TABLE width="1200" height="440" style="border-width:4px; border-style:dashed;border-color:#0000CC;border-radius: 25px;" align="center" id="grad" style="overflow-x:auto;">
<CAPTION align="center"><FONT color="white" size="5">How It Works</FONT></CAPTION>
<TR><TD>
<FONT size="4" face="Tahoma">
<UL>
<LI><SECTION id="flip1" class="ptr">Step - 1</SECTION>
<div id="panel1" class="panel">
✔Register by entering your details.<BR>
Use your email and password to login</div>
</LI><HR>
<LI><SECTION id="flip1" class="ptr">Step - 2</SECTION>
<div id="panel1" class="panel">
✔Tell us your specific address when registering.<BR>
ie..Bugolobi,village-mall shop Number..002</div>
</LI><HR>
<LI><SECTION id="flip2" class="ptr">Step - 3</SECTION>
<div id="panel2" class="panel">
✔Choose your favourite dish.<bold>Note</bold> :If you choose one or two...,make sure you select the rest to zero.
</div></LI><HR>
<LI><SECTION id="flip3" class="ptr">Step - 4</SECTION>
<div id="panel3" class="panel">✔Place your Order button at the bottom.<BR>
✔ShakaZulu sends out an sms notification to confirm your Order.<BR>
</div></LI><HR>
<LI><SECTION id="flip4" class="ptr">Step - 5</SECTION>
<div id="panel4" class="panel">✔Have the delicious delivered to your work place,home..etc..door step within 30-60 minutes</DIV></LI><HR>
<LI><SECTION id="flip5" class="ptr">Step - 6</SECTION>
<div id="panel5" class="panel">✔Pay your order on delivery.</DIV></LI><HR>
</UL></FONT>
</TR></TD>
</TABLE>
<DIV id="voucher" style="color:white;position:absolute;font-size: 25">Your Voucher ID is :6457HT5467 (Click to copy)</DIV><BR>
<IMG SRC="discount.jpg" width="300" height="150" border="2" id="banner" align="right"></IMG>

<FOOTER>
<font color="white" face="Arial" size="4" align="center">
<p> &copy 2019 ShakaZulu Foods Ltd. All rights reserved.</p></font>
</FOOTER> 
</BODY>

</HTML>