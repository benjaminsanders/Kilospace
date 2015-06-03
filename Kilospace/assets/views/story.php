<div class="container">
<div class="row">
<div class="col-lg-12">
<nav>
  <ul class="pagination">
    <!--<li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>-->
    <li<?php if($section=='story'){ echo ' class="active"';}?>>
    <a href="index.php?page=story&section=story">Story</a>
    </li>
    <li<?php if($section=='administrators'){ echo ' class="active"';}?>>
    <a href="index.php?page=story&section=administrators">Administrators</a>
    </li>
    <li<?php if($section=='staff'){ echo ' class="active"';}?>>
    <a href="index.php?page=story&section=staff">Staff</a>
    </li>
    <li<?php if($section=='skills'){ echo ' class="active"';}?>>
    <a href="index.php?page=story&section=skills">Skills</a>
    </li>
    <li<?php if($section=='tasks'){ echo ' class="active"';}?>>
    <a href="index.php?page=story&section=tasks">Tasks</a>
    </li>
    <li<?php if($section=='base'){ echo ' class="active"';}?>>
    <a href="index.php?page=story&section=base">The Base</a>
    </li>
    <li<?php if($section=='resources'){ echo ' class="active"';}?>>
    <a href="index.php?page=story&section=resources">Resources</a>
    </li>
    
    <!--<li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>-->
  </ul>
</nav>
</div>

<?php
if($section=='story'){
		include('assets/views/help/story.php');	
	}elseif($section=='administrators'){
		include('assets/views/help/administrators.php');	
	}elseif($section=='staff'){
		include('assets/views/help/staff.php');
	}elseif($section=='base'){
		include('assets/views/help/base.php');
	}elseif($section=='resources'){
		include('assets/views/help/resources.php');
	}elseif($section=='skills'){
		include('assets/views/help/skills.php');
	}elseif($section=='tasks'){
		include('assets/views/help/tasks.php');
	}
?>

</div>
</div>