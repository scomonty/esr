<script>
$(document).ready(function() {
	var dateCount = document.getElementById('hideNum').innerHTML;
var dateCount = dateCount.replace('+', '');
var dateCount = parseInt(dateCount);
var dateCount = dateCount * 3;

var numDiv = document.getElementById('addMeal');
numDiv.innerHTML += dateCount;


$('.Count').each(function () {
  var $this = $(this);
  jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
    duration: 2500,
    easing: 'swing',
    step: function () {
      $this.text(Math.ceil(this.Counter));
    }
  });
});
});
</script>
