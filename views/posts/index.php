
<p>Todos os Posts</p>

<?php foreach($posts as $post) { ?>
	<p>
		<?php echo $post->$author; ?>
		<a href="?controller=post&action=show&id=<?php echo $post->$id; ?>">Veja mais...</a>
	</p>
<?php	} ?>
