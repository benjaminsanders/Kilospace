<div class="container">
<div class="row">
<div class="col-lg-12" id="fadeinfast">
<nav>
  <ul class="pagination">
    <!--<li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>-->
    <li<?php if($section=='story'){ echo ' class="active"';}?>>
    <a href="index.php?page=help&section=story">Story</a>
    </li>
    <li<?php if($section=='administrators'){ echo ' class="active"';}?>>
    <a href="index.php?page=help&section=administrators">Administrators</a>
    </li>
    <li<?php if($section=='staff'){ echo ' class="active"';}?>>
    <a href="index.php?page=help&section=staff">Staff</a>
    </li>
    <li<?php if($section=='base'){ echo ' class="active"';}?>>
    <a href="index.php?page=help&section=base">The Base</a>
    </li>
    <li<?php if($section=='resources'){ echo ' class="active"';}?>>
    <a href="index.php?page=help&section=resources">Resources</a>
    </li>
    <li<?php if($section=='tasks'){ echo ' class="active"';}?>>
    <a href="index.php?page=help&section=tasks">Jobs & Tasks</a>
    </li>
    <!--<li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>-->
  </ul>
</nav>
</div>
<center>
<?php
if($section=='story'){
		include('assets/views/help/story.php');	
	}elseif($section=='administrators'){
		include('assets/views/help/administrators.php');	
	}elseif($section=='staff'){
		include('assets/views/help/staff.php');
	}elseif($section=='base'){
		include('assets/views/help/base.php');
	}elseif($section=='tasks'){
		include('assets/views/help/tasks.php');
	}
?>
</center>
</div>
</div>