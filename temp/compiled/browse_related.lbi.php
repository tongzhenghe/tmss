<div id="maybe-like" class="m m2">
	<div class="mt">
    	<h2>根据浏览猜你喜欢</h2>
        <div class="extra"></div>
    </div>
    <div class="mc">
    	<a class="guess-control next" href="javaacript:;" id="guess-backward"><i><em></em></i>换一批</a>
        <div id="guess-scroll">
            <ul class="lh" style="position:absolute;">
                <?php 
$k = array (
  'name' => 'browse_related',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
            </ul>
    	</div>
	</div>
</div>