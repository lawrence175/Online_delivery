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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<!-- <table style="overflow-x:auto;" id="grad" border-style:dashed; border-color:#0000CC;> -->
<CAPTION><FONT color="white" size="5">Help & FAQ</FONT></CAPTION>
<TR><TD>
<FONT size="4" face="Tahoma">
<UL>
<LI><SECTION id="flip1" class="ptr">Where do you deliver?</SECTION>
<div id="panel1" class="panel">
We deliver across the following areas:<BR>
1)Bugolobi<BR>
2)Nakawa<BR>
3)Mbuya<BR>
4)Nakasero<BR>
5)Bukoto<BR>
2)Kamwokya<BR>
2)Kololo<BR></div>
</LI><HR>
<LI><SECTION id="flip2" class="ptr">When do you deliver?</SECTION>
<div id="panel2" class="panel">
We deliver Wednesday, Thursday and Friday for all customers, as well as Saturdays, Mondays, Tuesdays and Sundays in specific areas.<BR>
You can order during any time of the day. The delivery will be done between 30-60 mins after placement of order.</div></LI><HR>
<LI><SECTION id="flip3" class="ptr">What if I am not at home to accept the delivery?</SECTION>
<div id="panel3" class="panel">Not to worry! If you are not home during delivery, you specify in your Delivery Instructions.
We also suggest one of the following solutions:<BR>
✔Provide the address of a helpful neighbor that will be home during the delivery window and can accept your food package for you.<BR>
✔Have the box delivered to your work place.</div></LI><HR>
<LI><SECTION id="flip4" class="ptr">How does the food stay fresh in transit?</SECTION>
<div id="panel4" class="panel">We have nice silver packs to ensure that everything arrives to you perfectly!</DIV></LI><HR>
<LI><SECTION id="flip5" class="ptr">How much does delivery cost?</SECTION>
<div id="panel5" class="panel">It’s free,You register and delivery is on us!</DIV></LI><HR>
<LI><SECTION id="flip6" class="ptr">Charges upon delivery</SECTION>
<div id="panel6" class="panel">It's free delivery,that's if you have registered, ShakaZulu foods <a href="register.php"> Membership account</a>.</DIV></LI>
</UL></FONT>
</TR></TD>
</TABLE>
<DIV id="voucher" style="color:white;position:absolute;font-size: 25">Your Voucher ID is :1234567shaka (Click to copy)</DIV><BR>
<IMG SRC="discount.jpg" width="300" height="150" border="2" id="banner" align="right"></IMG>

<FOOTER>
<font color="white" face="Arial" size="4" align="center">
<p> &copy 2019 ShakaZulu Foods Ltd. All rights reserved.</p></font>
</FOOTER> 
</BODY>

</HTML>