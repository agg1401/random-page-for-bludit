# random-page-for-bludit

Adding random text feature to Bludit.

## Credits
* Coded: eren.games
* Published: agg1401

## Used
Just add the following to your theme's topbar.php file.

          <li class="nav-item">
          <?php $plugin = getPlugin('RasgeleYazi'); echo "<a class='nav-link' aria-current='page' href=".$plugin->random_post().">Random Post</a>"?>
          </li>
          
