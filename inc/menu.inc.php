        <nav class="main-nav xs-20 sm-16 ">
          <ul class="main-nav__content cont-inline text-right ">
            <li><a href="index.php" <?php if( !$id ) echo "class=\"active\"" ?> >Home</a></li>
            <li class="dropdown-item">
              <a href="?id=about" <?php if ($id == "about") echo "class=\"active\""; ?> >About</a>
              <ul class="drop-level-1">
                <li><a href="#">About1</a></li>
                <li class="dropdown-item-1">
                  <a href="#">About2</a>
                  <ul class="drop-level-2">
                    <li><a href="#">About4</a></li>
                    <li><a href="#">About5</a></li>
                    <li><a href="#">About6</a></li>
                  </ul>
                </li>
                <li><a href="#">About3</a></li>
              </ul>
            </li>
            <li><a href="?id=portfolio&num=1" <?php if ($id == "portfolio") echo "class=\"active\""; ?>>Portfolio</a></li>
            <li><a href="?id=blog" <?php if ($id == "blog") echo "class=\"active\""; ?>>Blog</a></li>
            <li><a href="?id=contact" <?php if ($id == "contact") echo "class=\"active\""; ?>>Contact</a></li>
          </ul>
        </nav>