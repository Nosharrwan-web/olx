<div style="width:40%;padding-left:10%;">
<h1> Login </h1>
<p> Enter your username & password: </p>
<?php echo $this->Form->create();
 	echo $this->Form->input('email');
 	echo $this->Form->input('password');
 	echo $this->Form->button('Login');?>
 	<button class="btn"style="background-color:black;"><?php 
	 echo $this->Html->link(__('Register'),['controller' => 'Users','action' => 'add']); ?>
	  </button><?php
	echo $this->Form->end() 
	?>
</div>


