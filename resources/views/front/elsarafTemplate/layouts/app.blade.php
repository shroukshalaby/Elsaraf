<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Work+Sans:300,400,700" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="elsarafTemplate/fonts/icomoon/style.css">
    <link rel="stylesheet" href="elsarafTemplate/css/bootstrap.min.css">
    <link rel="stylesheet" href="elsarafTemplate/css/magnific-popup.css">
    <link rel="stylesheet" href="elsarafTemplate/css/jquery-ui.css">
    <link rel="stylesheet" href="elsarafTemplate/css/owl.carousel.min.css">
    <link rel="stylesheet" href="elsarafTemplate/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="elsarafTemplate/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="elsarafTemplate/css/animate.css">
    <link rel="stylesheet" href="elsarafTemplate/fonts/flaticon/font/flaticon.css">
    <script src="https://kit.fontawesome.com/99c3b7fb20.js"></script>
    <link rel="stylesheet" href="elsarafTemplate/css/aos.css">
    <link rel="stylesheet" href="elsarafTemplate/css/style.css">
    <link rel="stylesheet" href="elsarafTemplate/css/new-style.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="elsarafTemplate/js/slider/registration_wizard_func.js"></script>
    <script src="elsarafTemplate/js/slider/common_scripts_min.js"></script>
    <title>

        @yield('title', 'الصراف')
    </title>


    @stack('head')
</head>
<body>
<div class="main">
    @include('front.elsarafTemplate.partials.header.header')


    @yield('content')


    @include('front.elsarafTemplate.partials.footer.footer')
    @include('front.elsarafTemplate.partials.footer.popups')

</div>


<!--<script src="elsaraftemplate/js/jquery-3.3.1.min.js"></script>-->
<script src="elsarafTemplate/js/jquery-migrate-3.0.1.min.js"></script>
<script src="elsarafTemplate/js/jquery-ui.js"></script>
<script src="elsarafTemplate/js/popper.min.js"></script>
<script src="elsarafTemplate/js/bootstrap.min.js"></script>
<script src="elsarafTemplate/js/owl.carousel.min.js"></script>
<script src="elsarafTemplate/js/jquery.stellar.min.js"></script>

<script src="elsarafTemplate/js/jquery.waypoints.min.js"></script>
<script src="elsarafTemplate/js/jquery.animateNumber.min.js"></script>
<script src="elsarafTemplate/js/aos.js"></script>

<script src="elsarafTemplate/js/main.js"></script>
<script src="elsarafTemplate/js/scripts/buyer.js"></script>
<script>
    function callapseFunction(clicked_id) {

        var str = clicked_id;
        var res = str.charAt(str.length - 1);
        var res2 = str.charAt(str.length - 2);
        var res3 = res2 + res;
        console.log(str);
        console.log(res3);
        if (res3 != 11 && res3 != 12) {
            if (res3 > 9 && res3 < 15) {
                var x = res3;
                console.log("tghnvb");
                $("#main" + res3).removeClass("collapse-none");
                $("#main" + res3).addClass("collapse-show");
                $("#mainTab" + res3).addClass("main-link-active");
                for (var i = 0; i < 15; i++) {
                    if (i != res3) {
                        $("#main" + i).removeClass("collapse-show");
                        $("#main" + i).addClass("collapse-none");
                        $("#mainTab" + i).removeClass("main-link-active");

                    }
                }
            } else {
                console.log("tghnvb");
                $("#main" + res).removeClass("collapse-none");
                $("#main" + res).addClass("collapse-show");
                $("#mainTab" + res).addClass("main-link-active");
                for (var i = 0; i < 15; i++) {
                    if (i != res) {
                        $("#main" + i).removeClass("collapse-show");
                        $("#main" + i).addClass("collapse-none");
                        $("#mainTab" + i).removeClass("main-link-active");

                    }
                }
            }
        } else {
            console.log("sdfghjk");
            $("#main10").removeClass("collapse-none");
            $("#main10").addClass("collapse-show");
            $("#mainTab" + res3).addClass("main-link-active");
            for (var i = 0; i < 15; i++) {
                if (i != res3 && i != 10) {
                    $("#main" + i).removeClass("collapse-show");
                    $("#main" + i).addClass("collapse-none");
                    $("#mainTab" + i).removeClass("main-link-active");
                }
            }
        }

    }

</script>
<script>
    $(document).ready(function () {
        console.log("aykalam");
        for (var i = 0; i < 15; i++) {
            if (i == 10) {
                $("#main10").addClass("collapse-show");
            } else {
                $("#main" + i).addClass("collapse-none");
            }

        }
    });
</script>

<script>

    function callapseFunction(clicked_id) {

        var str = clicked_id;
        var res = str.charAt(str.length - 1);
        var res2 = str.charAt(str.length - 2);
        console.log(res);
        console.log(res2);
        if (res2 > 9) {
            $("#mainTab" + res2).css("color", "#000");
            $("#mainTab" + res2).css("background", "#ccc");
            $("#main10").addClass("collapse-show");
            $("#main10").css("display", "block");
            for (var i = 0; i < 12; i++) {
                if (i != res2) {
                    $("#main" + i).removeClass("collapse-show");
                    $("#mainTab" + i).css("color", "#000");
                    $("#mainTab" + i).css("background", "#fff");
                    $("#main" + i).css("display", "none");
                }
            }
        }
        console.log(str);
    else
        {
            console.log(str);
            $("#mainTab" + res).css("color", "#000");
            $("#mainTab" + res).css("background", "#ccc");
            $("#main" + res).addClass("collapse-show");
            $("#main" + res).css("display", "block");
            for (var i = 0; i < 12; i++) {

                if (i != res) {
                    $("#main" + i).removeClass("collapse-show");
                    $("#mainTab" + i).css("color", "#000");
                    $("#mainTab" + i).css("background", "#fff");
                    $("#main" + i).css("display", "none");

                }
            }
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".autoReplyOnly").css("display", "none");


    });
    $("input[name=autoReply]:radio").change(function () {
        var sellervalue = $("input[name='autoReply']:checked").val();
        if (sellervalue == "autoReply1") {
            $(".autoReplyAndElsaraf").css("display", "block");
            $(".autoReplyOnly").css("display", "none");
            // $(".forward").attr('disabled', true);
            console.log(sellervalue);
        } else {
            $(".autoReplyOnly").css("display", "block");
            // $(".forward").attr('disabled', false);
            $(".autoReplyAndElsaraf").css("display", "none");
            console.log(xxx);
        }
    });
</script>
<script>

    $(function () {
        $("#btnAdd").bind("click", function () {
            var div = $("<tr />");
            div.html(GetDynamicTextBox(""));
            $("#TextBoxContainer").append(div);
        });
        $("body").on("click", ".remove", function () {
            $(this).closest("tr").remove();
        });
    });

    function GetDynamicTextBox(value) {
        return '<td><input name = "DynamicTextBox" type="text" value = "' + value + '" class="form-control"  placeholder="رابط الصفحة"/></td>' + '<td><button type="button" class="btn remove p-0"><i class="far fa-trash-alt"></i></button></td>'
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".box").slideUp();

        $("input[name=payment]:radio").change(function () {
            var radioValue = $("input[name='payment']:checked").val();
            if (radioValue == "payment3") {
                $(".box").slideDown();
                console.log("yes");
            } else {
                $(".box").slideUp();
                console.log("no");
            }
        });
    });
</script>

<script>
    var checkbox = document.getElementById('checkbox_one');
    var form = document.getElementById('showThis');
    var showHiddenDiv = function(){
       if(checkbox.checked) {
         form.style['display'] = 'block';
       } else {
         form.style['display'] = 'none';
       }
    }
    checkbox.onclick = showHiddenDiv;
    showHiddenDiv();

    </script>
    <script>

    document.getElementById('addPlayer').onclick = function createInputField() {
      var input = document.createElement('input');
      var lineBreak = document.createElement('br');
      var testId = "player";
      var i = 0;
      var x = document.getElementsByTagName('INPUT').length - 2;
      for (i = 0; i < x; i++) {
        i;
      }
      input.setAttribute('id', testId + i);
      input.type = 'text';
      input.name = 'player[]';
      var aplayer1 = document.getElementById('input-player-list');
      aplayer1.appendChild(input);
      aplayer1.appendChild(lineBreak);
    }

    document.getElementById('removePlayer').onclick = function removeInputField() {

      var x = document.getElementsByTagName('INPUT').length;
      if ( x > 3 ) {
      $('#input-player-list input:last').remove();
      $('#input-player-list br:last').remove();
      return false;
      } else {
      }
    }
    </script>
  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
</script>

@stack('scripts')
</body>
</html>
