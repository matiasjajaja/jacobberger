    	<?php if (isset($errors)): ?>
			<div class="error">
			<?php echo $errors?>
			</div>
		<?php endif; ?>
    <form action="<?=$loginuri?>" method="post" class="generic">
    
        <p><label class="title">Username</label>
        <input class="text_input" type="text" name="username" value="<?php echo $this->input->post('username')?>" /></p>
    
        <p><label class="title">Password</label>
        <input class="text_input" type="password" name="password" value="<?php echo $this->input->post('password')?>" /></p>
        
        <div class="buttons">
        <button type="submit">Login</button>
        </div>
    
    </form>