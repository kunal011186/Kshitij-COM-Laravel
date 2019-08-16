<div class="d-k-footer">
	<div class="container">
        <span class="d-foottxt">Copyright © 2016 Kshitij, All Rights Reserved</span>
        <ul class="list-inline">
	<li> Kshitij Consultancy Services</li>
	<li> Email: <a href="mailto:info@kshitij.com">info@kshitij.com</a></li>
	<li> Ph: 00-91-33-24892010 / 24892012</li>
	 </ul>
            <!-- <li><a href="#">Home xxx</a></li>
            <li><a href="#">Company</a></li>
            <li><a href="#">Contact</a></li> -->
       
        <div class="clearfix"></div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var plugin_url = 'http://colourofmoney.kshitij.com/wp-content/plugins/domy/external/library/domy_save.php';
        $('body').on('submit', '#frm_subscribe', function(event){
            event.preventDefault();
            var email = $("#s_user_email").val();
            var save_url = $("#domy_plugin_url").val();
            var domy_base_url = $("#domy_base_url").val();
            var base_e = encodeURIComponent(domy_base_url);
            $("#frm_subscribe").remove();
            $("#s_success").html('<h5 style="text-align: center;color: #fff;font-weight: 900;line-height: 20px;">THANK YOU<br>FOR SUBSCRIBING TO OUR<br>NEWSLETTER</h5>').fadeIn();
            $.ajax({
                type: "POST",
                url: save_url,
                data:{'subscribe': 1, 'email' : email, 'base_url' : base_e},
                success: function(jsonResponse){
                    $("#frm_subscribe").remove();
                    $("#s_success").html('<h5 style="text-align: center;color: #fff;font-weight: 900;line-height: 20px;">THANK YOU<br>FOR SUBSCRIBING TO OUR<br>NEWSLETTER</h5>').fadeIn();
                }
            });
        });


        $("#txt_search").keydown(function(event){
            if(event.keyCode == 13){
                var q = $(this).val();
                if(q == '') {
                    $(this).focus();
                    return;
                }
                q = q.replace(/ /g, '+');
                var re_url = 'http://colourofmoney.kshitij.com/?s='+q;
                $(location).attr('href',re_url);
            }
        });

        $('body').on('click', '#fb_share', function(event){
            var title        = $('meta[property="og:title"]').attr("content");
            var url          = $('meta[property="og:url"]').attr("content");
           // var image        = $('meta[property="og:image"]').attr("content");
	    var image        = ($('meta[property="og:image"]').attr("content")) ? $('meta[property="og:image"]').attr("content") : '';
            var caption      = $('meta[property="og:site_name"]').attr("content");
            var description  = $('meta[property="og:description"]').attr("content");
//alert("image"+image);

            var base_url = '/home4/vikram/public_html';

            var share_url = 'https://www.facebook.com/dialog/feed?app_id=773989105992606&link='+url+'&name='+title+'&picture='+image+'&caption='+caption+'&description='+description+'&redirect_uri='+url+'';
            if(share_url != '') {
                $.ajax({
                    type: "POST",
                    url: plugin_url,
                    data:{'meta': 'fb','post_type' : 'website', 'url_data': base_url},
                    success: function(){
                    }
                });
            }
            $(location).attr('href',share_url);
        });

        $('body').on('click', '#twitter_share', function(event){
            var title        = $('meta[name="twitter:title"]').attr("content");
            var image        = $('meta[name="twitter:image"]').attr("content");
            var description  = $('meta[name="twitter:description"]').attr("content");
            var url          = $('meta[property="og:url"]').attr("content");

            var base_url = '/home4/vikram/public_html';

            var share_url = 'http://twitter.com/share?&text='+description+'';
            if(share_url != '') {
                $.ajax({
                    type: "POST",
                    url: plugin_url,
                    data:{'meta': 'twitter','post_type' : 'website', 'url_data': base_url},
                    success: function(){
                    }
                });
            }
            //$(location).attr('href',share_url);
	    window.open(share_url, '_blank');
        });

        $('body').on('click', '#linkedin_share', function(event){
            var title        = $('meta[name="twitter:title"]').attr("content");
            var image        = $('meta[name="twitter:image"]').attr("content");
            var description  = $('meta[name="twitter:description"]').attr("content");
            var url          = $('meta[property="og:url"]').attr("content");

            var base_url = '/home4/vikram/public_html';

            var share_url = "http://www.linkedin.com/shareArticle?mini=true&url="+url+"&source=Kshitij";

            if(share_url != '') {
                $.ajax({
                    type: "POST",
                    url: plugin_url,
                    data:{'meta': 'linkedin','post_type' : 'website', 'url_data': base_url},
                    success: function(){
                    }
                });
            }
            window.open(share_url, '_blank');
        });



$('.d-k-desc').readmore({
 speed: 75,
 maxHeight: 145
});
    });
</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>