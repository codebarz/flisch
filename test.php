<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

<ul><li>What is my name</li></ul>

<input type="text" value="" id="form">

<script type="text/javascript">
$(document).ready(function() {
    $('li').click(function() {
        $('#form').val($('li').text());
    });
});
</script>