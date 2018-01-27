$(document).ready(function() {
    loadBeginner();
    loadIntermediate();
    loadComplex();
    captchaCode();
    $(window).scroll(function() { if ($(this).scrollTop() > 100) { $('.scrollToTop').fadeIn() } else { $('.scrollToTop').fadeOut() } });
    $('.scrollToTop').click(function() { $("html,body").animate({ scrollTop: 0 }, "slow"); return !1 });
    $('input').val('');
    $('textarea').val('');
    $("#panel").show();
    $("#beginner-sub").show();
    $("#intermediate-sub").hide();
    $("#complex-sub").hide();
    $("#flip").click(function() { $("#panel").slideToggle("slow") });
    $("#beginner").click(function() { $("#beginner-sub").slideToggle("slow");
        $("#intermediate-sub").slideUp("slow");
        $("#complex-sub").slideUp("slow") });
    $("#intermediate").click(function() { $("#intermediate-sub").slideToggle("slow");
        $("#beginner-sub").slideUp("slow");
        $("#complex-sub").slideUp("slow") });
    $("#complex").click(function() { $("#complex-sub").slideToggle("slow");
        $("#beginner-sub").slideUp("slow");
        $("#intermediate-sub").slideUp("slow") });
    $('#submit-comment').click(function() {
        var name = $('#comment-user').val();
        var email = $('#comment-email').val();
        var comment = $('#user-comment').val();
        var captcha = $('#comment-captcha').val();
        var captchaVal = $("#captcha-code").text();
        var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");
        var alertMessage = "";
        if (name == "" || email == "" || comment == "" || captcha == "") {
            alertMessage = '<div class="alert alert-danger alert-dismissable" style="border-radius : 0px ;"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Alert! Fields can\'t be left blank.</div>'
            var commentAlertDiv = document.getElementById("comment-alert");
            while (commentAlertDiv.firstChild) { commentAlertDiv.removeChild(commentAlertDiv.firstChild) }
            $(commentAlertDiv).append(alertMessage);
            $(commentAlertDiv).show();
            return !1
        } else if (name.match(/\d+/g) != null || name.match(/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/) != null) {
            alertMessage = '<div class="alert alert-danger alert-dismissable" style="border-radius : 0px ;"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Alert! The name field can not contain special characters or numbers.</div>'
            var commentAlertDiv = document.getElementById("comment-alert");
            while (commentAlertDiv.firstChild) { commentAlertDiv.removeChild(commentAlertDiv.firstChild) }
            $(commentAlertDiv).append(alertMessage);
            $(commentAlertDiv).show();
            return !1
        } else if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
            alertMessage = '<div class="alert alert-danger alert-dismissable" style="border-radius : 0px ;"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Alert! Not a valid email address.</div>'
            var commentAlertDiv = document.getElementById("comment-alert");
            while (commentAlertDiv.firstChild) { commentAlertDiv.removeChild(commentAlertDiv.firstChild) }
            $(commentAlertDiv).append(alertMessage);
            $(commentAlertDiv).show();
            return !1
        } else if (captchaVal != captcha) {
            alertMessage = '<div class="alert alert-danger alert-dismissable" style="border-radius : 0px ;"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Alert! Wrong Captcha.</div>'
            var commentAlertDiv = document.getElementById("comment-alert");
            while (commentAlertDiv.firstChild) { commentAlertDiv.removeChild(commentAlertDiv.firstChild) }
            $(commentAlertDiv).append(alertMessage);
            $(commentAlertDiv).show();
            return !1
        } else { return !0 }
    });
    $('#submit-contact').click(function() {
        var name = $('#contact-name').val();
        var email = $('#contact-email').val();
        var comment = $('#contact-query').val();
        var captcha = $('#contact-captcha').val();
        var captchaVal = $("#captcha-code").text();
        var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");
        var alertMessage = "";
        if (name == "" || email == "" || comment == "" || captcha == "") {
            alertMessage = '<div class="alert alert-danger alert-dismissable" style="border-radius : 0px ;"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Alert! Fields can\'t be left blank.</div>'
            var commentAlertDiv = document.getElementById("contact-alert");
            while (commentAlertDiv.firstChild) { commentAlertDiv.removeChild(commentAlertDiv.firstChild) }
            $(commentAlertDiv).append(alertMessage);
            $(commentAlertDiv).show();
            return !1
        } else if (name.match(/\d+/g) != null || name.match(/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/) != null) {
            alertMessage = '<div class="alert alert-danger alert-dismissable" style="border-radius : 0px ;"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Alert! The name field can not contain special characters or numbers.</div>'
            var commentAlertDiv = document.getElementById("contact-alert");
            while (commentAlertDiv.firstChild) { commentAlertDiv.removeChild(commentAlertDiv.firstChild) }
            $(commentAlertDiv).append(alertMessage);
            $(commentAlertDiv).show();
            return !1
        } else if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
            alertMessage = '<div class="alert alert-danger alert-dismissable" style="border-radius : 0px ;"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Alert! Not a valid email address.</div>'
            var commentAlertDiv = document.getElementById("contact-alert");
            while (commentAlertDiv.firstChild) { commentAlertDiv.removeChild(commentAlertDiv.firstChild) }
            $(commentAlertDiv).append(alertMessage);
            $(commentAlertDiv).show();
            return !1
        } else if (captchaVal != captcha) {
            alertMessage = '<div class="alert alert-danger alert-dismissable" style="border-radius : 0px ;"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Alert! Wrong Captcha.</div>'
            var commentAlertDiv = document.getElementById("contact-alert");
            while (commentAlertDiv.firstChild) { commentAlertDiv.removeChild(commentAlertDiv.firstChild) }
            $(commentAlertDiv).append(alertMessage);
            $(commentAlertDiv).show();
            return !1
        } else { return !0 }
    });
    $('#search').keypress(function(e) {
        var key = e.which;
        if (key == 13) { mySearch() }
    })
});

function loadBeginner() {
    var beginner = JSON.parse(beginnerlist);
    var beginnerItems = "";
    for (var x = 0; x < beginner.length; x++) { beginnerItems += '<a href="' + beginner[x].url + '"><span class="fa fa-hand-o-right pull-left" aria-hidden="true"></span>' + beginner[x].title + '</a><hr>' }
    $("#beginner-sub").append(beginnerItems);
    $("#beginner-sub hr:last-child").remove()
};

function loadIntermediate() {
    var intermediate = JSON.parse(intermediatelist);
    var intermediateItems = "";
    for (var x = 0; x < intermediate.length; x++) { intermediateItems += '<a href="' + intermediate[x].url + '"><span class="fa fa-hand-o-right pull-left" aria-hidden="true"></span>' + intermediate[x].title + '</a><hr>' }
    $("#intermediate-sub").append(intermediateItems);
    $("#intermediate-sub hr:last-child").remove()
};

function loadComplex() {
    var complex = JSON.parse(complexlist);
    var complexItems = "";
    for (var x = 0; x < complex.length; x++) { complexItems += '<a href="' + complex[x].url + '"><span class="fa fa-hand-o-right pull-left" aria-hidden="true"></span>' + complex[x].title + '</a><hr>' }
    $("#complex-sub").append(complexItems);
    $("#complex-sub hr:last-child").remove()
};
$(function() {
    var beginner = JSON.parse(beginnerlist);
    var intermediate = JSON.parse(intermediatelist);
    var complex = JSON.parse(complexlist);
    var availableTags = [];
    for (var x = 0; x < beginner.length; x++) { availableTags.push(beginner[x].title) }
    for (var y = 0; y < intermediate.length; y++) { availableTags.push(intermediate[y].title) }
    for (var z = 0; z < complex.length; z++) { availableTags.push(complex[z].title) }
    $("#search").autocomplete({ source: availableTags })
});

function mySearch() {
    var searchItem = $('#search').val();
    var found = !1;
    var linkToVisit = "";
    var beginner = JSON.parse(beginnerlist);
    var intermediate = JSON.parse(intermediatelist);
    var complex = JSON.parse(complexlist);
    for (var x = 0; x < beginner.length; x++) { if (beginner[x].title == searchItem) { found = !0;
            linkToVisit = beginner[x].url; break } }
    if (!found) {
        for (var y = 0; y < intermediate.length; y++) { if (intermediate[y].title == searchItem) { found = !0;
                linkToVisit = intermediate[y].url; break } }
    }
    if (!found) {
        for (var z = 0; z < complex.length; z++) { if (complex[z].title == searchItem) { found = !0;
                linkToVisit = complex[z].url; break } }
    }
    if (found) { location.href = linkToVisit } else {
        var message = "";
        message = '<div class="alert alert-danger alert-dismissable" style="border-radius : 0px ;"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Oops! Seems like your request cannot be processed as of now. Please post your request in the <a href="forum.php" style="color:brown">forum.</a> We will try to process it as soon as possible ðŸ˜Š .</div>';
        var notifyDiv = document.getElementById("notification");
        while (notifyDiv.firstChild) { notifyDiv.removeChild(notifyDiv.firstChild) }
        $(notifyDiv).append(message);
        $(notifyDiv).show()
    }
}

function generateReplyBox(comment_id) {
    var num1, num2, num3, num4, Code;
    num1 = (Math.ceil(Math.random() * 10) - 1).toString();
    num2 = (Math.ceil(Math.random() * 10) - 1).toString();
    num3 = (Math.ceil(Math.random() * 10) - 1).toString();
    num4 = (Math.ceil(Math.random() * 10) - 1).toString();
    Code = num1 + num2 + num3 + num4;
    var reply_box = '<div class="row-fluid well" style="border-radius : 0px; border : #cccccc solid 1px; padding : 7px 7px 7px 7px"><form action="" method="post">' + '<div class="input-group"><span class="input-group-addon contact-fields"><i class="fa fa-user fa-fw"></i></span>' + '<input type="text" class="form-control" id="reply-user" placeholder="Enter your name*" name="reply_user"></div>' + '<div class="input-group"><span class="input-group-addon contact-fields"><i class="fa fa-envelope fa-fw"></i></span>' + '<input type="email" class="form-control" id="reply-email" placeholder="Enter your email address*" name="reply_email"></div>' + '<div class="form-group"><input type="hidden" class="form-control" id="parent-id" name="parent_id" value="' + comment_id + '"></div>' + '<div class="input-group"><span class="input-group-addon contact-fields"><i class="fa fa-comment fa-fw"></i></span>' + '<textarea class="form-control" id="user-reply"  name="user_reply" placeholder="Write your response here*"></textarea></div>' + '<div class="captcha well" id="captcha" ><h1 id="captcha-reply" class="text-center">' + Code + '<span id="refresh" class="fa fa-retweet pull-right" onclick="captchaCode();"></span></h1></div>' + '<div class="input-group"><span class="input-group-addon contact-fields"><i class="fa  fa-unlock fa-fw"></i></span>' + '<input  maxlength="4" size="4" id="reply-captcha" name="captcha" class="form-control contact-fields" type="text" placeholder="Enter captcha code">' + '</div>' + '<div id="reply-alert" style="margin-top : 15px;"></div>' + '<div class="input-group"><button id="submit-reply" type="submit" name="submit_reply" class="btn btn-primary pull-left" onclick="return validate();">Reply <span><i class="fa fa-reply fa-fw"></i></span></button></form>' + '<button id="cancel-reply" type="submit" class="btn btn-primary pull-left" style="margin-left:10px;" onclick="$(\'#' + comment_id + '\').hide()">Cancel <span><i class="fa fa-times fa-fw"></i></span></button></div></div>';
    var reply_div = document.getElementById(comment_id);
    while (reply_div.firstChild) { reply_div.removeChild(reply_div.firstChild) }
    $(reply_div).append(reply_box);
    $(reply_div).show()
};

function validate() {
    var name = $('#reply-user').val();
    var email = $('#reply-email').val();
    var reply = $('#user-reply').val();
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    var captcha = $('#reply-captcha').val();
    var captchaVal = $("#captcha-reply").text();
    var alertMessage = "";
    if (name == "" || email == "" || reply == "" || captcha == "") {
        alertMessage = '<div class="alert alert-danger alert-dismissable" style="border-radius : 0px ;"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Alert! Fields can\'t be left blank.</div>'
        var replyAlertDiv = document.getElementById("reply-alert");
        while (replyAlertDiv.firstChild) { replyAlertDiv.removeChild(replyAlertDiv.firstChild) }
        $(replyAlertDiv).append(alertMessage);
        $(replyAlertDiv).show();
        return !1
    } else if (name.match(/\d+/g) != null || name.match(/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/) != null) {
        alertMessage = '<div class="alert alert-danger alert-dismissable" style="border-radius : 0px ;"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Alert! The name field can not contain special characters or numbers.</div>'
        var replyAlertDiv = document.getElementById("reply-alert");
        while (replyAlertDiv.firstChild) { replyAlertDiv.removeChild(replyAlertDiv.firstChild) }
        $(replyAlertDiv).append(alertMessage);
        $(replyAlertDiv).show();
        return !1
    } else if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
        alertMessage = '<div class="alert alert-danger alert-dismissable" style="border-radius : 0px ;"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Alert! Not a valid email address.</div>'
        var replyAlertDiv = document.getElementById("reply-alert");
        while (replyAlertDiv.firstChild) { replyAlertDiv.removeChild(replyAlertDiv.firstChild) }
        $(replyAlertDiv).append(alertMessage);
        $(replyAlertDiv).show();
        return !1
    } else if (captchaVal != captcha) {
        alertMessage = '<div class="alert alert-danger alert-dismissable" style="border-radius : 0px ;"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Alert! Wrong Captcha.</div>'
        var replyAlertDiv = document.getElementById("reply-alert");
        while (replyAlertDiv.firstChild) { commentAlertDiv.removeChild(replyAlertDiv.firstChild) }
        $(replyAlertDiv).append(alertMessage);
        $(replyAlertDiv).show();
        return !1
    } else { return !0 }
};

function captchaCode() { var num1, num2, num3, num4, Code;
    num1 = (Math.ceil(Math.random() * 10) - 1).toString();
    num2 = (Math.ceil(Math.random() * 10) - 1).toString();
    num3 = (Math.ceil(Math.random() * 10) - 1).toString();
    num4 = (Math.ceil(Math.random() * 10) - 1).toString();
    Code = num1 + num2 + num3 + num4;
    $("#captcha h1").remove();
    $("#captcha span").remove();
    $("#captcha").append("<div><h1 id='captcha-code' class='text-center'>" + Code + "<span id='refresh' class='fa fa-retweet pull-right' onclick='captchaCode();'></span></h1></div>") }