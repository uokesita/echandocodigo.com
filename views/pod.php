<!-- Content with podcasts -->
<style>
  #player {
    margin : 10px 0;
  }
  .details {
    width   : 95%;
    padding : 0 20%;
  }
  .details td {
    font-size      : 11px;
    width          : 40%;
    text-align     : center;
    letter-spacing : 1px;
    color          : #bdbdbd;
  }
  #disqus_thread {
    color       : #999;
    font-family : sans;
  }
  #disqus_thread h3,  .dsq-comment-text {
    color : #250520;
  }
</style>

<div class="center">

  <div id="main-title">
    <div id="location">
      <a href="/">EchandoCodigo.com/</a>
    </div>
    <div id="section">
      <a href="/pods/">pods/</a><a href="/pods/<?=$p[id]?>"><?=$p[id]?></a>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="content">

    <div id="player"></div>

    <table class="details">
      <tr>
        <td>Duration: <?=$p[info]->duration?></td>
        <td>Date:     <?=$p[info]->date?>    </td>
      </tr>
    </table>

    <h2><?=$p[info]->title?></h1>

    <b><a href="<?=$p[info]->location?>" target="_blank">&rarr; Descarga Directa &larr;</a></b>
    <br><br>

    <b>Participantes:</b>
    <ul><?
      $people = $p[info]->people;
      foreach ($people as $k => $v) {
        echo "<li><a href='https://mobile.twitter.com/$k'>$v</a><br><br></li>";
      }
    ?></ul>
    
    <?// Extracting the description of this podcast.
      $art = 'podcasts/'.$p[id].'/article.php';
      if (file_exists($art)) {
        include($art);
      }
    ?>
  </div>

  <!-- AddThis Button BEGIN -->
  <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
  <a class="addthis_button_preferred_1"></a>
  <a class="addthis_button_preferred_2"></a>
  <a class="addthis_button_preferred_3"></a>
  <a class="addthis_button_preferred_4"></a>
  <a class="addthis_button_compact"></a>
  <a class="addthis_counter addthis_bubble_style"></a>
  </div>
  <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
  <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4fb896c542c10df6"></script>
  <!-- AddThis Button END -->

  <!-- DISQUS BEGIN -->
  <div id="disqus_thread"></div>
  <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'echandocodigo'; // required: replace example with your forum shortname
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
      var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
      dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
  </script>
  <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
  <a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
  <!-- DISQUS END -->

</div>
<script>
  // Adapting the player's width to the window size.
  (function(D){
    var width  = D.body.clientWidth * .62
      , player = D.getElementById('player')
    player.innerHTML = "\
    <!-- http://flash-mp3-player.net/ -->\
    <object type='application/x-shockwave-flash' data='/flash/player_mp3_maxi.swf' width='"+width+"' height='60'>\
      <param name='movie' value='/flash/player_mp3_maxi.swf' />\
      <param name='FlashVars' value='mp3=<?=$p[info]->location?>&config=/flash/config_maxi.txt&width="+width+"' />\
    </object>"
  })(document)
</script>