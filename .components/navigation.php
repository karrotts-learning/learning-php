<?php
namespace navigation;
function RenderNavigation() { ?>
<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height:100vh;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">PHP Playground</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <?php
            $files = scandir("C:\Users\Wes\Learning-PHP");
            for ($i = 2; $i < count($files); $i++) {
                if ($files[$i][0] == ".") {
                    continue;
                }
      ?>
                <li class="nav-item\" style="background-color:lightgrey; margin-bottom:5px;">
                    <a href="./<?php echo $files[$i] ?>" class="nav-link link-dark">
                        <?php echo ucfirst(substr($files[$i], 0, -4)) ?>
                    </a>
                </li>
            <?php } ?>
    </ul>
  </div>
<?php } ?>